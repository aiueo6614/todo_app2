@extends('layouts.todo')
@section('content')
<form action="{{ route('todo.update', $item) }}" method="post">
    @csrf
    @method('patch')
    <input type="text" name="title" value="{{ $item->title }}">
    <input type="text" name="description" value="{{ $item->description }}">
    <button type="submit">更新</button>
    <a href="{{ route('todo.index') }}">戻る</a>
</form>
@endsection
