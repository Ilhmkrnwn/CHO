<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.head')
</head>

<body>
    <header>
        @include('layout.navbar')
    </header>

    <section>
        @yield('content')
    </section>
    <aside>

    </aside>
    <footer>
        @include('layout.footer')
    </footer>

</body>

</html>