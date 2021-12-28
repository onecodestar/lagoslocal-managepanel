{{-- User logged in --}}
<ul id="top_menu" class="drop_user">
    <li>
        @if (Auth::check())
            <div class="dropdown user clearfix">
                <a href="javascript:;" data-toggle="dropdown">
                    <figure><img src="{{ Auth::user()->avatar }}" alt="" onclick="profile()"></figure>
                    {{ Auth::user()->firstname }} {{ Auth::user()->lastname }}
                </a>
                <div class="dropdown-menu">
                    <div class="dropdown-menu-content">
                        <ul>
                            {{-- <li><a href="#0"><i class="icon_cog"></i>Dashboard</a></li>
                        <li><a href="#0"><i class="icon_document"></i>Bookings</a></li>
                        <li><a href="#0"><i class="icon_heart"></i>Wish List</a></li> --}}
                            <li>
                                <a href="javascript:;"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="icon_key"></i>Log out
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        @else
            <div>
                <a href="{{ url('/') }}" style="color:#f7941d">Login</a>
            </div>
        @endif
        <!-- /dropdown -->
    </li>
</ul>
<form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
<form id="go_profile" action="{{ route('user-profile') }}" method="get" style="display: none;">
</form>
{{-- USER Not logged in --}}
{{-- <ul id="top_menu">
    <li><a href="#sign-in-dialog" id="sign-in" class="login">Sign In</a></li>
    <li><a href="wishlist.html" class="wishlist_bt_top" title="Your wishlist">Your wishlist</a></li>
</ul> --}}

<!-- /top_menu -->
<a href="#0" class="open_close">
    <i class="icon_menu"></i><span>Menu</span>
</a>
<nav class="main-menu">
    <div id="header_menu">
        <a href="#0" class="open_close">
            <i class="icon_close"></i><span>Menu</span>
        </a>
        <a href="index.html"><img src="{{ asset('assets/img/logo-long_nobg.png') }}" height="35" alt=""></a>
    </div>
    @if (Auth::check())
        <ul>
            <li><a href="{{ route('user-list') }}">Write review</a></li>
            <li><a href="{{ url('favorite/read') }}"><i class="far fa-heart"></i> Favorites</a></li>
        </ul>
    @endif
</nav>
<script>
    function profile(){
        console.log('sdf');
        $('#go_profile').submit();
    }
</script>


