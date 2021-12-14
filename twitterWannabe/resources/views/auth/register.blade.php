@extends('layout.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg">
            <form action="{{ route('register') }}" method="POST">
                <div class="mb-4">
                    <label for="name" class="sr-only">Name</label>
                    <input type="text" name="name" id="name" placeholder="Enter your name" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
                </div>

                <div class="mb-4">
                    <label for="username" class="sr-only">UserName</label>
                    <input type="text" name="username" id="username" placeholder="Enter your Username" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
                </div>

                <div class="mb-4">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="email" id="email" placeholder="Enter your Email" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
                </div>

                <div class="mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter your Password" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
                </div>

                <div class="mb-4">
                    <label for="password_confirmation" class="sr-only">Repeat Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat your Password" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
                </div>

                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Register</button>
                </div>
            </form>
        </div>
    </div>
@endsection