@extends('dashboard.master')
@section('title','All Marketer List')
@section('body')

<div class="card-body">
    <h4 class="card-title">All Marketers List</h4>

    <a href="{{route('add.marketer')}}"><button type="button" class="btn btn-success mt-2">Add New Marketer</button></a>
    
    <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Sl</th>
                        <th>Marketer Name</th>
                        <th>Attendance</th>
                        <th>Mobile</th>
                        <th>Address</th>
                        
                        <th>Photo</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($marketer as $item)
                    
                    <tr>
                        <th>{{$item->id}}</th>
                        <td>{{$item->name}} </td>
                        <td>
                           
                           
                            @if($attendance[$item->id])
                           
                                <a href="{{route('all.attendance',$item->id)}}"><span type="button" class="btn btn-outline-info"> Present</span></a>
                           
                               
                            @else
                          
                               <a href="{{route('all.attendance',$item->id)}}"> <span type="button" class="btn btn-outline-danger"> Absent</span></a>
                            
                              
                            @endif
                           
                       
             </td>
                        <td>{{$item->phone}}</td>
                        <td>{{$item->address}}</td>
                       
                        <td> <img src="{{ asset('marketerImages/' . $item->image) }}" alt="{{ $item->image }}"></td>


                        <td><a href="{{route('edit.all.marketer',$item->id)}}"><button class="btn btn-success">Edit</button></a>
                            <a href="{{route('delete.marketer',$item->id)}}"><button class="btn btn-warning">delete</button></a>
                            <a href="{{route('view.data',$item->id)}}"><button class="btn btn-primary">View</button></a>
                           
                        </td>
                    </tr>
                    @endforeach
                    
                    
                </tbody>
            </table>
    </div>
</div>
@endsection