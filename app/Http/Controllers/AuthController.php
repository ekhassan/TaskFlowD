<?php

namespace App\Http\Controllers;

use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Hash;
use Session;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Task;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('pages.dashboard')->with('success', 'Signed in');
        }
        return redirect('login')->withSuccess('Login details are not valid');
    }
    public function reg(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $data['password'] = Hash::make($data['password']); // Hash the password

        $check = $this->create($data);

        return redirect('login')->withSuccess('Successfully registered');
    }

    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => $data['password']
        ]);
    }
    public function dashboard()
    {
        if (Auth::check()) {
            // return view('pages/dashboard');
            $tasks = Task::all();

        return view('pages/dashboard', compact('tasks'));
        }
        return redirect('/')->withSuccess('You are not allowed to access');
    }
    public function signout()
    {
        Session::flush();
        Auth::logout();

        return Redirect('/');
    }

    // About Task
    public function createTaskView()
    {
        return view('pages.create');
    }
    public function createtask(Request $request)
    {
        $tasks = new Task;
        $tasks->id = $request->id;
        $tasks->name = $request->name;
        $tasks->description = $request->description;
        $tasks->status = $request->status;
        $tasks->deadline = $request->deadline;
        $tasks->save();

        return redirect('/');
    }
    public function edit($id)
    {
        $tasks = Task::find($id);
        return view('pages.update')->with(['tasks'=>$tasks]);
    }
    public function update(Request $request, $id)
    {
        $tasks = Task::find($id);
        $tasks->id = $request->id;
        $tasks->name = $request->name;
        $tasks->description = $request->description;
        $tasks->status = $request->status;
        $tasks->deadline = $request->deadline;
        $tasks->save();

        return redirect('/');
    }
    public function delete($id)
    {
        Task::destroy($id);
        return redirect('/')->with('status', 'Task '.$id.' deleted Successfully!');


    }

}