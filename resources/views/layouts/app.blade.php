<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <nav>
            {{-- judul --}}
            <h3>@yield('judul_halaman')</h3>
            <a href="/blog">HOME</a>
			|
			<a href="/blog/tentang">TENTANG</a>
			|
			<a href="/blog/kontak">KONTAK</a>
        </nav>
    </header>


    {{-- content --}}
    @yield('content')


    {{-- footer --}}
    
</body>
</html>