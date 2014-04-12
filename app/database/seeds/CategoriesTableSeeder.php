<?php 

class CategoriesTableSeeder extends Seeder {

	public function run(){
		DB::table('categories')->delete(); 

		Category::create(array(
				'title' => 'Apple',
				'parent_id' => 0
			));

		Category::create(array(
				'title' => 'Samsung',
				'parent_id' => 0
			));

		Category::create(array(
				'title' => 'iPhone',
				'parent_id' => 1
			));


	}

}