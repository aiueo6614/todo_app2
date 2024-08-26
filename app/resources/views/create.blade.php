@extends('layouts.todo')
@section('content')
<form action="{{ route('todo.store') }}" method="post">
    @csrf
    <input type="text" name="title">
    <input type="text" name="description">
    <button type="submit">追加</button>
@endsection
