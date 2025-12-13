<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Role;
class RolesController extends Controller
{
    //
    public function index()
    {
        $roles = Role::all();
        return view('Dashboard.admin.roles.index', compact('roles'));
    }


    public function add()
    {
        return view('Dashboard.admin.roles.add');
    }


    public function store(Request $request)
    {
        $request->validate([
            'role_name' => 'required|string|max:255|unique:role,role_name',
        ]);

        Role::create([
            'role_name' => $request->role_name,
        ]);

        return redirect()->route('Dashboard.admin.roles.index')->with('success', 'Role added successfully.');
    }


    public function edit($id)
    {
        $role = Role::findOrFail($id);
        return view('Dashboard.admin.roles.edit', compact('role'));
    }


    public function update(Request $request, $id)
    {
        $role = Role::findOrFail($id);

        $request->validate([
            'role_name' => 'required|string|max:255|unique:role,role_name,' . $id,
        ]);

        $role->update([
            'role_name' => $request->role_name,
        ]);

        return redirect()->route('Dashboard.admin.roles.index')->with('success', 'Role updated successfully.');
    }


    public function delete($id)
    {
        $role = Role::findOrFail($id);
        $role->delete();

        return redirect()->route('Dashboard.admin.roles.index')->with('success', 'Role deleted successfully.');
    }

    public function view($id)
{
    $role = Role::findOrFail($id);
    return view('Dashboard.admin.roles.view', compact('role'));
}


}
