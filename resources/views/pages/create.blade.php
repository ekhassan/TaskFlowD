@extends('layout.layout')

@section('contene')
<div class="main">
    <div class="container">
        <div class="row mt-5">
            <h1>Create Task</h1>
        </div>
        <div class="row">
            <a class="btn btn-dark mt-5 mb-5" href="{{url('dashboard')}}">Back</a>
        </div>
        <div class="row">
            <form action="{{route('createtask')}}" method="POST">
                @csrf
                <label for="id">ID</label>
                <input class="form-control" type="text" name="id" id="id">
            
                <label for="name">Name</label>
                <input class="form-control"  type="text" name="name" id="name">
          
                <label for="Description">Description</label>
                <input class="form-control"  type="text" name="description" id="description">
       
                <label for="name">Status</label>
                <input class="form-control"  type="text" name="status" id="status">
         
                <label for="name">Deadline</label>
                <input class="form-control"  type="text" name="deadline" id="deadline">
      
                <input class="btn btn-info mt-2" type="submit" value="Submit">
            </form>
        </div>
    </div>
</div>
@endsection