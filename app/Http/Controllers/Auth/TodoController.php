<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTodoRequest;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        if (auth()->check()) {
            $todos = Todo::whereUserId(auth()->id())->get()->toArray();
            return inertia('Auth/Todo', [
                'todos' => $todos,
            ]);
        }
    }

    public function store(StoreTodoRequest $request)
    {
        $attributes = $request->validated();
        $attributes['user_id'] = auth()->user()->id;

        Todo::create($attributes);

        return back();
    }

    public function update(Todo $todo, Request $request)
    {
        if ($todo->user_id != auth()->user()->id) abort(403);

        if (empty($request->all())) {
            $todo->completed = !$todo->completed;
            $todo->save();
        } else {
            $todo->update($request->all());
        }

        return back();
    }

    public function destroy(Todo $todo)
    {
        if ($todo->user_id != auth()->user()->id) abort(403);
        $todo->delete();
        return back();
    }
}
