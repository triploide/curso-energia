<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show($id)
    {
    	//all
    	$category = Category::with('events')->where('id', $id)->first();
    	$events = $category->events()->orderBy('title')->paginate(3);

    	return view('categories/show', ['category' => $category, 'events' => $events]);
    }

    public function create()
    {
    	$data = ['value' => 'editado'];
    	$category = Category::find(1);
    	$category->update($data);
    }
}
