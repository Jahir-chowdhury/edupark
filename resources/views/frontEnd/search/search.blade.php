<html>       
	 <div class="card-body">

		<div>
			<h3 class="text-center text-success">{{Session::get('message')}}</h3>
		</div>
		
{!! Form::open(['url' => '/searchr','method'=>'POST','class'=>'form-horizontal' ]) !!}
			{{csrf_field()}}
           <div class="form-group">
				<div class="input-group">
					{!! Form::label('search', ' prefer_area:', ['class' => 'control-label']) !!}
					{!! Form::text('prefer_area',null,['class' => 'form-control','name'=>'prefer_area'])!!}
				</div>
				<div class="input-group">
					{!! Form::label('search', 'prefer_subject:', ['class' => 'control-label']) !!}
					{!! Form::text('prefer_subject',null,['class' => 'form-control','name'=>'prefer_subject'])!!}
				</div>				
				<div class="input-group">
					{!! Form::label('search', 'prefer_class:', ['class' => 'control-label']) !!}
					{!! Form::text('gender',null,['prefer_class' => 'form-control','name'=>'prefer_class'])!!}
				</div>				
				<div class="input-group">
					{!! Form::label('search', 'gender :', ['class' => 'control-label']) !!}
					{!! Form::text('gender',null,['class' => 'form-control','name'=>'gender'])!!}
				</div>				
			</div>


		

		   


						{!! Form::submit('search', ['class' => 'btn btn-primary']) !!}
		{!! Form::close() !!}
		</div>
			<!-- Crop me imamge link -->
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link href="{{asset('public/frontEnd/cropme/components/imgareaselect/css/imgareaselect-default.css')}}" rel="stylesheet" media="screen">
	<link rel="stylesheet" href="{{asset('public/frontEnd/cropme/css/jquery.awesome-cropper.css')}}">
	      <input id="sample_input" type="hidden" name="test[image]">
		<!-- cropme script -->
					<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
					<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script> 
					<script src="{{asset('public/frontEnd/cropme/components/imgareaselect/scripts/jquery.imgareaselect.js')}}"></script> 
					<script src="{{asset('public/frontEnd/cropme/build/jquery.awesome-cropper.js')}}"></script> 
					<script>
						$(document).ready(function () {
							$('#sample_input').awesomeCropper(
							{ width: 150, height: 150, debug: false }
							);
						});
						</script> 
					<script type="text/javascript">

					  var _gaq = _gaq || [];
					  _gaq.push(['_setAccount', 'UA-36251023-1']);
					  _gaq.push(['_setDomainName', 'jqueryscript.net']);
					  _gaq.push(['_trackPageview']);

					  (function() {
						var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
						ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
						var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
					  })();

					</script>
	<!-- cropme script -->
	</html>