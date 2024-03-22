@extends('layout.admin');
@section('admin')
<div class="row">
    <div class="col-md-12 stretch-card">
      <div class="card">
        <div class="card-body">
          <p class="card-title">Users List</p>
          <div class="table-responsive">
            <table id="recent-purchases-listing" class="table">
              <thead>
                <tr>
                    <th>ID</th>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>Roll_as</th>
                    <th>Created at</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                    {{$data}}
                    {{-- <td>{{$data->id}}</td>
                    <td>{{$data->username}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->roll_as}}</td>
                    <td>{{$data->created_at}}</td> --}}
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection