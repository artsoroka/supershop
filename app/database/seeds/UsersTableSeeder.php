<?php 

class UsersTableSeeder extends Seeder {

	public function run(){
		DB::table('users')->delete(); 

		User::create(array(
				'username' => 'Super Administrator',
				'login'	   => 'superadmin', 
				'password' => Hash::make('superpassword')	
			));

		User::create(array(
				'username' => 'Moderator',
				'login'	   => 'moderator', 
				'password' => Hash::make('moderator')	
			));

	}

}