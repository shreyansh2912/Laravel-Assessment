@extends('Admin-layouts.layouts');

@section('admin')
        {{-- {{$value->song_file}} --}}
        {{-- <audio controls  src="{{asset('storage/uploads/').("/").$value->song_file}}" alt=""   > --}}
        {{-- <img src="{{asset('storage/uploads/').("/").$value->image}}" alt=""> --}}
        {{-- <audio controls muted src="{{asset('storage/uploads/Song/1707114479-song.mp3')}}" alt=""   > --}}
            
            <div class="col-md-12 stretch-card">
                <div class="card">
                    <div class="card-body">
            <p class="card-title">Song List</p>
            <div class="table-responsive">
                <table id="recent-purchases-listing" class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Song Name</th>
                            <th>Singer Name</th>
                            <th>album</th>
                            <th>genre</th>
                            <th>Song</th>
                            <th>image</th>
                            <th>Added On</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
@foreach ($data as $value )

                        <tr>
                            <td>{{$value->id}}</td>
                            <td>{{$value->song_name}}</td>
                            <td>{{$value->singer}}</td>
                            <td>{{$value->album}}</td>
                            <td>{{$value->genre}}</td>
                            <td> <audio controls  src="{{asset('storage/uploads/').("/").$value->song_file}}" alt=""   ></audio></td>
                            <td><img style="border-radius: 0%; width:100px; height:100px;" src="{{asset('storage/uploads/').("/").$value->image}}" alt=""></td>
                            <td>{{$value->created_at}}</td>
                            <td>
                                <form action="" method="post">
                                    @csrf
                                    @method('put')
                                </form>
                                    <button type="button" class="btn btn-primary" style="width: 74px; height:30px" value="{{$value->id}}">Edit</button><br><br>
                                <form action="" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger" style="height: 30px " value="{{$value->id}}">Delete</button>
                                </form>   
                            </td>
                        </tr>
@endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection