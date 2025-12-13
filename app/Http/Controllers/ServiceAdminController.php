<?php

namespace App\Http\Controllers;
use Intervention\Image\Laravel\Facades\Image; // top pe

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File; // <= add

class ServiceAdminController extends Controller
{
    public function index(Request $r)
    {
        $q = $r->get('q');
        $rows = Service::when($q, fn($x)=>$x->where(function($w) use($q){
                            $w->where('title','like',"%$q%")
                              ->orWhere('description','like',"%$q%");
                        }))
                        ->orderBy('sort_order')
                        ->orderBy('id','desc')
                        ->paginate(15)
                        ->withQueryString();

        return view('Dashboard.admin.services-mgmt.index', compact('rows','q'));
    }

    public function add()
    {
        return view('Dashboard.admin.services-mgmt.add');
    }

   public function store(Request $r)
{
$data = $r->validate([
  'title'       => 'required|string|max:191',
  'description' => 'nullable|string',
  'sort_order'  => 'nullable|integer|min:0',
  'is_active'   => 'required|boolean',
  'image' => 'required|file|mimes:jpg,jpeg,png,webp,gif|max:20480', // 20 MB

]);

    $data['slug'] = \Illuminate\Support\Str::slug($data['title']);
    $base = $data['slug']; $i=1;
    while (Service::where('slug',$data['slug'])->exists()) {
        $data['slug'] = $base.'-'.$i++;
    }

    if ($r->hasFile('image')) {
        $dir = public_path('uploads/services');
        if (!\Illuminate\Support\Facades\File::exists($dir)) {
            \Illuminate\Support\Facades\File::makeDirectory($dir, 0755, true);
        }
        $file = $r->file('image');
        $name = \Illuminate\Support\Str::slug($data['title']).'-'.time().'.'.$file->getClientOriginalExtension();
        $file->move($dir, $name);
        $data['image'] = 'uploads/services/'.$name; // relative path
    }

    Service::create($data);
    return redirect()->route('Dashboard.admin.services-mgmt.index')->with('success','Service created.');
}


    public function edit(Service $service)
    {
        return view('Dashboard.admin.services-mgmt.edit', compact('service'));
    }

    public function update(Request $r, Service $service)
    {
$data = $r->validate([
  'title'       => 'required|string|max:191',
  'description' => 'nullable|string',
  'sort_order'  => 'nullable|integer|min:0',
  'is_active'   => 'required|boolean',
  'image' => 'nullable|file|mimes:jpg,jpeg,png,webp,gif|max:20480', // 20 MB

]);

        // slug update if title changed
        $newSlug = Str::slug($data['title']);
        if ($newSlug !== $service->slug) {
            $base = $newSlug; $i=1;
            while (Service::where('slug',$newSlug)->where('id','!=',$service->id)->exists()) {
                $newSlug = $base.'-'.$i++;
            }
        }
        $data['slug'] = $newSlug;

        // Image replace: delete old and move new
        if ($r->hasFile('image')) {
            $dir = public_path('uploads/services');
            if (!File::exists($dir)) {
                File::makeDirectory($dir, 0755, true);
            }
            // delete old if exists
            if ($service->image && File::exists(public_path($service->image))) {
                File::delete(public_path($service->image));
            }
            $file = $r->file('image');
            $name = Str::slug($data['title']).'-'.time().'.'.$file->getClientOriginalExtension();
            $file->move($dir, $name);
            $data['image'] = 'uploads/services/'.$name;
        }

        $service->update($data);
        return redirect()->route('Dashboard.admin.services-mgmt.index')->with('success','Service updated.');
    }

    public function destroy(Service $service)
    {
        // delete file from public
        if ($service->image && File::exists(public_path($service->image))) {
            File::delete(public_path($service->image));
        }
        $service->delete();
        return back()->with('success','Service deleted.');
    }
}
