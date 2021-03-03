<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;
use App\User;
use App\Teacher;


class SearchController extends Controller
{
    public function search()
    {
        return view('frontEnd.search.search');
    }    
	public function searchr()
    {

	//
	$prefer_area = Input::get ( 'prefer_area' );
    $prefer_subject = Input::get ( 'prefer_subject' );
	$prefer_class = Input::get ( 'prefer_class' );
	$gender = Input::get ( 'gender' );
    $user = Teacher::where ( 'prefer_area', 'LIKE', '%' . $prefer_area . '%' ,'AND ' )
	->where ( 'prefer_subject', 'LIKE', '%' . $prefer_subject . '%' ,'AND')
	->where ( 'prefer_class', 'LIKE', '%' . $prefer_class . '%' ,'AND' )
	->where ( 'gender', 'LIKE', '%' . $gender . '%' )
	->get ();
    if ((count ( $user) >0 )){
	return view ( 'frontEnd.search.searchr')->withDetails( $user )->withQuery ($gender);}
    else
	{return redirect ( '/search' )->with('message','No data found');}
	}
	
	    
	public function index()
    {
        
		return view('frontEnd.search.index');
    } 



}
