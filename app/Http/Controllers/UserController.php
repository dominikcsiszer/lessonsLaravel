<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        $user = response()->json(User::all());
        return $user;
    }
    public function show($id)
    {
        $user = response()->json(User::find($id));
        return $user;
    }
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return redirect('/users/list');
    }
    public function store(Request $request) {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return redirect('/users/list');
    }
    public function destroy($id) {
        User::find($id)->delete();
        return redirect('/users/list');
    }

    //View
    public function newView() {
        return view('users.new');
    }
    public function listView() {
        $user = User::all();
        return view('users.list', ['users' => $user]);
    }
    public function editView($id) {
        $user = User::find($id);
        return view('users.edit', ['user' => $user]);
    }
    public function showView($id) {
        $user = User::find($id);
        return view('users.show', ['user' => $user]);
    }
}
