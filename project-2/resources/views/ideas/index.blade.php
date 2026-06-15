<x-layout title="Ideas">
    
    <div> 
        @if ($ideas->count())
        <h2 class="text-4xl font-bold text-gray-800 underline">Saved Ideas</h2>
        <ul class="data-theme caramellatte"> 
            @foreach ($ideas as $idea)

            <a href = "ideas/{{ $idea->id }}" class="card w-96 bg-base-100 card-md shadow-sm mt-4">
            <div class="card-body">
                <h2 class="card-title">{{ $idea->description }}</h2>
                <p>{{ $idea->state }}</p>
                <div class="justify-end card-actions">
                <button class="btn btn-primary data-theme caramellatte">View</button>
                </div>
            </div>
            </div>

            @endforeach

        </ul>
        @else
        <p class="text-gray-800">No ideas have been saved yet.<a href="/ideas/create" class="text-indigo-400 ml-2">Create One?</a></p>
        @endif
    </div> 

</x-layout>