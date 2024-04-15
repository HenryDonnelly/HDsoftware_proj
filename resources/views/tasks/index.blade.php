<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">
            All Tasks
        </h1>
    </x-slot>


        <div class="container flex justify-center">
            <form method="POST" enctype="multipart/form-data">
            <table class="table">
                <thead>

                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Coins</th>
                        <th>claim</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach($tasks as $task)
                    {{-- <form action="{{ route('user.update', ['user' => auth()->user()->id]) }}" method="POST" enctype="multipart/form-data"> --}}
                    <form action="{{ route('user.update', ['user' => auth()->user()]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <tr>
                        <td>{{$task->title}}</td>
                        <td>{{$task->description}}</td>
                        <td>{{$task->coins}}</td>
                        <td><input id="coins" name="coins" type="hidden" value={{$task->coins}} readonly></td>
                    <td> <x-primary-button class="mt-6">Complete Task</x-primary-button></td>

                    </tr>
                </form>
                    @endforeach
                </tbody>
            </table>
        </div>

</x-app-layout>
