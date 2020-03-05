@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        <a href="{{url('/create')}}" class="btn btn-primary bg-secondary" role="button"
                           aria-disabled="true">Add Task</a>
                        <table class="table table-bordered">
                            <thead class="thead-light">
                            <h1 align="center">Todos</h1>
                            <thead class="thead-dark">
                            <tr>

                                <th scope="col">Task</th>
                                <th scope="col">Category</th>
                                <th scope="col">Description</th>
                                <th scope="col">Action</th>
                            </tr>

                            </thead>
                            <tbody>
                            @foreach($todos as $todo)
                                <tr> 
                                    <td>{{$todo->task}}</td>
                                    <td>{{$todo->category}}</td>
                                    <td>{{$todo->description}}</td>
                                    <td><a href="{{url('/edit/'.$todo->id)}}" class="btn btn-primary bg-secondary" role="button"
                                           aria-disabled="true">edit</a>
                                        <a href="{{url('/delete/'.$todo->id)}}" class="btn btn-primary bg-danger" role="button"
                                           aria-disabled="true">Delete</a></td>
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