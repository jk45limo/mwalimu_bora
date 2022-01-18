@extends('teachers.teacher-layout')
@section('title','Teacher Login')
@section('content')
<div class="teacher-form">
    <div class="teacher-form-img"></div>
    <div class="teacher-form-form">
     
        <form action="{{ route('password.email') }}" method="POST" autocomplete="off">
            @csrf  
             @if (session('status'))
 
     <div class="alert alert-warning" role="alert">
     {{ session('status')}}
      </div>
 
     @endif
            <div class="form-wrap row">
                <div class="form-item col-lg-8 col-md-8 col-xs-12 col-sm-12">
                    <h3>Forgot Password?</h3>
                    <p>Enter your email and we will send instructions on how to reset your password</p>
                </div>
            </div>
            <div class="form-wrap row">
                <div class="form-item col-lg-8 col-md-8 col-xs-12 col-sm-12">
                    <label for="">Email</label>
                    <input type="text" name="email" class="input-field" placeholder="example@example@gmail.com">
                    @error('email')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                @enderror
                </div>
                <div class="col-lg-8 col-md-8 col-xs-12 col-sm-12">
                    <button class="form-next-button">SEND RESET LINK</button>
                </div>
                <p><a href="{{ url('teacher-login') }}"><i class="bx bx-chevron-left"></i> Back to Sign In</a></p>
            </div>
        </form>
    </div>
</div>
@endsection