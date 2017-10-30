<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormValidation extends Controller
{
    //
    public function playlistValidation($data)
    {
    	$this->validate($data, [
    		'name'			=>		'required|max:50',
    		'platform'		=>		'required|max:50',
    		'link'			=>		'required|max:100',
    		//'id'			=>		'required',
    	]);
        
    }
}
