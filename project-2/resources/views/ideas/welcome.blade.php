<x-layout>

    @guest 

            <h1 class="text-7xl font-bold text-center mt-50" >Welcome to Idea Hub! </h1>

            <p class="text-2xl text-center mt-10">Idea Hub is a safe space to store and organize your professional ideas!</p>

            <p class="text-lg italic text-center mt-5">Log in view past ideas, and save new ones. </p>

            <div class="flex justify-center mt-5">

            <a href="/login" class="align-center font-bold btn btn-accent px-6 py-3 text-center">Log In</a>

            </div>

    @endguest

    @auth 

        <h1 class="text-7xl font-bold text-center mt-50" >Welcome Back  {{ auth()->user()->name }}! </h1>

        <p class="text-2xl italic text-center mt-10">Want to Continue Organizing Your ideas?</p>

        <div class="flex justify-center mt-5">

            <a href="/ideas" class="align-center font-bold btn btn-accent px-6 py-3 text-center">View Saved Ideas</a>
            <a href="/ideas/create" class="align-center font-bold btn btn-secondary px-6 py-3 text-center ml-4">Create More Ideas</a>

        </div>

    @endauth




</x-layout>