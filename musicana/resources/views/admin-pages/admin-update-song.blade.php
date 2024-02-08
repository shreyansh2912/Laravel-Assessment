@extends('Admin-layouts.layouts')

@section('admin')

<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Update songs here</h4>
        <form action="" method="post" class="forms-sample" enctype="multipart/form-data" >
            @csrf
          <div class="form-group">
              <label for="exampleInputName1">Song Name</label><br>
              <span style="color: red">
                  @error('song_name')
                      {{$message."*"}}
                  @enderror
              </span>
            <input type="text" name="song_name" class="form-control" id="exampleInputName1" value="{{$data->song_name}}" placeholder="Song name">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Artist</label><br>
            <span style="color: red">
                @error('singer')
                    {{$message."*"}}
                @enderror
            </span>
            <input type="text" name="singer" class="form-control" id="exampleInputEmail3" value="{{$data->singer}}" placeholder="Singer name">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword4">Album name</label><br>
            <span style="color: red">
                @error('album')
                    {{$message."*"}}
                @enderror
            </span>
            <input type="text" name="album" class="form-control" id="exampleInputPassword4" value="{{$data->album}}" placeholder="Album name">
          </div>
          <div class="form-group">
            <label for="exampleSelectGender">Genre</label><br>
            <span style="color: red">
                @error('genre')
                    {{$message."*"}}
                @enderror
            </span>
              <select name="genre" class="form-control" id="exampleSelectGender" value="">
                <option value="{{$data->genre}}">{{$data->genre}}</option>
                <option value="romentic">Romentic</option>
                <option value="sad">Sad</option>
                <option value="bass">Bass</option>
                <option value="long drive">Long drive</option>
                <option value="fun">Fun</option>
                <option value="party">Party</option>
              </select>
            </div>
          <div class="form-group">
            <label>Song upload here</label><br>
            <audio controls src="{{asset('storage/uploads'.'/'.$data->song_file)}}"></audio><br>
            <span style="color: red">
                @error('song_file')
                    {{$message."*"}}
                @enderror
            </span><br>
                    <input name="song_file" type="file" accept=".mp3" multiple value="{{$data->song_file}}" >
          </div>
          <div class="form-group">
            <label>Thumbnail Image</label><br>
            <img style="width: 200px;" src="{{asset('storage/uploads'."/".$data->image)}}" alt=""><br>
            <span style="color: red">
                @error('image')
                    {{$message."*"}}
                @enderror
            </span><br>
            <input name="image" type="file" accept=".jpg,.png" value="{{$data->image}}" >
          </div>
          <button type="submit" class="btn btn-primary me-2">Submit</button>
          <button class="btn btn-light">Cancel</button>
        </form>
      </div>
    </div>
  </div>
  
@endsection