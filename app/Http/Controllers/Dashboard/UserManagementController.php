<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserManagementController extends Controller
{
    public function __construct()
    {
        $this->middleware('super-admen');
	}

    public function customers()
    {
    	$name = 'users';
    	$type = "Customers";
    	$results = User::where('role', 'customer')->get();
    	return view('backend.pages.users.index', compact('results', 'type', 'name'));
    }

    public function admens()
    {
    	$name = 'users';
    	$type = "Admens";
    	$results = User::where('role', 'admen')->get();
    	return view('backend.pages.users.index', compact('results', 'type', 'name'));
    }

    public function moderators()
    {
        $name = 'users';
        $type = "Admens";
        $results = User::where('role', 'moderator')->get();
        return view('backend.pages.users.index', compact('results', 'type', 'name'));
    }

    public function edit_role(User $user)
    {
    	$name = 'users';
    	$page_title = "Edit User";
    	return view('backend.pages.users.edit', compact('user', 'page_title', 'name'));
    }

    public function update_role(Request $request, User $user)
    {
    	$user->role = $request->role;
    	$user->save();

    	return redirect('dashboard/users')->withSuccess('Update Success!');
    }

    public function destroy(User $user)
    {
    	$user->delete();
    	return back()->withSuccess('Delete success!');
    }
}
