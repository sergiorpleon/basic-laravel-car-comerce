

<div class="container">
    <div class="alert alert-warning">
        <ul>
        @foreach($errors->all() as $error)
            <li>
                {{ $error }}
            </li>
        @endforeach
        </ul>
    </div>
</div>
