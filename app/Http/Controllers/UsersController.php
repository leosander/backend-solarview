<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Models\UsersLog;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function getUsersLogs()
    {
        $usersLogs = UsersLog::with('user')->orderByDesc('login_date')->get();
        
        foreach ($usersLogs as &$userLog) {
            $userLog['first_name'] = $userLog['user']['first_name'];
            $userLog['last_name'] = $userLog['user']['last_name'];
            $userLog['email'] = $userLog['user']['email'];
            unset($userLog['user']);
        }
        return response()->json($usersLogs);
    }

    public function create(UserRequest $request)
    {   
        $user = User::create([
            "first_name" => $request->post("firstName"),
            "last_name" => $request->post("lastName"),
            "email" => $request->post("email"),
            "password" => Hash::make($request->post("password")),
        ]);

        return response()->json($user);
    }
}