<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class UserController extends Controller
{
    //
    public function loadAcctgPage(){
        return view('acctg.main');
    }

    public function loadAssemblePage(){
        return view('production.main');
    }


    public function editUser($id)
{
    $user = User::with('roles')->find($id);
    if ($user) {
        $roles = Role::all(); // Fetch all roles
        return view('admin.editUser', compact('user', 'roles'));
    }
    return redirect()->back()->with('error', 'User not found.');
}

public function updateUser(Request $request, $id)
{
    $user = User::find($id);
    if ($user) {
        $user->roles()->sync($request->input('role'));
        return redirect()->route('manageUsers')->with('success', 'User role updated successfully.');
    }
    return redirect()->back()->with('error', 'User not found.');
}
    public function deleteUser($id)
    {
        $user = User::find($id);
        if ($user) {
            $user->delete();
            return redirect()->route('manageUsers')->with('success', 'User deleted successfully.');
        }
        return redirect()->back()->with('error', 'User not found.');
    }

    public function index()
{
    $users = User::with('userInfo')->get();
    return view('admin.manageUsers', compact('users'));
}

}
