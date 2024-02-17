@extends('dashboard.master')

@section('title','ViewDetails')
@section('body')
<h2>Today Tasks</h2>
<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Sl</th>
                <th>Organization Name</th>
                <th>Mobile</th>
                <th>District</th>
                <th>Upazilla</th>
                <th>Address</th>
                
                <th>Status</th>
                <th>Charge Amount</th>
                <th>Monthly Fee</th>
                <th>Note</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($totaltask as $index => $item)
            
            <tr>
                <td>{{$index + 1}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->mobile}}</td>
                <td>{{$item->district}}</td>
                <td>{{$item->upazila}}</td>
                <td>{{$item->address}}</td>
                <td>{{$item->status}}</td>
                <td>{{$item->charge}}</td>
                <td>{{$item->monthlyfee}}</td>
                <td>{{$item->note}}</td>
                <td>{{$item->date}}</td>
                <td>{{$item->mobile}}</td>
                <td>{{$item->mobile}}</td>
                
            </tr>
            @endforeach
            
            
        </tbody>
    </table>
@endsection