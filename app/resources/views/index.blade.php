@extends('layouts.todo')
@section('content')
<form action="{{ route('todo.store') }}" method="post">
    @csrf
    <input type="text" name="title">
    <input type="text" name="description">
    <button type="submit">追加</button>
</form>
@foreach($items as $item)
    <div class="items">
        <div>{{ $item->title }}</div>
        <div>{{ $item->description }}</div>
        <a href="{{ route('todo.edit', $item) }}">編集</a>
        <form action="{{ route('todo.destroy', $item) }}" method="post" style="display:inline;">
            @csrf
            @method('delete')
            <button type="submit">削除</button>
        </form>
    </div>
@endforeach
<a href="{{ route('todo.create') }}">追加</a>
@endsection
