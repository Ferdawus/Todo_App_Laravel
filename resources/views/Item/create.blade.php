@extends('dashboard.main')
@section('content')
<div class="container mt-5">
    <div class="col-md-6 m-auto">
        <form action="{{ route('todos.create') }}" method="post">
            @csrf
            <div class="card">
                <div class="card-header">
                    <h1>Todo Item Add</h1>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                        <label for="Task">Add Task</label>
                        <input type="text" name="Task" class="form-control" id="task">
                    </div>
                    <input type="submit" name="submit" value="Submit" class="btn btn-primary text-black">
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
