@extends('layouts.app')
@section('content')
    @include('inc.messages')
    <div class="container">
        <div class="page-header text-center mt-4">
            <h1>Calendar view</h1>
        </div>
        {{-- <div id="timer.js"></div> --}}

        
        
        <div class="container">
            <div class="card">
                <img class="card-img-top" src="holder.js/100px180/" alt="">
                <div class="card-body ">
                    <a href="/bookroom/create">
                        <div class="row">
                            <i class="fa fa-address-book fa-3x col-1 mr-0 pr-0"></i>
                            <h4 class="card-title col-11  mt-2 ml-0 pl-0 ">Book  a conference room</h4>
                        </div>
                        <p class="card-text ml-5">Click on the above icon to book a conference room</p>
                    </a>
                </div>
            </div>
        </div>

        <div class="mt-4 ml-3 mr-3">
            <div id='calendar'></div>
        </div>
        <div id='timer.js'></div>

        {{-- The entire code below is for the purpose of summary of total rooms created --}}
    {{-- uncomment from line 34 to 88 
         <div class="container mt-6 ml-0 mr-0 pl-0 pr-0">
            
        
            <h3 class="mt-4 ml-4 text-center">Booked Rooms</h3>
            <div class="col-12" >
            <table class="table table-bordered table-hover table-dark" style="border:0">
                <thead>
                <tr>
                    <th class="col">Conference Details</th>
                    <th class="col">Locations</th>
                    <th class="col">Date</th>
                    <th class="col">From</th>
                    <th class="col">To</th>
                    <th class="col">Agenda</th>
                    <th class="col"> Status</th>
                    <th class="col">Edit</th>
                    <th class="col"> Delete</th>
                </tr>
                </thead>
        
                <tbody>

                    @foreach ($bookrooms as $bookroom)
                      <tr>
                        <td>{{$bookroom->conference_details}}</td>
                        <td>
                            @foreach ($bookroom->shifts as $location) 
                                {{$location}}
                             @endforeach                                
                        </td>
                        <td>{{$bookroom->date}}</td>
                        <td>{{$bookroom->startTime}}</td>
                        <td>{{$bookroom->endTime}}</td>
                        <td>{{$bookroom->agenda}}</td>
                        <td>{{$bookroom->status}}</td>

        {{-- make the field editable when the user
            1. The logged in User is self
            2. When the logged in User is super, and belongs to the location made by the user ofthe location (i.e. Delhi user can crate booking for ahmedabad and the same has to be approved vy the super used of Delhi and not Ahd--}}
            {{-- {{ $bookroom->user_id  }}{{auth()->user()->id}}{{auth()->user()->user_type}}{{auth()->user()->location}}{{$bookroom->user->location}} --}}
        {{-- One to amy relation used for this --}}

{{--  
                         @if(($bookroom->user_id == auth()->user()->id && $bookroom->status !='Accept') || 
                            (auth()->user()->user_type =="Super" && auth()->user()->location==$bookroom->user->location))
                            <td><a href= "/bookroom/{{$bookroom->id}}/edit" class="btn btn-success no-hover">Edit</a></td>
                            <td>
                                <form action="/bookroom/{{$bookroom->id}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Sure to Delete')" class="btn btn-danger btn-round">Delete</button>
                                </form>
                            </td>
                        @endif
                          
                    </tr>
                    
                    @endforeach
                     --}}
                    
                </tbody>
            </table>
            </div>
        
    </div>
    
@endsection