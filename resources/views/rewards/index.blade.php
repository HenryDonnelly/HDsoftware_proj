<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">
            All Rewards
        </h1>
    </x-slot>


        <div class="container flex justify-center" style="background: linear-gradient(to bottom, rgb(188, 227, 220), rgb(88, 121, 115));">
            <table class="table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>claim</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($rewards as $reward)
                    <form action="{{ route('user.update', ['user' => auth()->user()]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <tr>
                        <td>
                        <h2 class="font-bold text-2xl">
                            <a href="{{ route('rewards.show', $reward) }}">{{ $reward->title }}</a>
                        </h2>
                    </td>
                        <td>{{$reward->description}}</td>
                        <td><img src="{{ asset($reward->reward_image) }}" style="width: 300px;" /></img></td>
                        <td> <x-primary-button class="mt-6">Claim Reward</x-primary-button></td>
                    </tr>
                </form>
                    @endforeach
                </tbody>
            </table>
        </div>

</x-app-layout>
