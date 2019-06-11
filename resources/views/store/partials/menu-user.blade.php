@if(Auth::check())
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="fa fa-user"></i> <b class="caret"></b>{{ Auth::user()->user }}</a>
            
<div class="dropdown-menu  dropdown-menu-right" aria-labelledby="dropdown03">
<a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                                </li>
@else
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> <b class="caret"></b></a>
<div class="dropdown-menu  dropdown-menu-right" aria-labelledby="dropdown03">
            <a class="dropdown-item"  href="{{ route('login') }}" class="">Login </a>
            <a class="dropdown-item"  href="{{ route('register') }}" class="">Register </a>
            </div>
          </li>
@endif