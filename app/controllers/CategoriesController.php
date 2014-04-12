<?php

class CategoriesController extends BaseController {

	public function listAll(){
		return Category::all();  
	}

	public function view($category_id){
		return $category_id; 
	}

	public function showCreationForm(){
		return "form to create new category"; 
	}

	public function createNew(){
		return "create new category logic ";  
	}

	public function update($category_id){
		return "about to update category with id $category_id"; 
	}

	public function delete($category_id){
		return "Are you shure to delete category with id $category_id"; 
	}

}
