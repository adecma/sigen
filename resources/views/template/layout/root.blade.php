<html lang="en">
<head>
    @include('template.layout._head')
</head>
<body class="hold-transition skin-green sidebar-mini">
    <div class="wrapper">
        @include('template.layout._navbar')

        @include('template.layout._sidebar-left')

        @include('template.layout._content')

        @include('template.layout._footer')
    </div>
    
    @include('template.layout._script')
</body>
</html>