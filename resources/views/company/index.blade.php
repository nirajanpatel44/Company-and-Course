<x-layout>

<section>
    <div class="container py-10">
       <div class="flex items-center justify-between m-5">
         <h1 class="text-2xl font-semibold">

        </h1>
        <a href="company.create" class=" bg-blue-600 text-white px-3 py-1 rounded-2xl">Create Company</a>
       </div>

       {{-- {{ $companies }} --}}

       <div>
        <table class="w-full text-center">
            <thead>
             <tr class="bg-gray-200">
                <th class= "border p-1">SN</th>
                <th class= "border p-1">Company Name</th>
                <th class= "border p-1"> Phone </th>
                <th class= "border p-1"> Email</th>
                <th class= "border p-1 "> Address</th>
                <th class= "border p-1"> Logo</th>
                <th class= "border p-1"> Action</th>


             </tr>
            </thead>

            <tbody>
                @foreach ($companies as $index=>$company )

                <tr>
                <td class= "border p-1">{{ ++$index}}</td>
                <td class= "border p-1">{{ $company->name}}</td>
                <td class= "border p-1">{{ $company->email}}</td>
                <td class= "border p-1">{{ $company->phone}}</td>
                <td class= "border p-1">{{ $company->address}}</td>
                <td class= "border p-1">
                    <img src="{{asset($company->logo) }}" class="h-[100px]"  alt="logo">

                </td>
                <td class="border p-1">
                    {{-- /company/edit/{{$company->id}} --}}
                    <a href="{{route('company.edit', $company->id) }}" class="text-blue-700 underline">Edit
                    </a>
                    <form action="/company/delete/{{$company->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500">Delete</button>

                    </form>






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
