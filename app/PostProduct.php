<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class PostProduct extends Model
{
	protected $fileable = ['name','price','in_stock'];
}
?>