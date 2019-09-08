<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller{
	//create new post
	public function createCategory(Request $request){
		
		$post = Category::create($request->all());
		
		return response()->json($post);
	}
	
	//update post
	public function updateCategory(Request $request, $id){
		$post  = Category::find($id);
		$post->name = $request->input('name');
		
		return response()->json($post);
	}
	
	//view post
	public function viewCategory(Request $request, $id){
		$post  = Category::find($id);
		
		return response()->json($post);
	}
	//delete post
	public function deleteCategory(Request $request, $id){
		$post  = Category::find($id);
		$post->delete();
		
		return response()->json('Removed.');
	}
	
	//list post
	public function index(){
		$post  = Category::all();
		
		return response()->json($post);
	}
	
}
?>