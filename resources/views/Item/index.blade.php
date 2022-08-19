@extends('dashboard.main')
@section('content')
  <div class="container mt-5">
      <div class="col-md-8 m-auto">
          <div class="card">
              <div class="card-header">Todo Item Show</div>
              <div class="card-body">
                  <table class="table table-hover">
                      <thead>
                          <tr>
                              <th scope="col">SlNO</th>
                              <th scope="col">Task</th>
                              <th scope="col">Created_at</th>
                              <th scope="col">Updated_at</th>
                              <th scope="col">Action</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($tasks as $task)
                          <tr>
                              <td>{{ $SlNO++ }}</td>
                              <td>{{$task->Task}}</td>
                              <td>{{$task->created_at}}</td>
                              <td>{{$task->updated_at}}</td>
                              <td>
                                  <a href="/todo/{{$task->id}}/edit" class="btn btn-info">Edit</a>
                                  <a href="/todo/{{$task->id}}/delete" class="btn btn-danger">Delete</a>

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
