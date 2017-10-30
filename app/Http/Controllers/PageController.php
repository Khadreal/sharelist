<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ShareList;

class PageController extends Controller
{
    //
    public function index()
    {
    	return view('pages.index');
    }

    //List Playlist
    public function list()
    {
    	$data = ShareList::orderBy('id', 'desc')->get();
  		return view('pages.playlist')->with('data',$data);
    }

}
