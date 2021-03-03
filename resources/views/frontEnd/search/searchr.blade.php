
@extends('frontEnd.master')
@section('mainContent')



			
			            @foreach($details as $user) 
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="single-tutor">
									<a href="{{url('/viewProfile/'.$user->teacher_id)}}"							
                                    <div class="row">

                                        <div class="col-md-4">
                                            <div class="single-tutor-left">
                                                <img src="{{asset($user->pic)}}" alt="Teacher picture">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="single-tutor-right">
                                                <p>Name: {{$user->name}}</p>
                                                <p>{{$user->fees}} BDT only</p>
                                                <p>{{$user->mobile}}</p>
                                                <p>{{$user->live_area}}</p>                                      
                                            </div>
                                        </div>
                                    </div>
									</a>									
                                </div>	
                            </div>
		
						@endforeach()      

	@endsection