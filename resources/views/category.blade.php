
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
</x-app-layout>
<div class="flex justify-end mx-4 mt-4">
    <button id="target-addForm" class="text-yellow-400 bg-black px-3 py-2 font-sans rounded-lg font-bold hover:bg-yellow-400 hover:text-white"><i class="fa-solid fa-plus mr-2  "></i>Add Category</button>
</div>
@if(session('message'))
<div class="w-full mt-4 px-24">
<div id="alert-border-3" class="flex px-4 py-2 mb-4 text-green-800 border-t-4 border-green-300 bg-green-50 dark:text-green-400 dark:bg-gray-800 dark:border-green-800" role="alert">
    <svg class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
    <div class="ml-3 text-sm font-medium">
        <x-success-status class="mb-4" :status="session('message')" />
    </div>
    <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"  data-dismiss-target="#alert-border-3" aria-label="Close">
      <span class="sr-only">Dismiss</span>
      <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </button>
</div>
</div>
@endif
{{-- @foreach ($plats as $plat)
{{dd($plats)}}
@endforeach --}}






<div class="w-full mt-4 px-24">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg w-full">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        id_catgeory
                    </th>
                    <th class="px-6 py-3">
                        name_catgeory
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categorys as $category)
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <td class="px-6 py-4">
                        {{$category->id}}
                    </td>
                    <td class="px-6 py-4">
                        {{$category->name_category}}
                    </td>
                    <td class="px-6 py-4 text-center">
                            <div class="flex">                                
                                <button class="mr-2" onclick="editCategory({{$category->id}},'{{$category->name_category}}')">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 cursor-pointer text-green-400 hover:text-green-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                                    </svg>
                                </button>
                            <form method="post" action="{{ route('category.destroy', $category->id) }}">
                                @csrf
                                @method('delete')
                                <button  type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 cursor-pointer text-red-400 hover:text-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                    </svg>
                                </button>
                            </form>
                            </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</section>
</main>
</div>
{{-- add category --}}
<div id="add-Plat" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class=" fixed hidden justify-center items-center top-0 left-0 right-0 z-50  w-full p-4 overflow-x-hidden overflow-y-auto bg-black bg-opacity-50 h-screen ">
    <div class="relative w-full h-full max-w-2xl md:h-auto">
        <div class="bg-white rounded-lg shadow dark:bg-gray-700 ">
            <div class="flex justify-between p-4 border-b  dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Add Category
                </h3>
                <button id="closeAdd-modal" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="staticModal">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <form action="{{url('category')}}"  method="post" >
                @csrf
                <div class="mx-4 mt-6">
                    <div class="flex items-center justify-between">
                        <div class="w-full">
                            <label for="name_dishes" class="font-serif block mb-2 text-sm font-medium text-gray-900 dark:text-white">name of category</label>
                            <input type="text" name="name_category"  id="name_category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Name of category" required>
                        </div>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center justify-end p-4 mt-4 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button id="add-button" type="submit" class=" text-black border-2 hover:bg-green-500 border-green-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center font-sans">Create</button>
                    <button id="decline-button" type="button" class="text-black font-sans bg-gray-100 hover:bg-gray-300  border-2 border-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Decline</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- update category --}}

<div id="update-Category" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class=" fixed flex hidden justify-center items-center top-0 left-0 right-0 z-50  w-full p-4 overflow-x-hidden overflow-y-auto bg-black bg-opacity-50 h-screen ">
    <div class="relative w-full h-full max-w-2xl md:h-auto">
        <div class="bg-white rounded-lg shadow dark:bg-gray-700 ">
            <div class="flex justify-between p-4 border-b  dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Update Category
                </h3>
                <button id="closeUpdate-modal" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="staticModal">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <form action="{{route('category.update')}}"   method="post" >
                @csrf
                @method('PUT')
                <div class="mx-4 mt-6">
                    <div class="flex items-center justify-between">
                        <div class="w-full">
                            <input type="text" name="updateid_category" id="updateid_category">
                            <label for="name_dishes" class="font-serif block mb-2 text-sm font-medium text-gray-900 dark:text-white">name of category</label>
                            <input type="text" name="updatename_category"  id="updateCategory_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Name of category" required>
                        </div>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center justify-end p-4 mt-4 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button id="updateCategory-button" type="submit" class="text-black border-2 hover:bg-green-500 border-green-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center font-sans">Update</button>
                    <button id="declineUpdate-Categorybutton" type="button" class="text-black font-sans bg-gray-100 hover:bg-gray-300  border-2 border-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Decline</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>

</body>

</html>
