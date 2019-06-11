
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
      <a class="navbar-brand" href="{{ route('home') }}">MiTienda</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample03">
        <ul class="navbar-nav " style="margin-left: auto!important;">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('category.index') }}">Categoría</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('tag.index') }}">Etiqueta</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('product.index') }}">Producto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('order.index') }}">Orden</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('user.index') }}">Usuario</a>
          </li>

          @include('admin.partials.menu-user')
        </ul>
      </div>
    </nav>
