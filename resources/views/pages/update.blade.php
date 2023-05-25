@extends('layout.layout')
@section('content')
    <section id="update" class="container">
        <div class="container-fluid col-lg-6 shadow bg-light rounded-lg">
            <form class="p-3" action="{{ route('taskupdate', $tasks->id) }}" method="POST">
                @csrf
                <div class="form-group text-center">
                    <h2 class="font-weight-bolder">Update</h2>
                </div>
                <div class="form-group">
                    <label for="id">ID</label>
                    <input class="form-control" type="text" name="id" id="id" value="{{ $tasks->id }}">
                </div>

                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" type="text" name="name" id="name" value="{{ $tasks->name }}">
                </div>

                <div class="form-group">
                    <label for="Description">Description</label>
                    <input class="form-control" type="text" name="description" id="description"
                        value="{{ $tasks->description }}"">
                </div>

                <div class="from-group">
                    <label for="name">Status</label>
                    <input class="form-control" type="text" name="status" id="status" value="{{ $tasks->status }}">
                </div>

                <div class="form-group">
                    <label for="name">Deadline</label>
                    <input class="form-control" type="text" name="deadline" id="deadline"
                        value="{{ $tasks->deadline }}">
                </div>

                <div class="d-flex justify-content-center mt-5">
                    <a href="{{ url('dashboard') }}" class="btn outline container m-1 w-50"><i
                            class="fa-solid fa-chevron-left"></i> Back</a>
                    <button type="submit" class="btn container m-1 w-50">Submit</button>
                </div>
            </form>
        </div>
    </section>
@endsection
