@extends('layouts.app')
@section('content')
@auth
<div class="container flex justify-start ml-2 mt-5  w-8/12">
    <div class="flex flex-col">
        <div class="w-full">
            <div class="border-b border-gray-200 shadow">
                <table class="divide-y divide-gray-300 ">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-2 text-xs text-gray-500">
                                ID
                            </th>
                            <th class="px-6 py-2 text-xs text-gray-500">
                                Name
                            </th>
                            <th class="px-6 py-2 text-xs text-gray-500">
                                Address
                            </th>
                            <th class="px-6 py-2 text-xs text-gray-500">
                                Mobile
                            </th>
                            <th class="px-6 py-2 text-xs text-gray-500">
                                Created_at
                            </th>
                            <th class="px-6 py-2 text-xs text-gray-500">
                                Edit
                            </th>
                            <th class="px-6 py-2 text-xs text-gray-500">
                                Delete
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-300">
                    @foreach($students as $student)
                        <tr class="whitespace-nowrap">
                            <td class="px-6 py-4 text-sm text-gray-500">
                                {{$student->id}}
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">
                                    {{$student->name}}
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-500">{{$student->address}}</div>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-500">
                                {{$student->mobile}}
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-500">
                                {{$student->created_at}}
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{route('studs.edit', $student->id)}}" class="px-4 py-1 text-sm text-blue-600 bg-blue-200 rounded-full">Edit</a>
                            </td>
                            <form action="{{url('students-delete/'. $student->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                            <td class="px-6 py-4">
                                <input type="submit" id="destroy" class="px-4 py-1 text-sm text-red-400 bg-red-200 rounded-full" value="Delete">
                            </td>
                            </form>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endauth
@endsection