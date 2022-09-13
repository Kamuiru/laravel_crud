@extends('layouts.app')
@section('content')
<div class = "flex justify-center md:w-1/3 lg:w-1/3 sm:w-1/3">
    <div class = "w-8/12 bg-white p-6 rounded-lg flex justify-center">
        <form action="{{url('students-data/'. $student->id)}}" method = "post">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="name" class = "sr-only">name</label>
                <input type="text" name = "name" id = "name" value="{{$student->name}}"placeholder = "student name" class = "bg-gray-100 border-2 w-full p-4 rounded-lg" value = "{{ old('name')}}">
                @error('name')
                <div class = "text-red-500 mt-2 text-sm">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="address" class = "sr-only">address</label>
                <input type="text" name = "address" id = "address" value="{{$student->address}}"placeholder = "address" class = "bg-gray-100 border-2 w-full p-4 rounded-lg" value = "{{ old('address')}}">
                @error('address')
                <div class = "text-red-500 mt-2 text-sm">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="mobile" class = "sr-only">mobile</label>
                <input type="tel" name = "mobile" id = "mobile" value ="{{$student->mobile}}"placeholder = "+254789..." class = "bg-gray-100 border-2 w-full p-4 rounded-lg" value = "">
                @error('mobile')
                <div class = "text-red-500 mt-2 text-sm">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div>
                <button type = "submit" class = "bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection
