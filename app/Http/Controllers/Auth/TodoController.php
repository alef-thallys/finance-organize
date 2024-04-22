<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTodoRequest;
use App\Http\Requests\UpdateTodoRequest;
use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class TodoController extends Controller
{
    public function index(Request $request)
    {
        $userId = auth()->user()->id;
        $query = Todo::whereUserId($userId);

        if ($request->has('filter')) {
            $filter = $request->filter;

            switch ($filter) {
                case 'active':
                    $query->where('completed', false);
                    break;
                case 'completed':
                    $query->where('completed', true);
                    break;
                case 'alphabetical':
                    $query->orderBy('title');
                    break;
            }
        };

        $todos = $query->get();
        return inertia('Auth/Todo', compact('todos'));
    }

    public function store(StoreTodoRequest $request)
    {
        $attributes = $request->validated();
        $attributes['user_id'] = auth()->user()->id;

        Todo::create($attributes);

        return back();
    }

    public function update(Todo $todo, UpdateTodoRequest $request)
    {
        Gate::authorize('manage-todo', $todo);

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
        Gate::authorize('manage-todo', $todo);

        $todo->delete();

        return back();
    }
}
