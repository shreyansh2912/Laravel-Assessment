@extends('Admin-layouts.layouts')

@section('admin')

<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Add songs</h4>
        <form action="" method="post" class="forms-sample" enctype="multipart/form-data" >
            @csrf
          <div class="form-group">
              <label for="exampleInputName1">Song Name</label><br>
              <span style="color: red">
                  @error('song_name')
                      {{$message."*"}}
                  @enderror
              </span>
            <input type="text" name="song_name" class="form-control" id="exampleInputName1" value="{{old('song_name')}}" placeholder="Song name">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Artist</label><br>
            <span style="color: red">
                @error('singer')
                    {{$message."*"}}
                @enderror
            </span>
            <input type="text" name="singer" class="form-control" id="exampleInputEmail3" value="{{old('singer')}}" placeholder="Singer name">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword4">Album name</label><br>
            <span style="color: red">
                @error('album')
                    {{$message."*"}}
                @enderror
            </span>
            <input type="text" name="album" class="form-control" id="exampleInputPassword4" value="{{old('album')}}" placeholder="Album name">
          </div>
          <div class="form-group">
            <label for="exampleSelectGender">Genre</label><br>
            <span style="color: red">
                @error('genre')
                    {{$message."*"}}
                @enderror
            </span>
              <select name="genre" class="form-control" id="exampleSelectGender" value="">
                <option value=""></option>
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
            <span style="color: red">
                @error('song_file')
                    {{$message."*"}}
                @enderror
            </span><br>
            <input name="song_file" type="file" accept=".mp3" multiple name="song" >
          </div>
          <div class="form-group">
            <label>Thumbnail upload here</label><br>
            <span style="color: red">
                @error('image')
                    {{$message."*"}}
                @enderror
            </span><br>
            <input name="image" type="file" accept=".jpg" name="song" >
          </div>
          <button type="submit" class="btn btn-primary me-2">Submit</button>
          <button class="btn btn-light">Cancel</button>
        </form>
      </div>
    </div>
  </div>

@endsection