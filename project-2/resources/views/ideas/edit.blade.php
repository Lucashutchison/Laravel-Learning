<x-layout title="Edit Idea">

 <form action="/ideas/{{ $idea->id }}" method="POST">
        @csrf
        @method('PATCH')

    <div class="col-span-full data-theme caramelatte">
          <label for="description" class="block text-2xl/6 font-medium mt-6">Current Idea: {{ $idea->description }}</label>
          <div class="mt-2">
            <textarea id="description" name="description" rows="3" class="block w-full rounded-md bg-white px-3 py-1.5 text-base outline-1 -outline-offset-1 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 sm:text-sm/6">{{ $idea->description }}</textarea>
          </div>

          <div class="mt-3 flex items-center gap-x-3">

            
                <button type="submit" class="btn btn-accent data-theme caramelatte">
                    Update
                </button>
     
        

        
            
          <button type="submit" form="delete-idea-form" class="btn btn-danger data-theme caramelatte">
                Delete
            </button>
            
            </div>

        

          <p class="mt-3 text-sm/6 text-white">Update Idea?</p>

    </div>

    </form>

    <form method="post" action="/ideas/{{ $idea->id }}" id="delete-idea-form">
        
        @csrf
        @method('DELETE')
    
       
    </form>

</x-layout>