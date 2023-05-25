@extends('layout.layout')

@section('content')
    <section id="login">
        <div class="container-fluid col-lg-6 shadow bg-light rounded-lg">
            <form class="p-3" action="{{ 'register' }}" method="POST">
                @csrf
                <div class="form-group text-center">
                    <h2 class="font-weight-bolder">Register</h2>
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input name="name" id="name" type="text" class="form-control">
                    @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input name="username" id="username" type="text" class="form-control" id="name">
                    @if ($errors->has('username'))
                        <span class="text-danger">{{ $errors->first('username') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="name">Email address</label>
                    <input name="email" id="email" type="email" class="form-control" id="name">
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input name="password" id="password" type="password" class="form-control" id="exampleInputPassword1">
                    @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                <div class="d-flex justify-content-center mt-5">
                    <button type="submit" class="btn w-100">Submit</button>
                </div>
                <div class="d-flex justify-content-center mt-3">
                    <p>Have an account? <a href="{{ url('login') }}">Login</a></p>
                </div>
            </form>
        </div>
    </section>
@endsection
