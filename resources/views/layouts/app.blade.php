<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{--csrf-token 标签是为了方便前端的 JavaScript 脚本获取 CSRF 令牌。--}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- jq 写法：$('meta[name="csrf-token"]').attr("content"));--}}

    {{--@yield : 站位，并附加默认值 继承此模板的blade页面才能用  --}}
    <title>@yield('title', 'LaraBBS') -- Laravel 进阶教程</title>

    {{--mix() : 主要根据 webpack.mix.js 的逻辑来生成 CSS 文件链接--}}
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

</head>
<body>
    {{--route_class() : 自定义方法 --}}
    <div id="app" content="{{ route_class() }}-page">
        {{--包含其他路由--}}
        @include('layouts._header')

        <div class="container">

            @include('shared._messages')

            @yield('content')

        </div>

        @include('layouts._footer')
    </div>

    {{--引入js--}}
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>