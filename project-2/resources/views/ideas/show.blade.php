<x-layout title="Ideas">
    
    <div class = "data-theme caramelatte"> 
    
    
    <h2 class="text-4xl font-bold underline mt-6">Saved Idea</h2>

    <div class="text-4xl font-bold card w-96 bg-base-100 card-md shadow-sm mt-6">
        <div class="card-body border-2 rounded-lg mt-4">
                <div class="card-body">
                    <p class="text-xl">{{ $idea->description }}</p>
                    <p class="text-md italic">Status: {{ $idea->state }}</p>
                </div>
        </div>
       
    </div> 
   
    <div class="mt-3">

       <a href="/ideas/{{ $idea->id  }}/edit"  
            class="mt-4 btn btn-accent data-theme caramelatte">
       Edit
    </a>

    <a href="/ideas" class="mt-4 btn btn-secondary data-theme caramelatte">
        Back to Ideas
    </a>
    </div>
</x-layout>