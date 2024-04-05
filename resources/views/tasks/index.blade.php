
@extends('layouts.app')

@section('content')
<div class='container'>
    <h1>all tasks</h1>
    <table class="table">
        <thead>
            <tr>
                <th>title</th>
                <th>description</th>
                <th>coins</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tasks as $task)
            <tr>
                <td>{{$task->title}}</td>
                <td>{{$task->description}}</td>
                <td>{{$task->coins}}</td>
            </tr>
            @endforeach <!-- Add this line to close the foreach loop -->
        </tbody>
    </table>
</div>
@endsection



{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All tasks') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @forelse ($tasks as $task)
                <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                    <h2 class="font-bold text-2xl">
                        <a href="{{ route('tasks.index', $task) }}">{{ $task->name }}</a>
                    </h2>
                    <p class="mt-2">

                        <h3 class="font-bold text-1xl"><strong>task name</strong>
                            {{ $task->name }} </h3>
                        {{ $task->address }}
                        {{ $task->bio }}

                    </p>

                </div>
            @empty
                <p>No tasks</p>
            @endforelse

        </div>
    </div>


</x-app-layout> --}}
