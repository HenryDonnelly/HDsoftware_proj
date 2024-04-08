<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">
            All Tasks
        </h1>
    </x-slot>


        <div class="container">
            <h1>all Tasks</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Coins</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tasks as $task)
                    <tr>
                        <td>{{$task->title}}</td>
                        <td>{{$task->description}}</td>
                        <td>{{$task->coins}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

</x-app-layout>
