<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
</x-app-layout>

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
<div class="w-full mt-4 px-24">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg w-full">
        <x-success-status class="mb-4" :status="session('message')" />
        <form action="{{route('dashboard.update',$plat->id)}}"   method="post" class="border border-gray-200" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mx-4 mt-6 ">
                <div class="flex justify-between items-center w-full ">
                <div class="w-1/2 mr-3">
                    <label for="Uname_dishes" class="font-serif block mb-2 text-sm font-medium text-gray-900 dark:text-white">name of dishes</label>
                    <input type="text" value="{{$plat->plat_name}}" name="plat_name"  id="Uname_dishes" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Name of dishes" required>
                </div>
                <div class="w-1/2">
                    <label for="Upicture_dishes" class="font-serif block mb-2 text-sm font-medium text-gray-900 dark:text-white">picture of dishes</label>
                    <input type="file"  name="myplat_picture"  id="Upicture_dishes" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full px-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                </div>
                </div>
                <div class="mt-1">
                    <label for="Udescreption_dishe" class="font-serif block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descreption of dishes</label>
                    <textarea {{$plat->plat_descreption}} name="plat_descreption" id="Udescreption_dishes" class="bg-gray-50 rounded w-full border border-gray-300 p-2" placeholder="Descreption of dishes" rows="5">{{$plat->plat_descreption}}</textarea>
                </div>
                <div>
                    <label for="Uday_dishes" class="block mb-2 font-serif text-sm font-medium text-gray-900 dark:text-white">Day of dishes</label>
                    <select name="plat_day" id="Uday_dishes" class="w-full py-2 bg-gray-50 border border-gray-300 rounded-lg cursor-pointer">
                        <option value="Monday" {{ $plat->plat_day == 'Monday' ? 'selected' : '' }} >Monday</option>
                        <option value="Tuesday" {{$plat->plat_day == 'Tuesday' ? 'selected' : '' }}>Tuesday</option>
                        <option value="Wednesday" {{$plat->plat_day == 'Wednesday' ? 'selected' : '' }}>Wednesday</option>
                        <option value="Thursday" {{$plat->plat_day == 'Thursday' ? 'selected' : '' }}>Thursday</option>
                        <option value="Friday" {{$plat->plat_day == 'Friday' ? 'selected' : '' }}>Friday</option>
                    </select>
                </div>
                <div>
                    <label for="Ucategory_dishes" class="block mb-2 font-serif text-sm font-medium text-gray-900 dark:text-white">Category of dishes</label>
                    <select name="plat_category" id="Ucategory_dishes" class="w-full py-2 bg-gray-50 border border-gray-300 rounded-lg cursor-pointer">
                        <option value="Brunches and lunches" {{$plat->plat_category =='Brunches and lunches' ? 'selected' : ''}}>Brunches and lunches</option>
                        <option value="desert"    {{$plat->plat_category =='desert' ? 'selected' : ''}}>desert</option>
                        <option value="soupe"     {{$plat->plat_category =='soupe' ? 'selected' : ''}}>soupe</option>
                        <option value="sandwich"  {{$plat->plat_category =='sandwich' ? 'selected' : ''}}>sandwich</option>
                    </select>
                </div>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center justify-end p-4 mt-4 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button  type="submit" class=" text-black border-2 hover:bg-green-500 border-green-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center font-sans">Update</button>
                    <a href="{{url('/dashboard')}}" type="button" class="text-black font-sans bg-gray-100 hover:bg-gray-300  border-2 border-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Back</a>
            </div>
        </form>
    </div>
</div>
