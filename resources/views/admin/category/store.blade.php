
@extends('admin.master')
@section('content')
<html>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Register</title>

    <!-- Bootstrap core CSS-->
    <link href="{{asset('/public/admin/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="{{asset('/public/admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="{{asset('/public/admin/css/sb-admin.css')}}" rel="stylesheet">

  </head>

  <body class="bg-dark">

    <div class="container">
		<div>
			<h3 class="text-center text-success">{{Session::get('message')}}</h3>
		</div>
      <div class="card card-register mx-auto mt-5">
        <div class="card-header "><center>Add Category</center></div>
        <div class="card-body">


{!! Form::open([
    'url' => '/category/save'
]) !!}

           <div class="form-group">
              <div class="form-row">
               <!-- <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="firstName" class="form-control" placeholder="CategoryName" required="required" autofocus="autofocus">
                    <label for="firstName">CategoryName</label>
                  </div>
                </div>-->
				<div class="col-md-6">
				<div class="form-group">
					{!! Form::label('CategoryName', 'CategoryName:', ['class' => 'control-label']) !!}
					{!! Form::text('CategoryName', null, ['class' => 'form-control']) !!}
				</div>
				</div>
				 <div class="col-md-6">
				<div class="form-group">
					{!! Form::label('CategoryStatus', 'CategoryStatus:', ['class' => 'control-label']) !!}
					{!! Form::text('CategoryStatus', null, ['class' => 'form-control']) !!}
				</div>
				</div>
                <div class="col-md-6">
				<div class="form-group">
					{!! Form::label('CategoryDescription', 'CategoryDescription:', ['class' => 'control-label']) !!}
					{!! Form::textarea('CategoryDescription', null, ['class' => 'form-control']) !!}
				</div>
				
                </div>
                </div>
              </div>
            <!--<div class="form-group">
              <div class="form-label-group ">
                <input type="text" id="inputEmail" class="form-control" placeholder="CategoryDescription" required="required">
                <label for="inputEmail">CategoryDescription</label>
              </div>
            </div>
			<div class="form-group">
				<div class="form-label-group ">
					<button class="btn btn-primary btn-block" type="submit">Save Category</button>
				</div>
			</div>-->
			{!! Form::submit('Save Category', ['class' => 'btn btn-primary']) !!}
		{!! Form::close() !!}
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('/public/admin/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('/public/admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('/public/admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  </body>

</html>
<!--
<div class="form-group">
    {!! Form::label('CategoryName', 'Title:', ['class' => 'control-label']) !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('CategoryStatus', 'CategoryStatus:', ['class' => 'control-label']) !!}
    {!! Form::textarea('CategoryStatus', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Create New Task', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}-->
@endsection()