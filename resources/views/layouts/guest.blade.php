@include('layouts.head')
       <div id="app">
        <header class="header-landingpage">
            <nav class="fixed flex px-2 justify-between items-center bg-black nav-landingpage shadow-sm shadow-white">
              <a class="text-fuchsia-800 nav-logo font-sans" href="home"><img class="w-24" src="/images/Foody-removebg-preview.png" alt="logo"></a>
              <ul id="nav-page" class="flex my-auto nav-pages">
                <li><a class="ml-2 about-page text-white" href="home">Home</a></li>
                <li><a class="ml-2 mr-2 news-page text-white" href="/plat">plat</a></li>
                <li><a class="ml-2 mr-2 tearms-page text-white " href="#about">About</a></li>
                <li><a class="ml-2 mr-2 contact-page text-white "  href="#contact">Contact</a></li>
              </ul>
              <ul id="nav-compt" class="flex  my-auto nav-compte">
            @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br hover:text-white ">
                          <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white text-yellow-400 hover:bg-yellow-400 hover:text-black font-bold  rounded-md ">
                            Dashboard
                          </span>
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm">
                          <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-yellow-400 text-white font-bold hover:text-black hover:bg-white rounded-md group-hover:bg-opacity-0">
                            Log in
                         </span> 
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br hover:text-white ">
                              <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white text-yellow-400 hover:bg-yellow-400 hover:text-black font-bold  rounded-md ">
                                Register
                              </span>
                            </a>
                        @endif
                    @endauth
            @endif
              </ul>
              <div class="header-menu">
                <span class="ligne"></span>
                <span class="ligne"></span>
                <span class="ligne"></span>
              </div>
            </nav>
          </header>

          <main>
            <div class="h-screen flex justify-center items-center px-6  sm:pt-0 bg-gray-100 dark:bg-gray-900">
                {{-- <div> --}}
                    {{-- <a href="/">
                        <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                    </a> --}}
                {{-- </div> --}}
    
                <div class="w-full sm:max-w-md mt-6   bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                    <div class="w-full px-6 py-2">
                    {{ $slot }}
                   </div>
                </div>
            </div>
          </main>
       </div>
</html>
