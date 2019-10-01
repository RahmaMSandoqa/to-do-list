@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Create Task</h3>
            </div>
        </div>
        <hr/>
        <br/>
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('tasks.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="task">Task</label>
                        <input type="text" class="form-control" name="task" id="task" aria-describedby="emailHelp"
                               placeholder="Task Description...">
                    </div>
                    <input class="btn btn-primary" type="submit" name="create-task" value="Add Task">
                </form>
            </div>
        </div>
    </div>
@endsection
