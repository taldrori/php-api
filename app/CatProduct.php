<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class CatProduct extends Model
{
	protected $fileable = ['cat_id','product_id'];
}
?>