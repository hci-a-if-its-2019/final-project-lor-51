    <!-- HEADER -->
    <header id="header">
        <!-- NAV -->
        <div id="nav">
            <!-- Top Nav -->
            <div id="nav-top">
                <div class="container">
                    <!-- social -->
                    <ul class="nav-social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                    <!-- /social -->

                    <!-- logo -->
                    <div class="nav-logo">
                        <a href="{{url('')}}" class="logo"><img src="{{asset('callie/img/logo-craiglist.JPG')}}" alt=""></a>
                    </div>
                    <!-- /logo -->

                    <!-- search & aside toggle -->
                    <div class="nav-btns">
                        <button class="aside-btn"><i class="fa fa-bars"></i></button>
                        <button class="search-btn"><i class="fa fa-search"></i></button>
                        <div id="nav-search">
                            <form action="{{url('search/threads')}}">
                                <input class="input" name="search" placeholder="Enter your search...">
                                <div class="form-group">
                                    <select name="category" id="category" class="form-control categories-select">
                                        <option value="All" selected>All</option>
                                        <option value="Lifestyle">Lifestyle</option>
                                        <option value="Fashion">Fashion</option>
                                        <option value="Technology">Technology</option>
                                        <option value="Travel">Travel</option>
                                        <option value="Health">Health</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn" style="width: 100%">Search</button>
                            </form>
                            <button class="nav-close search-close">
                                <span></span>
                            </button>
                        </div>
                    </div>
                    <!-- /search & aside toggle -->
                </div>
            </div>
            <!-- /Top Nav -->

            <!-- Main Nav -->
            <div id="nav-bottom">
                <div class="container">
                    <!-- nav -->
                    <ul class="nav-menu">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><a href="{{url('forums')}}">Forums</a></li>
                    </ul>
                    <!-- /nav -->
                </div>
            </div>
            <!-- /Main Nav -->

            <!-- Aside Nav -->
            <div id="nav-aside">
                <ul class="nav-aside-menu">
                    <li><a href="{{url('')}}">Home</a></li>
                    <li class="has-dropdown"><a>Forums</a>
                        <ul class="dropdown">
                            <li><a href="#">Lifestyle</a></li>
                            <li><a href="#">Fashion</a></li>
                            <li><a href="#">Technology</a></li>
                            <li><a href="#">Travel</a></li>
                            <li><a href="#">Health</a></li>
                        </ul>
                    </li>

                    @guest
                        <li><a href="/login">Login</a></li>
                    @else
                        <li>
                            <a href="{{ url('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                        </li>
                        <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @endguest
                </ul>
                <button class="nav-close nav-aside-close"><span></span></button>
            </div>
            <!-- /Aside Nav -->
        </div>
        <!-- /NAV -->
    </header>
    <!-- /HEADER -->