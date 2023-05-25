@extends('layout.layout')

@section('content')
    <section id="login">
        <div class="container-fluid col-lg-6 shadow bg-light rounded-lg">
            <form class="p-3">
                <div class="form-group text-center">
                    <h2 class="font-weight-bolder">Login</h2>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
               <div class="d-flex justify-content-center mt-5">
                <button type="submit" class="btn w-100">Submit</button>
               </div>
               <div class="d-flex justify-content-center mt-3">
                    <p>Not a member? <a href="{{url('register')}}">Register</a></p>
               </div>
              </form>
        </div>
    </section>
@endsection
