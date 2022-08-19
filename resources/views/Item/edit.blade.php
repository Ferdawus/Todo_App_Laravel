@extends('dashboard.main')
@section('content')
<div class="container mt-5">
    <div class="col-md-6 m-auto">
        <form action="{{route('todos.update')}}" method="post">
            @csrf
            <div class="card">
                <div class="card-header">
                    <h1>Todo Item Update</h1>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <input type="hidden" name="id" value="{{$TodoItem->id}}">
                        <label for="Task">Update Task</label>
                        <input type="text" name="Task" class="form-control" id="task" value="{{$TodoItem->Task}}">
                    </div>
                    <input type="submit" name="submit" value="Submit" class="btn btn-primary text-black">
                </div>
            </div>

        </form>
    </div>
</div>
@endsection
