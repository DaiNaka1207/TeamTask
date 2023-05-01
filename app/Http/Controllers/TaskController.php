<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Auth::user()が使えるようにします
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // 変数（$tasks）にカレントチームのIDに紐づくタスクを代入
        $tasks = Task::where('team_id', Auth::user()->currentTeam->id)->get();

        // 変数（$tasks）を渡しつつ「dashboard」ビューを表示
        return view('dashboard', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // 変数（$user）にユーザー情報を代入
        $user = Auth::user();

        // 変数（$user）を渡しつつ「task.create」ビューを表示
        return view('task.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 変数（$task）に新しいタスクインスタンスを生成
        $task = new Task;

        // 変数（$task）にフォームで入力された値を代入してデータベースへ反映
        $task->fill($request->all())->save();

        // 「dashboard」ビューを表示
        return redirect(route('dashboard'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        //
    }
}
