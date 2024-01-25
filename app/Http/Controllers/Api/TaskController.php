<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\TaskRequest;
use App\Http\Resources\Api\TaskResourse;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     *
     *
     * @param  \Illuminate\Http\Request   $request
     * @return Collection
     */
    public function index(Request $request){
        return TaskResourse::collection(Task::search($request->search)->paginate(10));
    }

    /**
     *
     * @param  Task   $task
     * @return JsonResponse
     */
    public function show(Task $task){
        try {
            $data = new TaskResourse($task);

            $response = [
                'success' => true,
                'data' => $data
            ];

            return response()->json($response,200);

        } catch (\Exception $e) {
            $response = [
                'success' => false,
                'data' => $e->getMessage()
            ];

            return response()->json($response,500);
        }
    }

    /**
     *
     * @param  TaskRequest $request
     * @return JsonResponse
     */
    public function store(TaskRequest $request){
        try {
            $input = $request->all();

            Task::create($input);

            $response = [
                'success' => true,
                'message' => 'La tâche à été ajouté avec succès.'
            ];

            return response()->json($response,200);
        }catch (\Exception $e) {
            $response = [
                'success' => false,
                'data' => $e->getMessage()
            ];

            return response()->json($response,500);
        }
    }

    /**
     *
     * @param  TaskRequest $request
     * @param  Task $task
     * @return JsonResponse
     */
    public function update(TaskRequest $request,Task $task){
        try {
            $input = $request->all();
            $task->update($input);

            $response = [
                'success' => true,
                'message' => 'La tâche a été mise à jour avec succès.'
            ];

            return response()->json($response,200);
        } catch (\Exception $e) {
            $response = [
                'success' => false,
                'data' => $e->getMessage()
            ];

            return response()->json($response,500);
        }
    }

    /**
     *
     * @param  Task $task
     * @return JsonResponse
     */
    public function destroy(Task $task){
        try {
            $task->delete();

            $response = [
                'success' => true,
                'message' => "La tâche a été supprimée"
            ];

            return response()->json($response,200);
        } catch (\Exception $e) {
            $response = [
                'success' => false,
                'data' => $e->getMessage()
            ];

            return response()->json($response,500);
        }
    }
}
