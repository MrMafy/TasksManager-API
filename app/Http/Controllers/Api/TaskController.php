<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Http\JsonResponse;

class TaskController extends Controller
{
    /**
     * Получение списка всех задач.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return response()->json([
            'message' => 'Список задач получен успешно',
            'data' => Task::all()
        ]);
    }

    /**
     * Сохраняет созданную задачу в БД.
     *
     * @param TaskRequest $request
     * @return JsonResponse
     */
    public function store(TaskRequest $request): JsonResponse
    {
        $task = Task::create($request->validated());

        return response()->json([
            'message' => 'Задача успешно создана',
            'data' => $task
        ], 201);
    }

    /**
     * Получение одной задачи по ID.
     *
     * @param Task $task
     * @return JsonResponse
     */
    public function show(Task $task): JsonResponse
    {
        return response()->json([
            'message' => "Задача c ID = {$task->id} найдена",
            'data' => $task
        ]);
    }

    /**
     * Обновляет выбранную задачу.
     *
     * @param TaskRequest $request
     * @param Task $task
     * @return JsonResponse
     */
    public function update(TaskRequest $request, Task $task): JsonResponse
    {
        $task->update($request->validated());

        return response()->json([
            'message' => "Задача c ID = {$task->id} обновлена",
            'data' => $task
        ]);
    }

    /**
     * Удаляет выбранную задачу.
     *
     * @param Task $task
     * @return JsonResponse
     */
    public function destroy(Task $task): JsonResponse
    {
        $task->delete();

        return response()->json([
            'message' => "Задача c ID = {$task->id} успешно удалена"
        ]);
    }
}
