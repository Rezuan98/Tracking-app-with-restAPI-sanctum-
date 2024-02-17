@extends('dashboard.master')

@section('title','TotalTask')
@section('body')
<div class="table-responsive">
    <h3>Total  Completed of <span class="btn btn-success fw-bold">{{$name2}}</span></h3>
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
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($totaltask as $index => $item)
            
            <tr>
                
                <td>{{$index + 1}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->mobile}}</td>
                <td>{{$item->district}}</td>
                <td>{{$item->upazilla}}</td>
                <td>{{$item->address}}</td>
                <td>{{$item->status}}</td>
                <td>{{$item->charge}}</td>
                <td>{{$item->monthlyfee}}</td>
                <td>{{$item->note}}</td>
                <td>{{$item->date}}</td>
                
            </tr>
            @endforeach
            
            
        </tbody>
    </table>
</div>
@endsection