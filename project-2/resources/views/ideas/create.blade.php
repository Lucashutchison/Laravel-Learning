<x-layout title="Ideas">
    <form action="/ideas" method="POST">
        @csrf
    <div class="max-w-6xl mx-6 data-theme caramelatte">
          <label for="description" class="block text-2xl/6 font-medium mt-4">Create a New Idea</label>
          <div class="mt-4">
                <textarea   id="description" 
                            name="description" 
                            rows="3" 
                            class="block w-full px-3 py-1.5 rounded-md bg-white text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-black-600 sm:text-sm/6 @error('description')@enderror">
                </textarea>
          </div>

          <label for="state" class="block text-2xl/6 font-medium mt-4">State</label>
          <div class="mt-4">
                <select id="state" name="state" class="select select-bordered w-full max-w-xs">
                    <option value="pending">Pending</option>
                    <option value="active">Active</option>
                    <option value="completed">Completed</option>
                </select>
          </div>

          <div class="mt-6 flex items-center gap-x-6">

                <button type="submit" class="btn btn-accent data-theme caramellatte">
                    Save
                </button>
     
        </div>
        
                <p class="mt-3 text-md/6">Have an Idea you'd like to save?</p>


        </div>

            <x-error name="description" />

    </form>
    
</x-layout>