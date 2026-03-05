<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\JobApplication;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class JobsController extends Controller
{
    // public function index(Request $request)
    // {
    //     $query = Job::query()->where("status", 1);

    //     if ($request->filled("q")) {
    //         $q = $request->q;
    //         $query->where(function ($s) use ($q) {
    //             $s->where("position", "like", "%{$q}%")
    //               ->orWhere("company_name", "like", "%{$q}%")
    //               ->orWhere("city", "like", "%{$q}%")
    //               ->orWhere("country", "like", "%{$q}%");
    //         });
    //     }

    //     $jobs = $query->orderByDesc("posted_date")->paginate(10)->withQueryString();

    //     return view("Home.jobs", compact("jobs"));
    // }
public function index(Request $request)
{
    $query = Job::query()->where("status", 1);

    // Keyword search
    if ($request->filled("q")) {
        $q = trim((string) $request->q);

        $query->where(function ($s) use ($q) {
            $s->where("position", "like", "%{$q}%")
              ->orWhere("company_name", "like", "%{$q}%")
              ->orWhere("description", "like", "%{$q}%")
              ->orWhere("city", "like", "%{$q}%")
              ->orWhere("country", "like", "%{$q}%");
        });
    }

    // Location filter
    if ($request->filled("location")) {
        $location = trim((string) $request->location);

        $query->where(function ($s) use ($location) {
            $s->where("city", "like", "%{$location}%")
              ->orWhere("state", "like", "%{$location}%")
              ->orWhere("country", "like", "%{$location}%");
        });
    }

    // Sector filter (job_category)
    // if ($request->filled("sector")) {
    //     $sector = trim((string) $request->sector);
    //     $query->where("job_category", $sector);
    // }

    // If only one job matched, open it directly
    $single = (clone $query)->select("id", "slug", "status")->first();
    $count = (clone $query)->count();

    if ($count === 1 && $single && !empty($single->slug)) {
        return redirect()->route("Home.jobs-details", $single->slug);
    }

    $jobs = $query->orderByDesc("posted_date")->paginate(10)->withQueryString();

    return view("Home.jobs", compact("jobs"));
}
    public function store(Request $request, Job $job)
    {
        // Custom validation messages in Urdu/Simple language
        $messages = [
            'full_name.required' => 'Please fill in your full name.',
            'full_name.string' => 'Full name must be text only.',
            'full_name.max' => 'Full name cannot exceed 255 characters.',

            'email.required' => 'Email address is required.',
            'email.email' => 'Please enter a valid email address.',
            'email.max' => 'Email cannot exceed 255 characters.',

            'phone.required' => 'Phone number is required.',
            'phone.string' => 'Phone number must be valid.',
            'phone.max' => 'Phone number cannot exceed 50 characters.',

            'city.required' => 'City name is required.',
            'city.string' => 'City name must be text only.',
            'city.max' => 'City name cannot exceed 255 characters.',

            'cv.required' => 'Please upload your CV.',
            'cv.file' => 'Please upload a valid file.',
            'cv.mimes' => 'Only PDF, DOC, or DOCX files are allowed.',
            'cv.max' => 'File size cannot exceed 2MB.',
        ];

        // Validation rules
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:50',
            'city' => 'required|string|max:255',
            'message' => 'nullable|string',
            'cv' => 'required|file|mimes:pdf,doc,docx|max:2048', // 2MB Limit
        ], $messages);

        // Store the CV
        $cvPath = null;
        if ($request->hasFile('cv')) {
            $cvPath = $request->file('cv')->store('job-cvs', 'public');
        }

        // Create job application
        JobApplication::create([
            'job_id' => $job->id,
            'full_name' => $validated['full_name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'city' => $validated['city'],
            'message' => $validated['message'] ?? null,
            'cv' => $cvPath,
            'status' => 0, // Default status as pending
        ]);

        // Redirect back with success message and old input
        return redirect()->back()
            ->with('success', 'Your application was submitted successfully!')
            ->with('applied_job', $job->position)
            ->withInput(); // Keep old input in case of validation errors
    }

    public function show(Job $job)
    {
        if ((int) $job->status !== 1) {
            abort(404);
        }

        return view("Home.job-details", compact("job"));
    }
}
