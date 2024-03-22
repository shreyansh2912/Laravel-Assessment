@extends('layout.admin');
@section('admin')
<div class="row">
    <div class="col-md-12 stretch-card">
      <div class="card">
        <div class="card-body">
          <p class="card-title">Author List</p>
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
                @foreach ($data as $item)
                <tr>      
                      
                    <td>{{$item->id}}</td>
                    <td>{{$item->username}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->roll_as}}</td>
                    <td>{{$item->created_at}}</td>
                  </tr>
                  @endforeach                  
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection