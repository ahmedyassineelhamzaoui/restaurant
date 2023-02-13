@extends('layouts.header')     
        @section('content')
        <section class="mt-4 px-4 w-full grid justify-center items-center row gap-4  xl:grid-cols-4 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">  
          @foreach ($plats as $plat)
          <div class="w-full h-[500px] bg-white  flex justify-center">
          <div class="w-[300px] h-full  shadow-lg  rounded-lg ">
           <img src="/myimages/{{$plat->plat_picture}}" alt="" class="w-full h-3/6 ">
           <div class="h-2/6">
           <h2 class="text-center font-bold font-serif">{{$plat->plat_name}}</h2>
           <p class="font-sans px-2 ">{{$plat->plat_descreption}}</p>
           </div>
           <div class="flex justify-center  h-1/6 items-center">
           <button class="text-white bg-yellow-400 hover:bg-yellow-500 rounded-lg px-5 py-3" >Overview</button>
           </div>
         </div>
        </div>
        @endforeach
        </section>
        </section>
        @include('layouts.footer')
        @endsection
