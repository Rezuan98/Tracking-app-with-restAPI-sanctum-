@extends('dashboard.master')
@section('title','All Marketer List')
@section('body')

<div class="card-body">
    <h6 class="card-title">All Marketers List</h6>
    
    <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Sl</th>
                        <th>Marketer Name</th>
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
                        <td>{{$item->name}}</td>
                        <td>{{$item->phone}}</td>
                        <td>{{$item->address}}</td>
                       
                        <td> <img src="{{ asset('marketerImages/' . $item->image) }}" alt="{{ $item->image }}"></td>


                        <td><a href="{{route('edit.all.marketer',$item->id)}}"><button class="btn btn-success">Edit</button></a>
                            <a href="{{route('delete.marketer',$item->id)}}"><button class="btn btn-warning">delete</button></a>
                            <a href="#"><button class="btn btn-primary">view</button></a>
                        </td>
                    </tr>
                    @endforeach
                    
                    
                </tbody>
            </table>
    </div>
</div>
@endsection