@extends('layout.layout')

@section('content')
    <section id="login">
        <div class="container-fluid col-lg-6 shadow bg-light rounded-lg">
            <form class="p-3">
                <div class="form-group text-center">
                    <h2 class="font-weight-bolder">Register</h2>
                </div>
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" >
                </div>
                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="email" class="form-control" id="name" >
                </div>
                <div class="form-group">
                  <label for="name">Email address</label>
                  <input type="email" class="form-control" id="name" >
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
               <div class="d-flex justify-content-center mt-5">
                <button type="submit" class="btn w-100">Submit</button>
               </div>
               <div class="d-flex justify-content-center mt-3">
                    <p>Have an account? <a href="{{url('login')}}">Login</a></p>
               </div>
              </form>
        </div>
    </section>
@endsection
