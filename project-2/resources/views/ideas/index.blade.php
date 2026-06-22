<x-layout title="Ideas">

@php
    $groupedIdeas = $ideas->groupBy('state');
@endphp
    
    <div class="mt-4"> 
        @if ($ideas->count())
        <h2 class="text-4xl font-bold data-theme caramelatte">Saved Ideas:</h2>
    

        <div role="tablist" class="tabs tabs-bordered mb-6">

            @foreach (['pending', 'active', 'completed'] as $index => $state)

                        <input 
                            type="radio" 
                            name="idea_tabs" 
                            role="tab" 
                            class="tab btn btn-ghost border border-[var(--fallback-bc)] checked:border-[color:var(--caramellatte)] checked:text-[color:var(--caramellatte)] checked:bg-base-200 mt-4 ml-2" 
                            aria-label="{{ ucfirst($state) }}" 
                            {{ $index === 0 ? 'checked' : '' }}
                        />

                        <div role="tabpanel" class="tab-content p-4">

                            @if ($groupedIdeas->has($state))
                                <ul class="mt-2">
                                    @foreach ($groupedIdeas[$state] as $idea)
                                        <a href="ideas/{{ $idea->id }}" class="card w-96 bg-base-100 card-md shadow-sm">
                                            <div class="card-body border-2 rounded-lg mt-4">
                                                <h2 class="card-title">{{ $idea->description }}</h2>
                                                <p>{{ $idea->state }}</p>

                                                <div class="justify-end card-actions">
                                                    <button class="btn btn-accent">View</button>
                                                </div>
                                            </div>
                                        </a>
                                    @endforeach
                                </ul>
                            @else
                                <p class="mt-4">You don't have any {{ $state }} ideas.</p>
                            @endif

                        </div>

                    @endforeach

                </div>
        

       
        @else
        <p class="data-theme caramelatte">No ideas have been saved yet.</p>
        @endif


    </div>
        <p class ="mt-4"><a href="/ideas/create" class="text-md underline ml-2 mt-5">Create a New One?</a></p>
    </div> 


</x-layout>
