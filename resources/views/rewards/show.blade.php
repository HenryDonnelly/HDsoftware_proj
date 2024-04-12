{{-- @extends('layouts.app')

@section('content')
<div class='container'>
    <h1>view reward</h1>
    <table class="table table-hover">
        <tbody>
            <tr>
                <td><strong>title</strong></td>
                <td>{{$reward->title}}</td>
            </tr>
            <tr>
                <td><strong>description</strong></td>
                <td>{{$reward->description}}</td>
            </tr>
            <tr>
                <td><strong>reward_image</strong></td>
                <td>{{$reward->reward_image}}</td>
            </tr>
            <tr>
                <td><strong>supplier_id</strong></td>
                <td>{{$reward->supplier_id}}</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection --}}


<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">
            View Tasks
        </h1>
    </x-slot>


    <div class='container'>
        <table class="table table-hover">
            <tbody>
                <tr>
                    <td><strong>title</strong></td>
                    <td>{{$reward->title}}</td>
                </tr>
                <tr>
                    <td><strong>description</strong></td>
                    <td>{{$reward->description}}</td>
                </tr>

                <tr>
                    <td><strong>supplier_id</strong></td>
                    <td>{{$reward->supplier_id}}</td>
                </tr>
            </tbody>
        </table>
    </div>

</x-app-layout>
