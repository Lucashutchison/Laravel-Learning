<x-layout title="login"> 

    <form action="/login" method="POST">

        @csrf

        <fieldset class="mt-30 fieldset bg-base-200 border-base-500 rounded-box w-xs border p-4 mx-auto">

            <legend class="text-lg fieldset-legend">Log in</legend>

            <label class="label" for="email">Email</label>
            <input type="email" class="input" name="email" placeholder="Your Email" required />

            <x-error name="email"></x-error>

            <label class="label">Password</label>
            <input type="password" class="input" name="password" placeholder="Password" required />

            <x-error name="password"></x-error>

            <button class="font-bold btn btn-secondary mt-4">Log in</button>

        </fieldset>

    </form>


</x-layout>