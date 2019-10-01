@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-11">
                <h3>Todo List</h3>
            </div>
            <div class="col-md-1">
                <button class="btn btn-primary mr-2 rounded-pill"><a href="/tasks/create" class="text-white"><b>+</b></a></button>
            </div>
        </div>
        <hr/>
        <br/>
        <div class="container">
            @foreach($tasks as $task)
                <div class="row mb-3">
                    <div class="col-md-9">
                        <h5>{{$task->task}}</h5>
                    </div>
                    <div class="col-md-3">
                        <div class="d-flex ">
                            <form action="{{route('tasks.edit', [$task->id])}}" method="GET">
                                @csrf
                                <input type="submit" class="btn btn-primary mr-2" value="Edit">
                            </form>
                            <form action="{{route('tasks.destroy', $task->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger mr-2" value="DELETE">
                            </form>
                            <form action="{{route('tasks.show', $task->id)}}" method="GET">
                                @csrf
                                <input type="submit" class="btn btn-secondary" value="Show">
                            </form>
                        </div>
                    </div>
                </div>
                <hr/>
            @endforeach
        </div>
    </div>




    @endsection
