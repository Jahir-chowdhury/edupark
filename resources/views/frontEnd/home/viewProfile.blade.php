@extends('frontEnd.master')

@section('mainContent')

  <!-- Teacher registration start -->

    <div class="container">
	                                    <div class="col-md-4">
                                            <div class="single-tutor-left">
                                                <img src="{{asset($teacher_id->pic)}}" alt="Teacher picture">
                                            </div>
                                        </div>
			<p>Name: {{$teacher_id->name}}</p>
			<p>fees:  {{$teacher_id->fees}} BDT only</p>
            <p>mobile:  {{$teacher_id->mobile}}</p>                                    
            <p>qualification:  {{$teacher_id->qualification}}</p>                                    
            <p>email:  {{$teacher_id->email}}</p>                                    
            <p>institution:  {{$teacher_id->institution}}</p>                                    
            <p>tution_style:  {{$teacher_id->tution_style}}</p>                                    
            <p>medium:  {{$teacher_id->medium}}</p>                                    
            <p>gender:  {{$teacher_id->gender}}</p>                                    
            <p>prefer_area:  {{$teacher_id->prefer_area}}</p>                                    
            <p>prefer_class:  {{$teacher_id->prefer_class}}</p>                                    
            <p>prefer_subject:  {{$teacher_id->prefer_subject}}</p>                                    
    </div>  <!-- container -->

		@endsection
