<nav class="navbar navbar-default navbar-fixed-top">
    <div class="navbar-inverse">
        <div class="container">
            <div class="navbar-header">
           <a href="/">         <img src="{{asset('imgt/getit.png')}}" height="53" width="100"></a>
                <a class="navbar-brand" href="/">
                    
                </a>
            </div>
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" style="padding-right: 200px" class="form-control" placeholder="Find services">
                </div>
            </form>
            <ul class="nav navbar-nav navbar-right">
                @if(Auth::check())
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                           role="button" aria-haspopup="true" aria-expanded="false">
                            Sales & Orders<span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('order.showSelling', Auth::user()->id) }}">My Sellings</a></li>
                            <li><a href="{{ route('order.show', Auth::user()->id) }}">My Orders</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                           role="button" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            
                            <li><a href="{{ route('user', Auth::user()->name) }}">My Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <li>
                        <a href="{{ route('login') }}">Login</a>
                    </li>
                    <li>
                        <a href="{{ route('register') }}">Register</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
    {{-- <div id="category">
        <div class="container">
            <ul class="nav navbar-nav">
            
                <li><a href="">Graphics & Design</a></li>
                <li><a href="">Digital Marketing</a></li>
                <li><a href="">Video & Animation</a></li>
                <li><a href="">Music & Audio</a></li>
                <li><a href="">Programming & Tech</a></li>
            </ul>
        </div>
    </div> --}}
</nav>