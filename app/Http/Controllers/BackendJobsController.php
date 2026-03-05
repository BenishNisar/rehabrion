<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\JobApplication;


class BackendJobsController extends Controller
{
    //
   public function index()
    {
        return view('Dashboard.admin.jobs.index');
    }

   public function list()
    {
        $jobs = Job::latest()->paginate(10);
        return view('Dashboard.admin.jobs.list', compact('jobs'));
    }

// public function viewJob($id)
// {
//     $job = Job::findOrFail($id);
//     return view('Dashboard.admin.jobs.view', compact('job'));
// }

public function viewJob(Job $job)
{
    return view('Dashboard.admin.jobs.view', compact('job'));
}

    // public function application()
    // {
    //     return view('Dashboard.admin.jobs.application');
    // }
    public function application()
{
    $applications = JobApplication::with('job')
        ->latest()
        ->paginate(10);

    return view('Dashboard.admin.jobs.application', compact('applications'));
}

public function deleteApplication(JobApplication $application)
{
    if ($application->cv) {
        \Storage::disk('public')->delete($application->cv);
    }

    $application->delete();

    return redirect()->back()->with('success', 'Application deleted successfully');
}


// new jobs add
  public function newJob()
    {
        return view('Dashboard.admin.jobs.new-job');
    }

// edit jobs
     public function edit(Job $job)
    {
        return view('Dashboard.admin.jobs.edit', compact('job'));
    }
//update jobs
    public function update(Request $request, Job $job)
    {
        $validated = $request->validate([
            'company_name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'job_category' => 'nullable|string|max:255',
            'job_type' => 'nullable|string|max:255',
            'vacancy' => 'nullable|string|max:50',
            'experience' => 'nullable|string|max:50',
            'posted_date' => 'nullable|date',
            'last_date_to_apply' => 'nullable|date',
            'close_date' => 'nullable|date',
            'gender' => 'nullable|string|max:50',
            'salary_from' => 'nullable|string|max:50',
            'salary_to' => 'nullable|string|max:50',
            'city' => 'nullable|string|max:255',
            'state' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:255',
            'education_level' => 'nullable|string|max:255',
            'description' => 'required|string',
            'long_description' => 'required|string',
            'status' => 'required|in:0,1',
        ]);

        $job->update($validated);

        return redirect()->route('Dashboard.admin.jobs.list')->with('success', 'Job updated successfully');
    }

    public function destroy(Job $job)
    {
        $job->delete();
        return redirect()->route('Dashboard.admin.jobs.list')->with('success', 'Job deleted successfully');
    }


    public function applyJob()
    {
        $jobs = Job::latest()->get();
        return view('Dashboard.admin.jobs.apply', compact('jobs'));
    }

   public function store(Request $request)
    {
        $validated = $request->validate([
            'company_name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'job_category' => 'nullable|string|max:255',
            'job_type' => 'nullable|string|max:255',
            'vacancy' => 'nullable|string|max:50',
            'experience' => 'nullable|string|max:50',
            'posted_date' => 'nullable|date',
            'last_date_to_apply' => 'nullable|date',
            'close_date' => 'nullable|date',
            'gender' => 'nullable|string|max:50',
            'salary_from' => 'nullable|string|max:50',
            'salary_to' => 'nullable|string|max:50',
            'city' => 'nullable|string|max:255',
            'state' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:255',
            'education_level' => 'nullable|string|max:255',
            'description' => 'required|string',
            'long_description' => 'required|string',
            'status' => 'required|in:0,1',
        ]);

        Job::create($validated);

        return redirect()
            ->route('Dashboard.admin.jobs.apply')
            ->with('success', 'Job added successfully');
    }



    // jobs apply form here

public function applyForm(Job $job)
{
    return view('Dashboard.admin.jobs.apply-form', compact('job'));
}

public function submitApplication(Request $request, Job $job)
{
    $validated = $request->validate([
        'full_name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'nullable|string|max:50',
        'city' => 'nullable|string|max:255',
        'message' => 'nullable|string',
'cv' => 'nullable|file|mimes:pdf,doc,docx|max:5120',
    ]);

    $cvPath = null;
    if ($request->hasFile('cv')) {
        $cvPath = $request->file('cv')->store('job-cvs', 'public');
    }

    JobApplication::create([
        'job_id' => $job->id,
        'full_name' => $validated['full_name'],
        'email' => $validated['email'],
        'phone' => $validated['phone'] ?? null,
        'city' => $validated['city'] ?? null,
        'message' => $validated['message'] ?? null,
        'cv' => $cvPath,
        'status' => 0,
    ]);

    return redirect()->back()->with('success', 'Application submitted successfully');
}


    public function userProfile()
    {
        return view('Dashboard.admin.jobs.user-profile');
    }

}
