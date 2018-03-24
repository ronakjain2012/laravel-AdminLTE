<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        Invs :: @yield('title')
    </title>
    @include('layouts.style')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    @include('layouts.header')
    @include('layouts.sidemenu')

    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                @yield('module')
                <small>@yield('module_details')</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-asterisk"></i>Invs</a></li>
                <li class="active">@yield('current_nav')</li>
            </ol>
        </section>

        <section class="content container-fluid">
            @yield('body_section')
        </section>
    </div>

    @include('layouts.footer')
    @include('layouts.sidemenu_right')
</div>
@include('layouts.script')
</body>
</html>
