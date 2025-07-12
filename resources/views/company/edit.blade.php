<x-layout>


   <section>
    <div class="container py-10">
        <div class="flex items-center justify-between mb-5">
            <h1 class="text-2xl font-semibold">Company Edit</h1>
            <a href="/company" class="bg-blue-700 text-white px-3 py-1 rounded-2xl">Go Back</a>
        </div>

        <div>
   <form action="/company/update/{{$company->id}}" method="POST" enctype="multipart/form-data">
     @csrf
     @method('patch')
    <div class="grid grid-cols-2 gap-5">
        <div>
            <label for="name">Enter Company Name </label>
            <input type="text" name="name" id="name" value="{{$company->name}}" class="w-full border">
        </div>
        <div>
            <label for="email">Enter Company Email </label>
            <input type="text" name="email" id="name" value="{{$company->email}}" class="w-full border">
        </div>
        <div>
            <label for="phone">Enter Company Phone </label>
            <input type="text" name="phone" id="name" value="{{$company->phone}}" class="w-full border">
        </div>
        <div>
            <label for="address">Enter Company Address </label>
            <input type="text" name="address" id="name" value="{{$company->address}}" class="w-full border">
        </div>
        <div>
            <label for="logo">Upload </label>
            <input type="file" name="logo" id="name" class="w-full border">
              <img src="{{asset($company->logo) }}" class="h-[100px]"  alt="logo">

        </div>


   <div class="col-span-2">
    <button type="Submit" class="bg-black text-white px-3 py-1 rounded-2xl hover:bg-yellow-500">Update</button></div>
   </form>
    </div>
     </div>


</div>



   </section>
</x-layout>
