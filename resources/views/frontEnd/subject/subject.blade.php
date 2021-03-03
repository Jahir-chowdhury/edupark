{!! Form::open(['url' => '/subjectStore','method'=>'get','class'=>'form-horizontal' ]) !!}
			{{csrf_field()}}
<input type="checkbox" name="subject" value="1"> subject<br>
<input type="checkbox" name="subject" value="2"> subject<br>
<input type="checkbox" name="subject" value="3">subject<br>
<input type="checkbox" name="subject" value="4"> subject<br>
{!! Form::submit('submit', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}