@extends('dashboard.master')

@section('body')
<h3>Edit Marketer Information:</h5>
    <div class="card">
        
        <div class="card-body">
            
            <form action="{{route('update.marketer',$marketerData->id)}}" method="post" enctype="multipart/form-data">
    
                @csrf
                <input type="hidden" name="id" value="{{$marketerData->id}}">
    
                <div class="mb-3">
                    <label for="exampleInputText1" class="form-label">Marketer Name</label>
                    <input type="text" name="marketer_name" value="{{$marketerData->name}}" class="form-control" id="exampleInputText1">
                </div>
            
                <div class="mb-3">
                    <label for="exampleInputEmail3" class="form-label">Marketer Email</label>
                    <input type="email" name="marketer_email" value="{{$marketerData->email}}" class="form-control" id="exampleInputEmail3"  placeholder="Enter Email">
                </div>
               
            
                <div class="mb-3">
                    <label for="exampleInputNumber1" class="form-label">Phone</label>
                    <input type="phone" value="{{$marketerData->phone}}" name="marketer_phone" class="form-control" id="exampleInputNumber1" >
                </div>
            
                <div class="mb-3">
                    <label for="exampleInputPassword3" class="form-label">NID</label>
                    <input type="text" value="{{$marketerData->nid}}" name="marketer_nid" class="form-control" id="exampleInputPassword3"  placeholder="Enter Password">
                </div>
               
            
                <div class="mb-3">
                    <label for="exampleInputDisabled1" class="form-label">Address</label>
                    <input type="text" value="{{$marketerData->address}}" name="marketer_address" class="form-control" id="exampleInputDisabled1"  >
                </div>
            
               
            
                
            
                {{-- <div class="mb-3">
                    <label for="exampleFormControlSelect1" class="form-label">Area Manager</label>
                    <select name="area_manager" value="{{$marketerData->manager}}" class="form-select" id="exampleFormControlSelect1">
                        <option selected="" disabled="">Area Manager Name</option>
                        <option>Mohiul Islam</option>
                        <option>sohel mahmud</option>
                        <option>burhan uddin</option>
                        <option>30-60</option>
                        <option>Above 60</option>
                    </select>
                </div> --}}
            
                
               
               
            
                
            
                <button class="btn btn-primary" type="submit">update</button>
            </form>
    
        </div>
    </div>
    

{{-- <div class="card-body">
    <h6 class="card-title">All Marketers List</h6>
    
    <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Sl</th>
                        <th>Marketer Name</th>
                        <th>Mobile</th>
                        <th>Address</th>
                        <th>Area Manager</th>
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
                        <td>{{$item->manager}}</td>
                        <td> <img src="{{ asset('storage/marketerImages/' . $item->marketer_photo) }}" alt="{{ $item->marketer_photo }}"></td>


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
@endsection --}}


@endsection