@extends('layouts.app')
@section('content')
<div class = "flex justify-center">
    <div class = "w-4/12 bg-white p-6 rounded-lg">
        <form action="{{route('studs.create')}}" method = "POST">
            @csrf
            <div class="mb-4">
                <label for="name" class = "sr-only">Name</label>
                <input type="text" name = "name" id = "name" placeholder = "student name" class = "bg-gray-100 border-2 w-full p-4 rounded-lg" value = "{{ old('name')}}">
                @error('name')
                <div class = "text-red-500 mt-2 text-sm">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="address" class = "sr-only">address</label>
                <input type="text" name = "address" id = "address" placeholder = "address" class = "bg-gray-100 border-2 w-full p-4 rounded-lg" value = "{{ old('address')}}">
                @error('address')
                <div class = "text-red-500 mt-2 text-sm">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="mobile" class = "sr-only">mobile</label>
                <input type="tel" name = "mobile" id = "mobile" placeholder = "+254789..." class = "bg-gray-100 border-2 w-full p-4 rounded-lg" value = "">
                @error('mobile')
                <div class = "text-red-500 mt-2 text-sm">
                    {{$message}}
                </div>
                @enderror
            </div>
            
            <div>
                <button type = "submit" class = "bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection
