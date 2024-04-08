<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">
            All Tasks
        </h1>
    </x-slot>


        <div class="container">
            <h1>all Rewards</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Image</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($rewards as $reward)
                    <tr>
                        <td>
                        <h2 class="font-bold text-2xl">
                            <a href="{{ route('rewards.show', $reward) }}">{{ $reward->title }}</a>
                        </h2>
                    </td>
                        <td>{{$reward->description}}</td>
                        <td><img src="{{ asset($reward->reward_image) }}"></img></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

</x-app-layout>
