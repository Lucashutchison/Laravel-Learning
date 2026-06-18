<x-layout title="Ideas">
    
    <div class="mt-4"> 
        @if ($ideas->count())
        <h2 class="text-4xl font-bold data-theme caramelatte">Saved Ideas:</h2>
        <ul class="data-theme caramellatte mt-6"> 
            @foreach ($ideas as $idea)

            <a href = "ideas/{{ $idea->id }}" class="card w-96 bg-base-100 card-md shadow-sm">
            <div class="card-body border-2 rounded-lg mt-4">
                <h2 class="card-title">{{ $idea->description }}</h2>
                <p>{{ $idea->state }}</p>
                <div class="justify-end card-actions">
                <button class="btn btn-accent data-theme caramellatte">View</button>
                </div>
            </div>
            </div>

            @endforeach

        </ul>
        @else
        <p class="data-theme caramelatte">No ideas have been saved yet.</p>
        @endif


        <p class ="mt-4"><a href="/ideas/create" class="text-md underline ml-2 mt-5">Create a New One?</a></p>
    </div> 

</x-layout>
