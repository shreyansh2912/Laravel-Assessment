@extends('Admin-layouts.layouts')

@section('admin')

{{-- @dd($users[0]) --}}

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Striped Table</h4>
            <p class="card-description">
              Add class <code>.table-striped</code>
            </p>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>
                      User
                    </th>
                    <th>
                      First name
                    </th>
                    <th>
                      Progress
                    </th>
                    <th>
                      email
                    </th>
                    <th>
                      created at
                    </th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($users as $item) 
                        {{-- {{$item}} --}}
                  <tr>
                    <td class="py-1">
                      <img src="../../images/faces/face1.jpg" alt="image"/>
                    </td>
                    <td>
                      {{$item->name}}
                    </td>
                    <td>
                      {{-- <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div> --}}
                      </div>
                    </td>
                    <td>
                      {{$item->email}}
                    </td>
                    <td>
                      {{$item->created_at}}
                    </td>
                  </tr>
 @endforeach

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>


{{-- @forelse($users as $value)


@empty
    

@endforelse --}}

@endsection