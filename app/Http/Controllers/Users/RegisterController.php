<?php

namespace App\Http\Controllers\Users;

use App\Http\Requests\StoreUserRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class RegisterController extends Controller
{
    public function index(StoreUserRequest $request){
		
		$user = new User;
		
		$user->name = $request->name;
		$user->email = $request->email;
		$user->password = bcrypt($request->password);
		
		$user->save();
		
		return $user->id;
		
	}
}
