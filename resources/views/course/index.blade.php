<x-layout>

<section>
    <div class="container py-10">
       <div class="flex items-center justify-between m-5">
         <h1 class="text-2xl font-semibold">All Courses

        </h1>
        <a href="/course/create" class=" bg-blue-600 text-white px-3 py-1 rounded-2xl">Add New</a>
       </div>

       {{-- {{ $companies }} --}}

       <div>
        <table class="w-full text-center">
            <thead>
             <tr class="bg-gray-200">
                <th class= "border p-1">SN</th>
                <th class= "border p-1">Course Name</th>
                <th class= "border p-1"> Price </th>
                <th class= "border p-1"> Image</th>
                <th class= "border p-1 "> Action</th>
             </tr>
            </thead>

            <tbody>
        @foreach ($courses as $index=>$course )
                <tr>
                <td class= "border p-1">{{ ++$index}}</td>
                <td class= "border p-1">{{ $course->name}}</td>
                <td class= "border p-1">{{ $course->price}}</td>
                <td class= "border p-1">
                    <img src="{{asset($course->image) }}" class="h-[100px]"  alt="image">
                </td>
            </tr>
        @endforeach

    </tbody>
</table>
</div>
       <img src="{{asset('https://picsum.photos/200/300')}}" alt="logo">
    </div>
</section>

</x-layout>
