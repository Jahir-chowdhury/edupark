    <!-- header start -->
@extends('frontEnd.master')
@section('mainContent')
    <div class="container-fluid">
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-6 col-xs-12">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="tutor">
                                    <img src="{{asset('public/frontEnd/img/header1.png')}}" class="img-fluid" alt="Header image">
                                    <div class="tutor-button">
                                        <a href="{{url('/editProfile')}}"><p>Join as tutor for FREE</p></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="student">
                                    <img src="{{asset('public/frontEnd/img/header2.png')}}" class="img-fluid" alt="Header image">
                                    <div class="student-button">
                                        <a href="#"><p>Post Tuition Needs for FREE</p></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1">
                        
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="live-tution">
                            <div class="row">
                                <div class="col-md-12 col-sm-6 col-xs-6">
                                    <img src="{{asset('public/frontEnd/img/bangladesh.png')}}" alt=""><p>Live Tuition 359</p>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-6 col-xs-6">
                                    <img src="{{asset('public/frontEnd/img/bangladesh.png')}}" alt=""><p>Live Tutor 786</p>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-6 col-xs-6">
                                    <img src="{{asset('public/frontEnd/img/bangladesh.png')}}" alt=""><p>Teaching Job 186</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-6 col-xs-6">
                                    <img src="{{asset('public/frontEnd/img/bangladesh.png')}}" alt=""><p>Part Time Job 107</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>   <!-- container -->
        </div>   <!-- header -->
    </div>  <!-- container-fluid -->

    <!-- header end -->


    <!-- Find Teacher start -->

    <div class="container">
        <div class="find-teacher">
            <div class="row">
                <div class="col-md-9 col-xs-12 col-sm-12">
                    <div class="find-teacher-header">
                        <h3>Find Teacher</h3>
                    </div>
                    <div class="find-teacher-search">
				{!! Form::open(['url' => '/searchr','method'=>'POST','class'=>'form-horizontal' ]) !!}
					{{csrf_field()}}
                        <div class="row">   
							<div class="col-md-3 col-sm-12 col-xs-12">
                                <div class="form-group">          
                                    <div class="select-option">
                                        <div class="selcet-icon">
										
                                            <select name="prefer_area"class="form-control">	
													<option value="">Select Area</option>
													 <option value="Uttara">Uttara</option>
													 <option value="Baridhara">Baridhara</option> 
													 <option value="Bonani">Bonani</option> 
													 <option value="Mirpur">Mirpur</option> 
													 <option value="Dhanmondi">Dhanmondi</option> 
													 <option value="Mohammadpur">Mohammadpur</option> 
													 <option value="Gulshan">Gulshan</option> 
											</select>
												
                                        </div> <!-- /.select-icon -->
                                    </div> <!-- /.select-option -->
                                </div>    <!-- form-group -->
                            </div>
                            <div class="col-md-3 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <div class="select-option">
                                        <div class="selcet-icon">
                                            <select name="prefer_subject"class="form-control">
                                                <option value="">Select Subject</option>
                                                 <option value="English">English</option>
                                                 <option value="Mathematics">Mathematics</option> 
                                                 <option value="Physics" >Physics</option> 
                                                 <option value="Chemistry">Chemistry</option> 
                                                 <option value="Biology">Biology</option> 
                                                 <option value="Bangla">Bangla</option> 
                                                 <option value="History">History</option> 
                                            </select>
                                        </div> <!-- /.select-icon -->
                                    </div> <!-- /.select-option -->
                                </div>    <!-- form-group --> 
                            </div>
                            <div class="col-md-2 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <div class="select-option">
                                        <div class="selcet-icon">
                                            <select name="prefer_class"class="form-control">
                                                <option value="">Class</option>
                                                 <option value="One">1</option>
                                                 <option value="Two">2</option> 
                                                 <option value="Three">3</option> 
                                                 <option value="Four">4</option> 
                                                 <option value="Five">5</option> 
                                                 <option value="Six">6</option> 
                                                 <option value="Seven">7</option> 
                                                 <option value="Eight">8</option> 
                                                 <option value="Nine">9</option> 
                                                 <option value="Ten">10</option> 
                                                 <option value="Eleven">11</option> 
                                                 <option value="Tweleve">12</option> 
                                            </select>
                                        </div> <!-- /.select-icon -->
                                    </div> <!-- /.select-option -->
                                </div>    <!-- form-group -->
                            </div>

                            <div class="col-md-2 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <div class="select-option">
                                        <div class="selcet-icon">
                                            <select name="gender"class="form-control">
                                                <option value="">Gender</option>
                                                 <option value="Male">Male</option>
                                                 <option value="Female">Female</option>  
                                            </select>
                                        </div> <!-- /.select-icon -->
                                    </div> <!-- /.select-option -->
                                </div>    <!-- form-group -->
                            </div>
							{!! Form::submit('search', ['class' => 'btn  Button-search']) !!}
								{!! Form::close() !!}
                            
                          <!--  <div class="col-md-2 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <div class="select-option">
                                        <div class="Button-search">
                                            <a href=""><button type="button">Search</button></a>
                                        </div>
                                    </div> 
                               </div>   
                            </div>-->
                        </div>
                    </div>  <!-- find-teacher-search --> 
                </div>   <!-- col --> 
                
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="month-highlight">
                        <div class="month-highlight-heading">
                            <h5>Highlights of this month</h5>
                        </div>
                        <div class="month-highlight-body">
                            <a href="#"><i class="fas fa-book"></i> Highest earned tutor of this</a></br>
                            <a href="#"><i class="fas fa-book"></i> Highest paid guardian of this</a></br>
                            <a href="#"><i class="fas fa-book"></i> Volentry tutor of this month</a></br>
                            <a href="#"><i class="fas fa-book"></i> Volentry tutor of this month</a></br>
                        </div>
                    </div>
                </div>

            </div>    <!-- row -->
        </div>   <!-- find-teacher -->
    </div>    <!-- container -->

    <!-- Find Teacher end -->


    <!-- Select subject start -->

    <div class="container">
        <div class="select-subject-area">
            <div class="row">
                    <div class="col-md-9 col-sm-12 col-xs-12">
                        <div class="select-subject-left">
                            <div class="row">
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="select-subject-head">
                                        <h4>SELECT SUBJECT</h4>
                                    </div>  
                                </div>
                            </div>
							
                            <div class="row">
                                <div class="col-md-3 col-sm-12 col-xs-12">
							{!! Form::open(['url' => '/searchr','method'=>'POST','enctype'=>'multipart/form-data','class'=>'form-horizontal' ]) !!}
					{{csrf_field()}}
                                    <div class="subject">
										<button name="prefer_subject" type="submit" value="Bangla"><i class="fas fa-book"></i>Bangla</button></br>
										<button name="prefer_subject" type="submit" value="English"><i class="fas fa-book"></i> English</button></br>
										<button name="prefer_subject" type="submit" value="Mathematics"><i class="fas fa-book"></i> Mathematics</button></br>
										<button name="prefer_subject" type="submit" value="Social science"><i class="fas fa-book"></i> Social science</button></br>
										<button name="prefer_subject" type="submit" value="Islamic staduies"><i class="fas fa-book"></i> Islamic staduies </button></br>
                                    </div>
					{!! Form::close() !!}
                                </div>
                                <div class="col-md-3 col-sm-12 col-xs-12">
                                    <div class="subject">
					{!! Form::open(['url' => '/searchr','method'=>'POST','enctype'=>'multipart/form-data','class'=>'form-horizontal' ]) !!}
					{{csrf_field()}}
										<button name="prefer_subject" type="submit" value="Bangla"><i class="fas fa-book"></i>Bangla</button></br>
										<button name="prefer_subject" type="submit" value="English"><i class="fas fa-book"></i> English</button></br>
										<button name="prefer_subject" type="submit" value="Mathematics"><i class="fas fa-book"></i> Mathematics</button></br>
										<button name="prefer_subject" type="submit" value="Social science"><i class="fas fa-book"></i> Social science</button></br>
										<button name="prefer_subject" type="submit" value="Islamic staduies"><i class="fas fa-book"></i> Islamic staduies </button></br>
					{!! Form::close() !!}
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-12 col-xs-12">
                                    <div class="subject">
                                        <a href="#"><i class="fas fa-book"></i> Finance</a></br>
                                        <a href="#"><i class="fas fa-book"></i> Economics</a></br>
                                        <a href="#"><i class="fas fa-book"></i> Management</a></br>
                                        <a href="#"><i class="fas fa-book"></i> Accounting</a></br>
                                        <a href="#"><i class="fas fa-book"></i> Bangla</a></br>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-12 col-xs-12">
                                    <div class="subject">
                                        <a href="#"><i class="fas fa-book"></i> Parent policy</a></br>
                                        <a href="#"><i class="fas fa-book"></i> Psychology</a></br>
                                        <a href="#"><i class="fas fa-book"></i> Logic</a></br>
                                        <a href="#"><i class="fas fa-book"></i> Social Science</a></br>
                                        <a href="#"><i class="fas fa-book"></i> Geography</a></br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="skillbase-subject">
                        <div class="skillbase-subject-heading">
                            <h5>Highlights of this month</h5>
                        </div>
                        <div class="skillbase-subject-body">
                            <a href="#"><i class="fas fa-book"></i>Video editing</a></br>
                            <a href="#"><i class="fas fa-book"></i>Motion graphic</a></br>
                            <a href="#"><i class="fas fa-book"></i>Animation</a></br>
                            <a href="#"><i class="fas fa-book"></i>Basic computer, xcel</a></br>
                            <a href="#"><i class="fas fa-book"></i>Website design</a></br>
                            <a href="#"><i class="fas fa-book"></i>Website design</a></br>
                        </div>
                    </div>
                </div>

            </div>  <!-- row -->
        </div>  <!-- select-subject-area -->
    </div>  <!-- container -->

    <!-- Select subject end -->


    <!-- Find Student Start -->

        <div class="container">
            <div class="find-teacher">
                <div class="row">
                    <div class="col-md-9 col-xs-12 col-sm-12">
                        <div class="find-teacher-header">
                            <h3>Find Students</h3>
                        </div>
                        <div class="find-teacher-search">
                        <div class="row">
                            <div class="col-md-3 col-sm-12 col-xs-12">
                                <div class="form-group">          
                                    <div class="select-option">
                                        <div class="selcet-icon">
                                            <select class="form-control">
                                                <option value="Default">Select Area</option>
                                                 <option value="Uttara">Uttara</option>
                                                 <option value="Baridhara">Baridhara</option> 
                                                 <option value="Bonani">Bonani</option> 
                                                 <option value="Mirpur">Mirpur</option> 
                                                 <option value="Dhanmondi">Dhanmondi</option> 
                                                 <option value="Mohammadpur">Mohammadpur</option> 
                                                 <option value="Gulshan">Gulshan</option> 
                                            </select>
                                        </div> <!-- /.select-icon -->
                                    </div> <!-- /.select-option -->
                                </div>    <!-- form-group -->
                            </div>
                            <div class="col-md-3 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <div class="select-option">
                                        <div class="selcet-icon">
                                            <select class="form-control">
                                                <option value="Default">Select Subject</option>
                                                 <option value="English">English</option>
                                                 <option value="Mathematics">Mathematics</option> 
                                                 <option value="Physics">Physics</option> 
                                                 <option value="Chemistry">Chemistry</option> 
                                                 <option value="Biology">Biology</option> 
                                                 <option value="Bangla">Bangla</option> 
                                                 <option value="History">History</option> 
                                            </select>
                                        </div> <!-- /.select-icon -->
                                    </div> <!-- /.select-option -->
                                </div>    <!-- form-group --> 
                            </div>
                            <div class="col-md-2 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <div class="select-option">
                                        <div class="selcet-icon">
                                            <select class="form-control">
                                                <option value="Default">Class</option>
                                                 <option value="1">1</option>
                                                 <option value="2">2</option> 
                                                 <option value="3">3</option> 
                                                 <option value="4">4</option> 
                                                 <option value="5">5</option> 
                                                 <option value="6">7</option> 
                                                 <option value="9">9</option> 
                                                 <option value="10">10</option> 
                                                 <option value="11">11</option> 
                                                 <option value="12">12</option> 
                                            </select>
                                        </div> <!-- /.select-icon -->
                                    </div> <!-- /.select-option -->
                                </div>    <!-- form-group -->
                            </div>

                            <div class="col-md-2 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <div class="select-option">
                                        <div class="selcet-icon">
                                            <select class="form-control">
                                                <option value="Default">Gender</option>
                                                 <option value="1">Male</option>
                                                 <option value="2">Female</option>  
                                            </select>
                                        </div> <!-- /.select-icon -->
                                    </div> <!-- /.select-option -->
                                </div>    <!-- form-group -->
                            </div>
                            
                            <div class="col-md-2 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <div class="select-option">
                                        <div class="Button-search">
                                            <button type="button">Search</button>
                                        </div>
                                    </div> <!-- /.select-option -->
                               </div>    <!-- form-group -->
                            </div>
                        </div>
                    </div>  <!-- find-teacher-search --> 
                    </div>   <!-- col --> 
                    
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="Govt-teaching-job">
                            <div class="Govt-teaching-job-heading">
                                <h5>Govt teaching job</h5>
                            </div>
                            <div class="Govt-teaching-job-body"> 
                                <a href="#"><i class="fas fa-book"></i> ABD Govt. school and college</a></br>
                                <a href="#"><i class="fas fa-book"></i> ABD Govt. school and college</a></br>
                                <a href="#"><i class="fas fa-book"></i> ABD Govt. school and college</a></br>
                                <a href="#"><i class="fas fa-book"></i> ABD Govt. school and college</a></br>
                            </div>
                        </div>
                    </div>

                </div>    <!-- row -->
            </div>   <!-- find-teacher -->
        </div>    <!-- container -->

    <!-- Find Student Start -->


    <!-- Select subject-2 start -->

    <div class="container">
        <div class="select-subject-area">
            <div class="row">
                <div class="col-md-9 col-sm-12 col-xs-12">
                    <div class="select-subject-left">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="select-subject-head">
                                    <h4>SELECT SUBJECT</h4>
                                </div>  
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 col-sm-12 col-xs-12">
                                <div class="subject">
                                    <a href="#"><i class="fas fa-book"></i> English</a></br>
                                    <a href="#"><i class="fas fa-book"></i> Mathematics</a></br>
                                    <a href="#"><i class="fas fa-book"></i> Social science</a></br>
                                    <a href="#"><i class="fas fa-book"></i> Islamic stadies</a></br>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 col-xs-12">
                                <div class="subject">
                                    <a href="#"><i class="fas fa-book"></i> Physics</a></br>
                                    <a href="#"><i class="fas fa-book"></i> Chemistry</a></br>
                                    <a href="#"><i class="fas fa-book"></i> Biology</a></br>
                                    <a href="#"><i class="fas fa-book"></i> Higher math</a></br>
                                    <a href="#"><i class="fas fa-book"></i> Statistics</a></br>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 col-xs-12">
                                <div class="subject">
                                    <a href="#"><i class="fas fa-book"></i> Finance</a></br>
                                    <a href="#"><i class="fas fa-book"></i> Economics</a></br>
                                    <a href="#"><i class="fas fa-book"></i> Management</a></br>
                                    <a href="#"><i class="fas fa-book"></i> Accounting</a></br>
                                    <a href="#"><i class="fas fa-book"></i> Bangla</a></br>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 col-xs-12">
                                <div class="subject">
                                    <a href="#"><i class="fas fa-book"></i> Parent policy</a></br>
                                    <a href="#"><i class="fas fa-book"></i> Psychology</a></br>
                                    <a href="#"><i class="fas fa-book"></i> Logic</a></br>
                                    <a href="#"><i class="fas fa-book"></i> Social Science</a></br>
                                    <a href="#"><i class="fas fa-book"></i> Geography</a></br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="teachingjob">
                        <div class="teachingjob-heading">
                            <h5>Teaching Job (Non Govt.)</h5>
                        </div>
                        <div class="teachingjob-body">
                            <a href="#"><i class="fas fa-book"></i>DEF English version school & college</a></br>
                            <a href="#"><i class="fas fa-book"></i>DEF English university</a></br>
                            <a href="#"><i class="fas fa-book"></i>school,college,university</a></br>
                            <a href="#"><i class="fas fa-book"></i>school,college,university</a></br>
                            <a href="#"><i class="fas fa-book"></i>school,college,university</a></br>
                        </div>
                    </div>
                </div>

            </div>  <!-- row -->
        </div>  <!-- select-subject-area -->
    </div>  <!-- container -->

    <!-- Select subject-2 end -->


    <!-- Featured Tutor Start -->
    
    <div class="container">
        <div class="feature-tutor">
            <div class="row">
                <div class="col-md-9 col-sm-12 col-xs-12">
                    <div class="feature-tutor-head">
                        <div class="row">
                            <div class="col-md-9 col-sm-6 col-xs-12">
                                <h3>Featured Tutors</h3>
                            </div>
                        </div>
                    </div>  <!-- feature-tutor-head -->
                    <div class="feature-tutor-body">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="single-tutor">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="single-tutor-left">
                                                <img src="{{asset('public/frontEnd/img/cat-1.jpg')}}" alt="Teacher picture">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="single-tutor-right">
                                                <p>Name: Md. Amanul Islam</p>
                                                <p>5000 BDT only</p>
                                                <p>01738666555</p>
                                                <p>Nikunjo, Dhaka</p>                                        
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="single-tutor">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="single-tutor-left">
                                                <img src="{{asset('public/frontEnd/img/cat-1.jpg')}}" alt="Teacher picture">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="single-tutor-right">
                                                <p>Name: Md. Amanul Islam</p>
                                                <p>5000 BDT only</p>
                                                <p>01738666555</p>
                                                <p>Nikunjo, Dhaka</p>                                        
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="single-tutor">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="single-tutor-left">
                                                <img src="{{asset('public/frontEnd/img/cat-1.jpg')}}" alt="Teacher picture">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="single-tutor-right">
                                                <p>Name: Md. Amanul Islam</p>
                                                <p>5000 BDT only</p>
                                                <p>01738666555</p>
                                                <p>Nikunjo, Dhaka</p>                                        
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="single-tutor">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="single-tutor-left">
                                                <img src="{{asset('public/frontEnd/img/cat-1.jpg')}}" alt="Teacher picture">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="single-tutor-right">
                                                <p>Name: Md. Amanul Islam</p>
                                                <p>5000 BDT only</p>
                                                <p>01738666555</p>
                                                <p>Nikunjo, Dhaka</p>                                        
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="single-tutor">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="single-tutor-left">
                                                <img src="{{asset('public/frontEnd/img/cat-1.jpg')}}" alt="Teacher picture">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="single-tutor-right">
                                                <p>Name: Md. Amanul Islam</p>
                                                <p>5000 BDT only</p>
                                                <p>01738666555</p>
                                                <p>Nikunjo, Dhaka</p>                                        
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="single-tutor">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="single-tutor-left">
                                                <img src="{{asset('public/frontEnd/img/cat-1.jpg')}}" alt="Teacher picture">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="single-tutor-right">
                                                <p>Name: Md. Amanul Islam</p>
                                                <p>5000 BDT only</p>
                                                <p>01738666555</p>
                                                <p>Nikunjo, Dhaka</p>                                        
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="single-tutor">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="single-tutor-left">
                                                <img src="{{asset('public/frontEnd/img/cat-1.jpg')}}" alt="Teacher picture">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="single-tutor-right">
                                                <p>Name: Md. Amanul Islam</p>
                                                <p>5000 BDT only</p>
                                                <p>01738666555</p>
                                                <p>Nikunjo, Dhaka</p>                                        
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="single-tutor">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="single-tutor-left">
                                                <img src="{{asset('public/frontEnd/img/cat-1.jpg')}}" alt="Teacher picture">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="single-tutor-right">
                                                <p>Name: Md. Amanul Islam</p>
                                                <p>5000 BDT only</p>
                                                <p>01738666555</p>
                                                <p>Nikunjo, Dhaka</p>                                        
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="single-tutor">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="single-tutor-left">
                                                <img src="{{asset('public/frontEnd/img/cat-1.jpg')}}" alt="Teacher picture">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="single-tutor-right">
                                                <p>Name: Md. Amanul Islam</p>
                                                <p>5000 BDT only</p>
                                                <p>01738666555</p>
                                                <p>Nikunjo, Dhaka</p>                                        
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="single-tutor">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="single-tutor-left">
                                                <img src="{{asset('public/frontEnd/img/cat-1.jpg')}}" alt="Teacher picture">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="single-tutor-right">
                                                <p>Name: Md. Amanul Islam</p>
                                                <p>5000 BDT only</p>
                                                <p>01738666555</p>
                                                <p>Nikunjo, Dhaka</p>                                        
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="single-tutor">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="single-tutor-left">
                                                <img src="{{asset('public/frontEnd/img/cat-1.jpg')}}" alt="Teacher picture">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="single-tutor-right">
                                                <p>Name: Md. Amanul Islam</p>
                                                <p>5000 BDT only</p>
                                                <p>01738666555</p>
                                                <p>Nikunjo, Dhaka</p>                                        
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="single-tutor">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="single-tutor-left">
                                                <img src="{{asset('public/frontEnd/img/cat-1.jpg')}}" alt="Teacher picture">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="single-tutor-right">
                                                <p>Name: Md. Amanul Islam</p>
                                                <p>5000 BDT only</p>
                                                <p>01738666555</p>
                                                <p>Nikunjo, Dhaka</p>                                        
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="single-tutor">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="single-tutor-left">
                                                <img src="{{asset('public/frontEnd/img/cat-1.jpg')}}" alt="Teacher picture">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="single-tutor-right">
                                                <p>Name: Md. Amanul Islam</p>
                                                <p>5000 BDT only</p>
                                                <p>01738666555</p>
                                                <p>Nikunjo, Dhaka</p>                                        
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="single-tutor">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="single-tutor-left">
                                                <img src="{{asset('public/frontEnd/img/cat-1.jpg')}}" alt="Teacher picture">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="single-tutor-right">
                                                <p>Name: Md. Amanul Islam</p>
                                                <p>5000 BDT only</p>
                                                <p>01738666555</p>
                                                <p>Nikunjo, Dhaka</p>                                        
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="single-tutor">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="single-tutor-left">
                                                <img src="{{asset('public/frontEnd/img/cat-1.jpg')}}" alt="Teacher picture">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="single-tutor-right">
                                                <p>Name: Md. Amanul Islam</p>
                                                <p>5000 BDT only</p>
                                                <p>01738666555</p>
                                                <p>Nikunjo, Dhaka</p>                                        
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="advertise-1">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo reiciendis, quo pariatur eius sint! Totam amet, deleniti explicabo. Voluptas qui ab ipsam iste numquam assumenda, praesentium, maxime esse voluptates vel! Optio ad nisi ut pariatur, animi deleniti sunt ex mollitia, placeat, asperiores ipsam laboriosam a laudantium
                    </div>
                    <div class="advertise-2">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos quia est expedita. Fuga dolorem a enim, cupiditate quas assumenda quod ratione? Praesentium magni, provident doloribus dignissimos repellendus tenetur atque officiis nam! Molestiae sed, quis. Qui magnam eum ad officiis ullam dignissimos maxime illum eos.
                    </div>
                </div>
            </div>  <!-- row -->
        </div>  <!-- feature-tutor -->
    </div>  <!-- container -->
    <!-- Featured Tutor Start -->


    <!-- View more start -->

    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="view-more">
                    <a href="#"><p>View More</p></a>
                </div>  <!-- view-more -->
            </div>
        </div>
    </div>  <!-- container -->

    <!-- View more end -->


    <!-- Our courses start -->

    <div class="container">
        <div class="our-course-section">
            <div class="row">
                <div class="col-md-9 col-sm-12 col-xs-12">
                    <div class="Our-courses-head">
                        <a href="#"><p>Our Courses</p></a>
                    </div>  <!-- Our-courses-head -->

                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="course">
                                <a href="#"><h4>Online courses</h4></a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="course">
                                <a href="#"><h4>Our library</h4></a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="course">
                                <a href="#"><h4>Computer course</h4></a>
                            </div>
                        </div>
                    </div>  <!-- row -->

                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="course">
                                <a href="#"><h4>Teachers Traning</h4></a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="course">
                                <a href="#"><h4>Job Course</h4></a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="course">
                                <a href="#"><h4>Skill Development</h4></a>
                            </div>
                        </div>
                    </div>  <!-- row -->

                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="course">
                                <a href="#"><h4>Online courses</h4></a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="course">
                                <a href="#"><h4>Our library</h4></a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="course">
                                <a href="#"><h4>Computer course</h4></a>
                            </div>
                        </div>
                    </div>  <!-- row -->

                </div>
                <div class="col-md-3">
                    <div class="advertise-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo reiciendis, quo pariatur eius sint! Totam amet, deleniti explicabo. Fuga dolorem a enim, cupiditate, adipisicing, adipisicing
                    </div>
                    <div class="advertise-4">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos quia est expedita. Fuga dolorem a enim, cupiditate. Fuga dolorem a enim, cupiditate
                    </div>
                </div>
            </div>  <!-- row -->
        </div>  <!-- our-course-section -->
    </div>  <!-- container -->

    <!-- Our courses end -->
	<!-- Logout Modal-->

	@endsection