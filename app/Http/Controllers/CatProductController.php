<?php

namespace App\Http\Controllers;

use App\CatProduct;
use App\Category;
use App\PostProduct;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CatProductController extends Controller{
	//create new post
	public function addProductToCategory(Request $request){
		
		$post = CatProduct::create($request->all());
		
		return response()->json($post);
	}
	
	//update product category
	public function updateCategory(Request $request, $id){
		$post  = CatProduct::find($id);
		$post->cat_id = $request->input('cat_id');
		$post->product_id = $request->input('product_id');
		
		return response()->json($post);
	}
	//delete post
	public function deleteCatProduct(Request $request, $id){
		$post  = CatProduct::find($id);
		$post->delete();
		
		return response()->json('Removed.');
	}
	
	
	//find all products of catalog x
	public function findProductsOfCat(Request $request, $cat_id){
		$post  = CatProduct:: where('cat_id', 'like',$cat_id)->get();
		foreach ($post as $value){
			$product_id = $value-> product_id;
			$prod = PostProduct::find($product_id);
			if($prod->in_stock > 0){
			echo $prod;
			}
		}
	}
	
}
?>