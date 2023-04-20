<!DOCTYPE html>
<html>
<head>
    <title>Website Quản Lý Sản Phẩm</title>
    <!-- Các tài nguyên CSS và JS sẽ được thêm vào đây -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>

    <header>
        <nav>
        <li>
        <a href="">Trang chủ</a></li>
            <li><a href=" ">Sản phẩm</a></li>
            <li><a href="">Giới thiệu</a></li>
            <!-- <a href="{{ route('home') }}">Trang chủ</a></li>
            <li><a href="/*{{ route('products.index') }}">Sản phẩm</a></li>
            <li><a href="{{ route('about') }}">Giới thiệu</a></li> -->
           
        </ul>
         
        </nav>
    </header>

    
    <main>
        <!-- Khu vực để trang con (như trang chủ, trang sản phẩm, v.v.) có thể đổ dữ liệu vào -->
        @yield('content')
    </main>

    <!-- Phần footer của trang -->
    <footer>
        <!-- Nội dung footer của trang web -->
    </footer>
</body>
</html>