@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="container">
                <h1 class="mb-4 text-center text-primary" style="display: bold; font-size: 2.5rem;">Task Lists</h1>
            </div>

            <a href="{{ route('tasks.create') }}" class="btn btn-success mb-3">Create New Task</a>

            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="card">
                <div class="card-header bg-primary text-white">
                    Tasks
                </div>
                <div class="card-body">
                    @if($tasks->isEmpty())
                        <p class="text-center">No tasks available.</p>
                    @else
                        <table class="table table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($tasks as $task)
                                    <tr>
                                        <td>{{ $task->title }}</td>
                                        <td>{{ $task->description }}</td>
                                        <td>
                                            <a href="{{ route('tasks.edit', $task->id) }}"
                                                class="btn btn-warning btn-sm me-2">Edit</a>
                                            <form action="{{ route('tasks.destroy', $task->id) }}" method="POST"
                                                style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    Echo.private('tasks.' + taskId)
        .listen('TaskUpdated', (event) => {
            // Handle task update notification
            console.log('Task updated:', event.task);
            // Update the DOM as needed
        });
</script>

@endsection