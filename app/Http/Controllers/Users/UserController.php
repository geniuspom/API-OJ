<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class UserController extends Controller
{
	public function index(){
		return Auth::Users->id;
	}
	
    public function store(){
		
	}
	
	public function show(){
		
	}
	
	public function update(){
		
	}
	
	public function destroy(){
		
	}
	
}
