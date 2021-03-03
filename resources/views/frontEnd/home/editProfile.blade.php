@extends('frontEnd.master')

@section('mainContent')

  <!-- Teacher registration start -->

    <div class="container">
        <div class="full-reg-area">
		{!! Form::open(['url' => '/saveProfile','method'=>'POST','enctype'=>'multipart/form-data','class'=>'form-horizontal' ]) !!}
			{{csrf_field()}}
			<div class="form-group">
            <div class="reg-area-1">
                <div class="reg-header">
                    <h3>Teacher Registration</h3>
                </div>
				<div class="form-group">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
						<div class="Name">
							Name:<br>
                                <input  type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
						</div>						
						<div class="mobile">
							Mobile:<br>
                                <input  type="text" class="form-control{{ $errors->has('mobile') ? ' is-invalid' : '' }}" name="mobile" value="{{ old('mobile') }}" required autofocus>

                                @if ($errors->has('mobile'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                                @endif
						</div>						
						<div class="emailw">
							Email:<br>
                                <input  type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
						</div>						
						<div class="live_area">
							Leaving Area:<br>
                                <input  type="text" class="form-control{{ $errors->has('live_area') ? ' is-invalid' : '' }}" name="live_area" value="{{ old('live_area') }}" required autofocus>

                                @if ($errors->has('live_area'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('live_area') }}</strong>
                                    </span>
                                @endif
						</div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
						<div class="qualification">
							Qualification:<br>
                            <input  type="text" class="form-control{{ $errors->has('qualification') ? ' is-invalid' : '' }}" name="qualification" value="{{ old('qualification') }}" required autofocus>

                                @if ($errors->has('qualification'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('qualification') }}</strong>
                                    </span>
                            @endif
						</div>						
						<div class="institution">
							Institution:<br>
                            <input  type="text" class="form-control{{ $errors->has('institution') ? ' is-invalid' : '' }}" name="institution" value="{{ old('institution') }}" required autofocus>

                                @if ($errors->has('institution'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('institution') }}</strong>
                                    </span>
                            @endif
						</div>						
						<div class="day_per_week">
							Day per week:<br>
                            <input  type="text" class="form-control{{ $errors->has('day_per_week') ? ' is-invalid' : '' }}" name="day_per_week" value="{{ old('day_per_week') }}" required autofocus>

                                @if ($errors->has('day_per_week'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('day_per_week') }}</strong>
                                    </span>
                            @endif
						</div>						
						<div class="fees">
							Expected tution fees:<br>
                            <input  type="text" class="form-control{{ $errors->has('fees') ? ' is-invalid' : '' }}" name="fees" value="{{ old('fees') }}" required autofocus>

                                @if ($errors->has('fees'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('fees') }}</strong>
                                    </span>
                            @endif
						</div>
                    </div>
                    </div> <!-- row -->
                </div> 
            </div>  <!-- reg-area-1 -->

            <div class="reg-area-2">
			<div class="form-group">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <p>Preferred Tutoring Style: </p>
                            <input type="radio" name="tution_style" value="Group Tution" checked> Group Tution<br>
                            <input type="radio" name="tution_style" value="Private Tution"> Private Tution<br>
                            <input type="radio" name="tution_style" value="Both (Group & Private)"> Both (Group & Private)<br><br>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <p>Place of Learning: </p>
                            <input type="radio" name="learing_place" value="Home Visit" checked> Home Visit<br>
                            <input type="radio" name="learing_place" value="My Place"> My Place<br>
                            <input type="radio" name="learing_place" value="Both (Home & My Place)"> Both (Home & My Place)<br><br>
                    </div>
                </div>
				<div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <p>Preferred Medium of Education: </p>
                            <input type="radio" name="medium" value="Bangla Medium" checked> Bangla Medium<br>
                            <input type="radio" name="medium" value=" English Medium"> English Medium<br>
                            <input type="radio" name="medium" value="English Version"> English Version<br><br>
                    </div>					
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <p>Gender: </p>
                            <input type="radio" name="gender" value="Male" checked> Male<br>
                            <input type="radio" name="gender" value="Female"> Female<br>
                    </div>
                </div>
            </div>
            </div>  <!-- reg-area-2 -->

            <div class="reg-area-3">
				<div class="form-group">
                <div class="row">
                    <div class="col-md-12">
                        <div class="classess">
                            <p>Preferred Classes: </p>
                                <div class="checkbox_1">
                                    <input type="checkbox" name="prefer_class[]" value="one" checked> One
                                    <input type="checkbox" name="prefer_class[]" value="two"> Two 
                                    <input type="checkbox" name="prefer_class[]" value="three"> Three 
                                    <input type="checkbox" name="prefer_class[]" value="four"> Four
                                    <input type="checkbox" name="prefer_class[]" value="five"> Five
                                    <input type="checkbox" name="prefer_class[]" value="six"> Six
                                    <input type="checkbox" name="prefer_class[]" value="seven"> Seven
                                    <input type="checkbox" name="prefer_class[]" value="eight"> Eight
                                    <input type="checkbox" name="prefer_class[]" value="nine"> Nine
                                    <input type="checkbox" name="prefer_class[]" value="ten"> Ten
                                    <input type="checkbox" name="prefer_class[]" value="eleven"> Eleven
                                    <input type="checkbox" name="prefer_class[]" value="twelve"> Twelve
                                </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>

            <div class="reg-area-4">
                <div class="row">
				<div class="form-group">
                    <div class="col-md-12">
                        <div class="subjects">
                            <p>Preferred Subject: </p>
                                <div class="checkbox_1">
                                    <input type="checkbox" name="prefer_subject[]" value="bangla" checked> Bangla
                                    <input type="checkbox" name="prefer_subject[]" value="english"> English
                                    <input type="checkbox" name="prefer_subject[]" value="mathematics"> Mathematics
                                    <input type="checkbox" name="prefer_subject[]" value="social-science"> Social science
                                    <input type="checkbox" name="prefer_subject[]" value="islamic-stadies"> Islamic stadies
                                    <input type="checkbox" name="prefer_subject[]" value="physics"> Physics
                                    <input type="checkbox" name="prefer_subject[]" value="chemistry"> Chemistry
                                    <input type="checkbox" name="prefer_subject[]" value="biology"> Biology
                                    <input type="checkbox" name="prefer_subject[]" value="higher-math"> Higher math
                                    <input type="checkbox" name="prefer_subject[]" value="statistics"> Statistics
                                    <input type="checkbox" name="prefer_subject[]" value="finance"> Finance
                                    <input type="checkbox" name="prefer_subject[]" value="economics"> Economics
                                    <input type="checkbox" name="prefer_subject[]" value="management"> Management
                                    <input type="checkbox" name="prefer_subject[]" value="accounting"> Accounting
                                    <input type="checkbox" name="prefer_subject[]" value="parent-policy"> Parent policy
                                    <input type="checkbox" name="prefer_subject[]" value="psychology"> Psychology
                                    <input type="checkbox" name="prefer_subject[]" value="logic"> Logic
                                    <input type="checkbox" name="prefer_subject[]" value="social-science"> Social Science
                                    <input type="checkbox" name="prefer_subject[]" value="geography"> Geography
                                    <input type="checkbox" name="prefer_subject[]" value="video-editing"> Video Editing
                                    <input type="checkbox" name="prefer_subject[]" value="motion-graphic"> Motion Graphic
                                    <input type="checkbox" name="prefer_subject[]" value="animation"> Animation
                                    <input type="checkbox" name="prefer_subject[]" value="website-design"> Website Design
                                </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>

            <div class="reg-area-5">
				<div class="form-group">
                <div class="row">
                    <div class="col-md-12">
                        <div class="areas">
                            <p>Preferred Area to Teach: </p>
                                <div class="checkbox_1">
                                    <input type="checkbox" name="prefer_area[]" value="Uttara" checked> Uttara
                                    <input type="checkbox" name="prefer_area[]" value="Bonani"> Bonani
                                    <input type="checkbox" name="prefer_area[]" value="Gulshan"> Gulshan
                                    <input type="checkbox" name="prefer_area[]" value="Baridhara"> Baridhara
                                    <input type="checkbox" name="prefer_area[]" value="Mirpur"> Mirpur
                                    <input type="checkbox" name="prefer_area[]" value="Badda"> Badda
                                    <input type="checkbox" name="prefer_area[]" value="Bosundhora"> Bosundhora
                                    <input type="checkbox" name="prefer_area[]" value="Rampura"> Rampura
                                    <input type="checkbox" name="prefer_area[]" value="Khilghao"> Khilghao
                                    <input type="checkbox" name="prefer_area[]" value="Malibagh"> Malibagh
                                    <input type="checkbox" name="prefer_area[]" value="Dhanmondi"> Dhanmondi
                                    <input type="checkbox" name="prefer_area[]" value="Mohammadpur"> Mohammadpur
                                    <input type="checkbox" name="prefer_area[]" value="Motijhel"> Motijhel
                                    <input type="checkbox" name="prefer_area[]" value="Old Dhaka"> Old Dhaka
                                    <input type="checkbox" name="prefer_area[]" value="Savar"> Savar
                                    <input type="checkbox" name="prefer_area[]" value="Gazipur"> Gazipur
                                    <input type="checkbox" name="prefer_area[]" value="Norshingdi"> Norshingdi
                                    <input type="checkbox" name="prefer_area[]" value="Narayongonj"> Narayongonj
                                    <input type="checkbox" name="prefer_area[]" value="Rangpur"> Rangpur
                                    <input type="checkbox" name="prefer_area[]" value="Dinajpur"> Dinajpur
                                    <input type="checkbox" name="prefer_area[]" value="Bogura"> Bogura
                                    <input type="checkbox" name="prefer_area[]" value="Pabna"> Pabna
                                    <input type="checkbox" name="prefer_area[]" value="Rajshahi"> Rajshahi
                                    <input type="checkbox" name="prefer_area[]" value="Chittagong"> Chittagong
                                    <input type="checkbox" name="prefer_area[]" value="Sylhet"> Sylhet
                                    <input type="checkbox" name="prefer_area[]" value="Khulna"> Khulna
                                    <input type="checkbox" name="prefer_area[]" value="Barishal"> Barishal
                                    <input type="checkbox" name="prefer_area[]" value="Moymonsingh"> Moymonsingh
                                    <input type="checkbox" name="prefer_area[]" value="Kushtia"> Kushtia
                                    <input type="checkbox" name="prefer_area[]" value="Comilla"> Comilla
                                    <input type="checkbox" name="prefer_area[]" value="Tangail"> Tangail
                                </div>

                        </div>
                    </div>
                </div>
                </div>
            </div>

            <div class="reg-area-6">  <!-- Table -->
				<div class="form-group">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="education-qua">
                            <p>Educational Qualification: </p>
                            <table>
                                <tr>
                                    <th>Degree</th>
                                    <th>Group</th>
                                    <th>Institution</th>
                                    <th>Result</th>
                                    <th>Passing year</th>
                                </tr>
                                <tr>
                                    <td>S.S.C</td>
                                    <td>
                                        <input type="text" name="group1" maxlength=" " size="15">
                                    </td>
                                    <td>
                                            <input type="text" name="institution1" maxlength=" " size="15">
                                    </td>
                                    <td>
                                            <input type="text" name="result1" maxlength=" " size="15">
                                    </td>
                                    <td>
                                            <input type="text" name="pass_year1" maxlength=" " size="15">

                                    </td>
                                </tr>
                                <tr>
                                    <td>H.S.C</td>
                                    <td>
                                            <input type="text" name="group2" maxlength=" " size="15">
                                    </td>
                                    <td>
                                            <input type="text" name="institution2" maxlength=" " size="15">
                                    </td>
                                    <td>
                                            <input type="text" name="result2" maxlength=" " size="15">
                                    </td>
                                    <td>
                                            <input type="text" name="pass_year2" maxlength=" " size="15">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Honurs</td>
                                    <td>
                                            <input type="text" name="group3" maxlength=" " size="15">
                                    </td>
                                    <td>
                                            <input type="text" name="institution3" maxlength=" " size="15">
                                    </td>
                                    <td>
                                            <input type="text" name="result3" maxlength=" " size="15">
                                    </td>
                                    <td>
                                            <input type="text" name="pass_year3" maxlength=" " size="15">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Masters</td>
                                    <td>
                                            <input type="text" name="group4" maxlength=" " size="15">
                                    </td>
                                    <td>
                                            <input type="text" name="institution4" maxlength=" " size="15">
                                    </td>
                                    <td>
                                            <input type="text" name="result4" maxlength=" " size="15">
                                    </td>
                                    <td>
                                            <input type="text" name="pass_year4" maxlength=" " size="15">
                                    </td>
                                </tr>
                            </table>    
                        </div>  <!-- education-qua -->
                    </div>
                </div>
                </div>
            </div>

            <div class="reg-area-7">
				<div class="form-group">
                <div class="row">
                    <div class="col-md-12">
                        <p>Choose profile photo: </p>
                            <input type="file" name="pic" accept="image/*">
                    </div>
                </div>
                </div>
            </div>
            </div>

		{!! Form::submit('Save info', ['class' => 'btn btn-primary']) !!}
		{!! Form::close() !!}

        </div>
    </div>  <!-- container -->

    <!-- Teacher registration end -->

<!--{!! Form::open(['url' => '/save/profile']) !!}

           <div class="form-group">
              <div class="form-row">
				<div class="col-md-6">
				<div class="form-group">
					{!! Form::label('adress', 'Adress:', ['class' => 'control-label']) !!}
					{!! Form::text('adress', null, ['class' => 'form-control']) !!}
				</div>			
				<div class="form-group">
					{!! Form::label('user_id', 'user_id:', ['class' => 'control-label']) !!}
					{!! Form::text('user_id', null, ['class' => 'form-control']) !!}
				</div>
				</div>
				<div class="col-md-6">
				<div class="form-group">
					<input type="radio" name="gender" value="male" checked>Male<br>
					<input type="radio" name="gender" value="female" >Female<br>
				</div>
				</div>				
				<div class="form-group">
					<div class="checkbox">
						<label> <input type="checkbox" name="subject[]" value="bangla">Bangla
					</div>					
					<div class="checkbox">
						<label> <input type="checkbox" name="subject[]" value="english">English

					</div>			
					<div class="checkbox">
						<label> <input type="checkbox" name="subject[]" value="math">Math
	
					</div>
					</div>				
					<div class="form-group">
					<div class="checkbox">
						<label> <input type="checkbox" name="class[]" value="one">one
					</div>					
					<div class="checkbox">
						<label> <input type="checkbox" name="class[]" value="two">two

					</div>			
					<div class="checkbox">
						<label> <input type="checkbox" name="class[]" value="three">three
	
					</div>
					</div>

				</div>
				</div>				
              
			{!! Form::submit('Save info', ['class' => 'btn btn-primary']) !!}
		{!! Form::close() !!}-->
		@endsection
