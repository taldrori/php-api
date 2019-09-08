<?php

namespace App\Http\Controllers;

use App\PostProduct;
use App\CatProduct;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostProductController extends Controller{
	
	//create new post
	public function createProduct(Request $request){
		
		$post = PostProduct::create($request->all());
		
		return response()->json($post);
	}
	
	//update post
	public function updateProduct(Request $request, $id){
		$post  = PostProduct::find($id);
		$post->name = $request->input('name');
		$post->price = $request->input('price');
		$post->in_stock = $request->input('in_stock');
		$post->save();
		
		return response()->json($post);
	}

	//view post
	public function viewProduct(Request $request, $id){
		$post  = PostProduct::find($id);
		
		return response()->json($post);
	}



	//delete post
	public function deleteProduct(Request $request, $id){
		$post  = PostProduct::find($id);
		$post->delete();
		
		return response()->json('Removed.');
	}
	
	//list post
	public function index(){
		$post  = PostProduct::all();
		
		return response()->json($post);
	}
	
	//find all product starting with cup
	public function findCup(){
		$post  = PostProduct:: where('name', 'like','%cup%')->get();
		
		return response()->json($post);
	}
		
}
?>
		
