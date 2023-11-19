@extends('layouts.app')
@section('content')

<div class="flex flex-col items-center">
    <div class="flex flex-col items-center w-4/5">
        <div class="self-end pb-2">
            <button onclick="location.href='/food/test'" style="font-size:20px" class="flex py-2 px-4 border border-transparent shadow-sm text-lg 
            font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Add <i class="material-icons self-center">add</i></button>
        </div>
        <table class="p-10 border-collapse border bg-white">
            <thead>
                <tr>
                    <th class="border px-2 py-2">ID</th>
                    <th class="border px-2 py-2">Name</th>
                    <th class="border px-2 py-2">Description</th>
                    <th class="border px-2 py-2">Price</th>
                    <th class="border px-2 py-2">Type</th>
                    <th class="border px-2 py-2">Picture</th>
                </tr>
            </thead>
            @foreach($orders as $order)
            <tbody>
                <tr>
                    <td class="border px-2 py-2">{{$order['id']}}</td>
                    <td class="border px-2 py-2">{{$order['name']}}</td>
                    <td class="border px-2 py-2">{{$order['description']}}</td>
                    <td class="border px-2 py-2">{{$order['price']}}</td>
                    <td class="border px-2 py-2">{{$order['type']}}</td>
                    <td class="border px-2 py-2">{{$order['picture']}}</td>
                    <td class="border px-2 py-2">
                        @can('update', $order)
                        <form action="/updatefood/{{$order['id']}}" method="GET">
                            @csrf
                            <button type="submit" class="text-sky-600">Edit</button>
                        </form>
                        @endcan
                    </td>
                    <td class="border px-2 py-2">
                        @can('delete', $order)
                        <form action="/food/{{$order['id']}}" method="POST">
                            @csrf
                        </form>
                        @endcan
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
        <span class="p-5">
            {{$order -> links()}}
        </span>
    </div>
</div>
@endsection