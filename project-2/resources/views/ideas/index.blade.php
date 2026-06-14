<x-layout title="Ideas">
    <form action="/ideas" method="POST">
        @csrf
    <div class="col-span-full">
          <label for="description" class="block text-sm/6 font-medium text-white">New Idea</label>
          <div class="mt-2">
            <textarea id="description" name="description" rows="3" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"></textarea>
          </div>

          <div class="mt-6 flex items-center gap-x-6">

                <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
     
        </div>
        
          <p class="mt-3 text-sm/6 text-white">Have an Idea you'd like to save?</p>

        </div>
    </form>
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
        <p class="text-white">No ideas have been saved yet.</p>
        @endif
    </div> 
</x-layout>