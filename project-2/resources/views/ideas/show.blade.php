<x-layout title="Ideas">
    
    <div class = "text-2xl font-bold text-gray-800"> 
    
    <h2 class="mt-6">Saved Idea</h2>

      <p>{{ $idea->description }}</p>
       
    </div> 
   
    <div class="mt-3">
       <a href="/ideas/{{ $idea->id  }}/edit"  
            class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
       Edit
    </a>

    <a href="/ideas" class="rounded-md bg-gray-800 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-gray-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600 ml-3">
        Back to Ideas
    </a>
    </div>
</x-layout>