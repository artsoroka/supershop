<?php

class AuthController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function showLoginForm(){
		return View::make('auth.loginform'); 
	}

	public function authenticateUser(){

		$userdata = array(
	    	'login'     => Input::get('login'),
	        'password'  => Input::get('password')
	    );

		if( Auth::attempt($userdata) ) {
			return Redirect::to('/admin'); 
		} else {
			return View::make('auth.loginform', array(
				'error' => 'user data is incorrect',
				'old_input' => Input::all()
			)); 
		}

	}

	public function whoami(){
		return Auth::user(); 
	}

	public function logout(){
		Auth::logout();
		return Redirect::to('/');
	}

}
