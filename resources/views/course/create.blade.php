<x-layout>


   <section>
    <div class="container py-10">
        <div class="flex items-center justify-between mb-5">
            <h1 class="text-2xl font-semibold">Add Course</h1>
            <a href="{{route('course.index')}}" class="bg-blue-700 text-white px-3 py-1 rounded-2xl">Go Back</a>
        </div>

        <div>
   <form action="{{route('course.store')}}" method="post" enctype="multipart/form-data">
     @csrf
    <div class="grid grid-cols-2 gap-5">
        <div>
            <label for="name">Enter Course Name </label>
            <input type="text" name="name" id="name" class="w-full border py-1 px-2">
            @error('name')
                 <div class="text-red-600">
                    {{ $message}}
                 </div>


            @enderror


        </div>
        <div>
            <label for="price">Enter Course Price </label>
            <input type="number" name="email" id="name" class="w-full border py-1 px-2">@error('name')
                 <div class="text-red-600">
                    {{ $message}}
                 </div>


            @enderror


        </div>
        <div>
            <label for="description">Enter Course description </label>
            <textarea name="description" id="description" class="w-full border py-1 px-2"> </textarea>
            @error('description')
                 <div class="text-red-600">
                    {{ $message}}
                 </div>


            @enderror

        </div>

        <div>
            <label for="image">Upload image </label>
            <input type="file" name="logo" id="name" class="w-full border py-1 px-2">
            @error('image')
                 <div class="text-red-600">
                    {{ $message}}
                 </div>


            @enderror

        </div>


   <div class="col-span-2">
    <button type="Submit" class="bg-yellow-300 text-white px-3 py-1 rounded-2xl hover:bg-yellow-500">Submit</button>
</div>
   </form>
    </div>
     </div>


</div>



   </section>
</x-layout>
