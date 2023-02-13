@include('layouts.head')
       <div id="app">
        <header class="header-landingpage">
            <nav class="fixed flex px-2 justify-between items-center bg-black nav-landingpage shadow-sm shadow-white">
              <a class="text-fuchsia-800 nav-logo font-sans" href="home"><img class="w-24" src="/images/Foody-removebg-preview.png" alt="logo"></a>
              <ul id="nav-page" class="flex my-auto nav-pages">
                <li><a class="ml-2 about-page text-white px-5 " href="{{ url('/welcome') }}">Home</a></li>
                <li><a class="ml-2 mr-2 news-page text-white px-7" href="#plat">plat</a></li>
                <li><a class="ml-2 mr-2 tearms-page text-white px-5" href="#about">About</a></li>
                <li><a class="ml-2 mr-2 contact-page text-white px-3"  href="#contact">Contact</a></li>
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
              <div class="header-menu text-gray-400">
                <span class="ligne"></span>
                <span class="ligne"></span>
                <span class="ligne"></span>
              </div>
            </nav>
            <div class="home flex justify-center items-center">
              <div class="headerTitle">
                <pre class="text-purple-500 text-4xl font-bold font-sans">Welcome</pre>
                <pre class="text-blue-500 text-4xl font-bold font-sans">         In Restaurante</pre>
                <pre class="text-pink-400 text-4xl font-bold font-sans ">                     Foody</pre>
              </div>
            </div>
          </header>

          <main>
            @yield('content')
          </main>
       </div>
