@extends('frontEnd.master')

@section('mainContent')

  <!-- Teacher registration start -->

    <div class="container">
        <div class="full-reg-area">
		{!! Form::open(['url' => '/saveimg','method'=>'POST','enctype'=>'multipart/form-data','class'=>'form-horizontal' ]) !!}
			{{csrf_field()}}
			

            <div class="reg-area-7">
				<div class="form-group">
                <div class="row">
                    <div class="col-md-12">
                        <p>Choose profile photo: </p>
                            {{ Form::file('file', null, array('id' => 'file', 'class' => 'custom-file-control', 'placeholder' => '')) }}
                    </div>
                </div>
                </div>
            </div>
            </div>

		{!! Form::submit('Save info', ['class' => 'btn btn-primary']) !!}
		{!! Form::close() !!}
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
