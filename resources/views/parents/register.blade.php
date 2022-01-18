@extends('parents.parent-layout')
@section('title','Parent Register')
@section('content')
<div class="teacher-form">
    <div class="teacher-form-img"></div>
    <div class="teacher-form-form">
        @livewire('parents.create-account')
        </div>
    </div>

@endsection
