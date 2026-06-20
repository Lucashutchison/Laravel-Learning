<x-layout title="Register"> 

    <form action="/register" method="POST">

        @csrf

        <fieldset class="mt-30 fieldset bg-base-200 border-base-500 rounded-box w-xs border p-4 mx-auto">

            <legend class="text-lg fieldset-legend">Register</legend>

            <label class="label" for="name">First Name</label>
            <input class="input" name="name" placeholder="Your First Name" required />

            <label class="label" for="email">Email</label>
            <input type="email" class="input" name="email" placeholder="Your Email" required />

            <label class="label">Password</label>
            <input type="password" class="input" name="password" placeholder="Password" required />

            <button class="font-bold btn btn-secondary mt-4" data-test="reg-button">Register</button>

        </fieldset>

    </form>

        @if ($errors->any())
            <div class ="text-align-center" style="color: red;">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

</x-layout>