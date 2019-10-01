@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <h3>Update Task</h3>
            </div>
        </div>
        <hr/>
        <br/>
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('tasks.update', ['id' => $task->id])}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="task">Task</label>
                        <input type="text" class="form-control" name="task" id="task" aria-describedby="emailHelp"
                               value="{{$task->task}}">
                    </div>
                    <input class="btn btn-primary" type="submit" name="create-task" value="Update Task">
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
