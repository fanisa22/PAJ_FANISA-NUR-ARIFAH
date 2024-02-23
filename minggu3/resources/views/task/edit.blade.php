@extends('layouts.app')

@section('content')
<div class="container">
    <h1>
        Edit Tasks
    </h1>

    <!-- resources/views/edit.blade.php -->

<form action="{{url("/task/{$task->id}")}}" method="POST">
    @csrf
    @method('PUT')

    <label for="name">Nama:</label>
    <input type="text" name="title" value="{{ $task->name }}">

    <label for="description">Description:</label>
    <input type="text" name="description" value="{{ $task->description }}">

    <button type="submit">Update</button>
</form>

    <a href="{{url('/task')}}">Back To Task</a>
</div>

@endsection