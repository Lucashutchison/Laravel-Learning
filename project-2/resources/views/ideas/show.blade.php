<x-layout title="Ideas">
    
    <div class = "data-theme caramelatte"> 
    
    <h2 class="text-4xl font-bold underline mt-6">Saved Idea</h2>

      <p class="text-xl mt-6">{{ $idea->description }}</p>
       
    </div> 
   
    <div class="mt-3">

       <a href="/ideas/{{ $idea->id  }}/edit"  
            class="btn btn-accent data-theme caramelatte">
       Edit
    </a>

    <a href="/ideas" class="btn btn-secondary data-theme caramelatte">
        Back to Ideas
    </a>
    </div>
</x-layout>