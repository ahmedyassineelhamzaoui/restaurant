<aside id='dashboardSide-bar' class="side-bar z-10">
    <div class="sidebar-content">
        <a href="home">
        <ul class="relative top-2 left-1">
            <li class=" flex justify-start items-center "><img class="w-20 h-20 " src="/images/logoj.png" alt=""><span class="hidden Blog-text ml-2 font-bold text-md text-yellow-400">Foody.RS</span></li>
        </ul>
        </a>
        <i class="hidden  icon-left icon fa-solid fa-angles-left"></i>
        <i class="icon-right icon fa-solid fa-angles-right"></i>
        <div class="profile-image">
            <img src="/images/profile.png" alt="">
        </div >
        <div class="user-connect">
            <p class="">Super<br>{{ Auth::user()->name }}</p>
        </div>

        <ul class="list-content1">
            <li><a href="{{ url('category')}}"><i class="fa-solid fa-table-columns"></i><span class="words">Categories</span></a></li>
            <li><a href="{{ url('dashboard')}}"><i class="fa-solid fa-plate-wheat"></i><span  class="words">Dishes</span></a></li>
            <li><a href="{{ url('users')}}"><i class="fa-solid fa-users"></i><span  class="words">Users</span></a></li>
            <li><a href="{{route('profile.edit')}}" class="cursor-pointer"  ><i class="fa-solid fa-address-card"></i><span class="words">Profile</span></a></li>
            
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a class="cursor-pointer" :href="route('logout')"

                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                <i class="fa-solid fa-right-from-bracket"></i><span class="words">logout</span>
                    </a>
                </form>
            </li>
        </ul>
    </div>
</aside>
<section>
