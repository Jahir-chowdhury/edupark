<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }    
	public function editProfile()
    {
        return view('frontEnd.home.editProfile');
    }	
	public function viewProfile($teacher_id)
    {
		$teacher_id = Teacher::where('teacher_id',$teacher_id)->first();
		return view('frontEnd.home.viewProfile',['teacher_id'=>$teacher_id]);
    }	
	public function saveProfile(Request $request)
    {
		$this->validate($request,[
			//'mobile'=>'required|digits:11|unique:users',
			//'email'=>'required|string|email|max:255|unique:users',

		]);
		
		
        $teacher = new Teacher();
		//$UID = Teacher::select('teacher_id')->orderBy('teacher_id','desc')->first();
		//$UID=(int)substr($UID , -3);
       // $teacher->UID =Teacher::where($UID+1);
        $teacher->name =$request->name;
        $teacher->mobile =$request->mobile;
        $teacher->email =$request->email;
        $teacher->live_area =$request->live_area;
        $teacher->qualification =$request->qualification;
        $teacher->institution =$request->institution;
        $teacher->day_per_week =$request->day_per_week;
        $teacher->fees =$request->fees;
        $teacher->tution_style =$request->tution_style;
        $teacher->learing_place =$request->learing_place;
        $teacher->medium =$request->medium;
        $teacher->gender =$request->gender;
        $prefer_class =$request->prefer_class;
		$teacher->prefer_class =implode(",",$prefer_class);        
        $prefer_subject=$request->prefer_subject;
		$teacher->prefer_subject =implode(",",$prefer_subject);        
		$prefer_area=$request->prefer_area;
		$teacher->prefer_area =implode(",",$prefer_area);
		$teacher->group1 =$request->group1;
		$teacher->institution1 =$request->institution1;
		$teacher->result1 =$request->result1;
		$teacher->pass_year1 =$request->pass_year1;		
		$teacher->group2 =$request->group2;
		$teacher->institution2 =$request->institution2;
		$teacher->result2 =$request->result2;
		$teacher->pass_year2 =$request->pass_year2;		
		$teacher->group3 =$request->group3;
		$teacher->institution3 =$request->institution3;
		$teacher->result3 =$request->result3;
		$teacher->pass_year3 =$request->pass_year3;		
		$teacher->group4 =$request->group4;
		$teacher->institution4 =$request->institution4;
		$teacher->result4 =$request->result4;
		$teacher->pass_year4 =$request->pass_year4;
		//$teacher->pic =$request->pic;
		if ($request->hasFile('pic')) {
			$image=$request->file('pic');
			$name=$image->getClientOriginalName();
			$uploadpath='public/images/';
			$image->move($uploadpath,$name);
			$imageurl=$uploadpath.$name;
			
        $teacher->pic = $imageurl;}
        $teacher->save();
		//
		return redirect('/editProfile')->with('message','Teacher info save succesfully');
		
    }
	public function admin()
    {
        return view('admin.home.homeContent');
    }
}
