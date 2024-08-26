<?php

namespace App\Http\Controllers;

use App\Models\TodoItem;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $items = TodoItem::all();
        return view('index', ['items' => $items]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'description' => 'required'
        ]);
        $item = new TodoItem();
        $item->title = $request->title;
        $item->description = $request->description;
        $item->save();
        return redirect(route('todo.index'));
    }

    public function edit(TodoItem $item)
    {
        return view('edit', ['item' => $item]);
    }

    public function update(Request $request, TodoItem $item)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'description' => 'required'
        ]);
        $item->title = $request->title;
        $item->description = $request->description;
        $item->save();
        return redirect(route('todo.index'));
    }

    public function destroy(TodoItem $item)
    {
        $item->delete();
        return redirect(route('todo.index'));
    }
}
