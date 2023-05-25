@extends('layout.layout')

@section('content')
    <section id="user" class="container">
        <div class="row">
            <a class="btn mb-5" href="{{ url('create') }}">Create Task</a>
        </div>
        <table class="table rounded-lg bg text-white">
            <thead>
                <tr>
                    <th>ID</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Deadline</th>
                            <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($tasks as $task)
                            <tr>
                                <td>{{ $task->id }}</td>
                                <td>{{ $task->name }}</td>
                                <td>{{ $task->description }}</td>
                                <td>{{ $task->status }}</td>
                                <td>{{ $task->deadline }}</td>
                                <td>
                                    <a class="btn btn-outline-info" href="{{ URL::to('edit', $task->id) }}"
                                        title="Edit -> {{ $task->id }}">
                                        <i class="fa fa-pen-to-square"></i>
                                    </a>
                                    <a class="btn btn-outline-danger" href="{{ URL::to('delete', $task->id) }}"
                                        onclick="return confirm('Are you sure to delete the task {{ $task->name }} having ID {{ $task->id }}?')"
                                        title="Delete -> {{ $task->id }}">
                                        <i class="fa fa-trash-can"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                </tr>
            </tbody>
        </table>
    </section>
@endsection
