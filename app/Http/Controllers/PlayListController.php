<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ShareList;

class PlayListController extends Controller
{
	private $validate;

	public function __construct(
	 	FormValidation $validate
	)
	{
	 	$this->validate = $validate;
	 	
	}

    //
    public function playlistValidation(Request $request)
    {
    	
        if($request['platform'] == "Youtube") 
        {
            $id = strstr($request['link'], 'list=');    
        }
        elseif($request['platform'] == "Deezer")
        {
            $id = substr($request['link'], strrpos($request['link'], '/') + 1);
        }
        
    	$validator = $this->validate->playlistValidation($request);
    	$playlist        = new ShareList; 

    	$data = [
    		'name'			=>		$request['name'],
    		'platform'		=>		$request['platform'],
    		'link'			=>		$request['link'],
    		'list_id'		=>		$id
    	];

        $playlist->create($data);

    	session()->flash('form-submit', 'alert');

    	return redirect('/' );
    }
}
