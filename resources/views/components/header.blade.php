<header>
     <ul>
          <li class="hide">
               <a href="{{route('infoWebPage')}}">
                    Chi siamo
               </a>
          </li>
     

     
          <li class="hide">
               <a href="{{route('faq')}}">
                    Faq
               </a>
          </li>
     

     
          <li>
               <a class="logo" href="{{route('homepage')}}">
                    <span>D</span><span>eliverboo</span>{{-- DeliverBoo --}}
               </a>
          </li>
     

     
          <li class="hide">
               @auth
                   <a href="{{ route('dashBoard') }}">{{Auth::user() -> name}}</a>
               <li class="hide">
                   <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
               </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                    </form>
               @else
                   <a href="{{ route('login') }}">Login</a>

          </li>
     

     
          <li class="hide">
               <a href="{{ route('register') }}">
               Registrati
               @endauth
               </a>
          </li>

          <hamburger-component>
               <li>
                    <a href="{{route('infoWebPage')}}">
                         Chi siamo
                    </a>
               </li>

               <li>
                    <a href="{{route('faq')}}">
                         Faq
                    </a>
               </li>

               <li>
                    @auth
                        <a href="{{ route('dashBoard') }}">{{Auth::user() -> name}}</a>
                    <li clas>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    </li>
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                         @csrf
                         </form>
                    @else
                        <a href="{{ route('login') }}">Login</a>
     
               </li>

               <li>
                    <a href="{{ route('register') }}">
                    Registrati
                    @endauth
                    </a>
               </li>
          </hamburger-component>
     </ul>
</header>

               

              

   