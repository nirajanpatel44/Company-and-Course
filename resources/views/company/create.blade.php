<x-layout>


   <section>
    <div class="container py-10">
        <div class="flex items-center justify-between mb-5">
            <h1 class="text-2xl font-semibold">Company Create</h1>
            <a href="/company" class="bg-blue-700 text-white px-3 py-1 rounded-2xl">Go Back</a>
        </div>

        <div>
   <form action="/company/store" method="post" enctype="multipart/form-data">
     @csrf
    <div class="grid grid-cols-2 gap-5">
        <div>
            <label for="name">Enter Company Name </label>
            <input type="text" name="name" id="name" class="w-full border">
        </div>
        <div>
            <label for="email">Enter Company Email </label>
            <input type="text" name="email" id="name" class="w-full border">
        </div>
        <div>
            <label for="phone">Enter Company Phone </label>
            <input type="text" name="phone" id="name" class="w-full border">
        </div>
        <div>
            <label for="address">Enter Company Address </label>
            <input type="text" name="address" id="name" class="w-full border">
        </div>
        <div>
            <label for="logo">Upload </label>
            <input type="file" name="logo" id="name" class="w-full border">
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
