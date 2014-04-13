<?php

class CategoriesController extends BaseController {

	public function listAll(){
		return Category::all();  
	}

	public function view($category_id){
		$category =  Category::find($category_id);  
		if( ! $category ) return "No category found"; 
		return View::make('admin.editCategory', array(
			'category' => $category
		));
	}

	public function showCreationForm(){
		return View::make('admin.createNewCategory'); 
	}

	public function createNew(){
		$category 		= new Category; 
		
		$category->title 	= Input::get('title'); 
		$category->alias 	= Input::get('alias'); 
		$category->parent_id 	= Input::get('parent_id'); 

		$rows_affected 		= $category->save();   
		if($rows_affected) return "Category created successfuly";  
	
		return "No category was created"; 
	}

	public function update($category_id){
		$category = Category::find($category_id); 
		
		if( ! $category ) return "No category found"; 
		
		$category->title = Input::get('title'); 
		$category->alias = Input::get('alias'); 
		$category->parent_id = Input::get('parent_id'); 
		
		$rows_affected = $category->save(); 
	
		if($rows_affected) return Redirect::to('/admin/categories/' . $category_id)->with("status","changes saved successfuly"); 

		return "No changes were applied"; 

	}

	public function delete($category_id){
		$category_found = Category::find($category_id); 
		if($category_found){
			$rows_affected = $category_found->delete(); 
			if( $rows_affected ) return "Category $category_id was deleted"; 
			return "Something gone realy wild: could not delete category $category_id"; 
		} 

		return "Category $category_id was not found"; 
			
	}

}
