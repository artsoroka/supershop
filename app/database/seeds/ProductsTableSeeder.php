<?php 

class ProductsTableSeeder extends Seeder {

	public function run(){
		DB::table('products')->delete(); 

		Product::create(array(
				'category_id' => 1,
				'title'	   => 'iPhone 5S', 
				'alias'	   => 'iphone_5s',
				'description' => 'current top mobila'
			));

		Product::create(array(
				'category_id' => 1,
				'title'	   => 'iPhone 5c', 
				'alias'	   => 'iphone_5c',
				'description' => 'bright colors mofo'
			));

	}

}