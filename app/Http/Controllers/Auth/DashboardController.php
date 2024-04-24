<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Finance;
use App\Models\Todo;

class DashboardController extends Controller
{
    protected $todoStats = [
        'total' => 0,
        'completed' => 0,
        'uncompleted' => 0,
        'percentage' => 0,
        'lastTodoCreation' => null
    ];
    protected $financeStats = [
        'income' => 0,
        'expenses' => 0,
        'total' => 0,
        'lastFinanceCreation' => null
    ];

    public function __construct()
    {
        if (Todo::whereUserId(auth()->id())->count() > 0) $this->setTodoStats();

        if (Finance::whereUserId(auth()->id())->count() > 0) $this->setFinanceStats();
    }

    public function setTodoStats()
    {
        $this->todoStats['total'] = Todo::whereUserId(auth()->id())->count();
        $this->todoStats['completed'] = Todo::whereUserId(auth()->id())->whereCompleted(true)->count();
        $this->todoStats['uncompleted'] = Todo::whereUserId(auth()->id())->whereCompleted(false)->count();
        $this->todoStats['percentage'] = ($this->todoStats['completed'] / $this->todoStats['total']) * 100;
        $this->todoStats['lastTodoCreation'] = Todo::whereUserId(auth()->id())->latest()->first()
            ->created_at->diffForHumans();
    }

    public function setFinanceStats()
    {
        $this->financeStats['income'] = Finance::whereUserId(auth()->id())->where('value', '>', 0)->sum('value');
        $this->financeStats['expenses'] = Finance::whereUserId(auth()->id())->where('value', '<', 0)->sum('value');
        $this->financeStats['total'] = ($this->financeStats['expenses'] + $this->financeStats['income']);
        $this->financeStats['lastFinanceCreation'] = Finance::whereUserId(auth()->id())->latest()->first()->created_at->diffForHumans();
    }

    public function index()
    {
        return inertia('Auth/Dashboard', [
            'todoStats' => $this->todoStats,
            'financeStats' => $this->financeStats
        ]);
    }
}
