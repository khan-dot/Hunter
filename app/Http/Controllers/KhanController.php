<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KhanController extends Controller
{
    function test($id){

    	$data['count'] = 5;
    	$data['some'] = 'MY Name';
    	$data['id'] = $id;

    	return view('test', $data);
    }
}
