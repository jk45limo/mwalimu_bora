@extends('teachers.teacher-layout')
@section('title','Teacher Register')
@section('content')
<div class="teacher-form">
    <div class="teacher-form-img"></div>
    <div class="teacher-form-form">
        @livewire('teachers.create-account')

    </div>
</div>
@endsection