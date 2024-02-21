@extends('dashboard.master')
@section('title','All Attendance')
@section('body')
<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Sl</th>
                <th>Date</th>
                <th>Attendance</th>
               
                <th>Name</th>
                <th>Mobile</th>
                
               
            </tr>
        </thead>
        <tbody>
            @foreach($allattendance as $index => $aa)
            <tr>
                <td>{{$index + 1}}</td>
                <td>{{$aa->date}}</td>
                <td><span class="btn btn-outline-info">{{$aa->Attendance}}</span></td>
                
                <td>{{$aa->name}}</td>
                <td>{{$aa->mobile}}</td>
                
            </tr>
            @endforeach
        </tbody>
        
    </table>
    
</div>



@endsection