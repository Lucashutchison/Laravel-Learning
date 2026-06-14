<x-layout title="Ideas">
    
    <div> 
        @if ($ideas->count())
        <h2 class="text-2xl font-bold text-white">Saved Ideas</h2>
        <ul class="text-white"> 
            @foreach ($ideas as $idea)
                <li>
                    <a href="/ideas/{{ $idea->id }}" class="text-indigo-400 text-sm">{{ $idea->description }}</a>
                </li>
            @endforeach
        </ul>
        @else
        <p class="text-white">No ideas have been saved yet.<a href="/ideas/create" class="text-indigo-400 ml-2">Create One?</a></p>
        @endif
    </div> 

</x-layout>