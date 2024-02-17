@extends('dashboard.master')

@section('title','ViewDetails')
@section('body')

<div class="card-body">
    <h5 class="card-title">Work Details</h5>
    <br>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Sl</th>
                    <th>Name</th>
                    <th>Today working hr</th>
                    <th>Today Tasks</th>
                    <th>total Project</th>
                    
                    <th>Working Hour(Total)</th>
                    <th>Total Income</th> 
                </tr>
            </thead>
            <tbody>
                @foreach($marketer as $index => $m)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $m->name }}</td>
                    <td>
                       
                            {{ $totalFormatted }} </td>

                    <td>  <a href="{{route('today.task',$m->id)}}" class="btn btn-success p-3">{{$todaytask}}</a> </td>
              
                    <td>
                            <a href="{{route('total.task',$m->id)}}" class="btn btn-danger p-3">{{ $totaltask }}</a>
                       </td>
             
                 
                    <td> </td> 
                    <td> </td>
                   
                    
                </tr>
                @endforeach
            </tbody>
            
        </table>
        
    </div>
</div>
@endsection