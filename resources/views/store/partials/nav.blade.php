
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
      <a class="navbar-brand" href="{{ route('home') }}">MiTienda</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample03">
        <ul class="navbar-nav " style="margin-left: auto!important;">
          <li class="nav-item active">
            <a class="nav-link" href="{{ route('cart-show') }}" class="" ><i class="fa  fa-shopping-cart "></i></a>
          </li>

          @if(Auth::check() && Auth::user()->type === 'admin' )
          <li class="nav-item active">
            <a class="nav-link" href="{{ route('admin') }}" class="" >Administración</a>
          </li>
          @endif
         
          @include('store.partials.menu-user')
        </ul>
      </div>
    </nav>
