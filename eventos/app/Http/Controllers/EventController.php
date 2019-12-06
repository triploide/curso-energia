<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
    	//$events = Event::all();
    	//$events = Event::paginate(3);

    	$events = Event::where('date', '>=', '2000-01-01')
    		//->offset()
    		//->limit()
    		//->having()
    		//->groupBy()
    		->with('category')
    		->orderBy('title')
    		->paginate()
    		//->count()
    	;

    	//dd($events->toArray());

    	return view('events/index', ['events' => $events]);
    }
}
