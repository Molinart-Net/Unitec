<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gameloft</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">

    <link rel="stylesheet" href="{{ asset('css/cs-skin-elastic.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<aside id="left-panel" class="left-panel">
    @include('partials.sidebar')
</aside>


<div id="right-panel" class="right-panel">

    <header id="header" class="header">
        @include('partials.header')
    </header>

    <div class="content">
        @yield('content')
    </div>

    <div class="clearfix"></div>

    @include('partials.modal.user')
    @include('partials.modal.lang')

    <footer class="site-footer">
        @include('partials.footer')
    </footer>

</div>


<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>

<script src="{{ asset('js/main.js') }}"></script>

<script>
    jQuery(function ($) {
        $('#add-course').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var empleado = button.data('user') // Extract info from data-* attributes
            var id = button.data('id') // Extract info from data-* attributes

            var modal = $(this)
            modal.find('#empleado').text(empleado)
            modal.find('.modal-title').text('Nuevo curso para ' + empleado)
            modal.find('.modal-body input').val(id)
        })

        $('#upd-course').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var porcentaje = button.data('porcentaje') // Extract info from data-* attributes
            var id = button.data('id') // Extract info from data-* attributes
            var status = button.data('status') // Extract info from data-* attributes

            var modal = $(this)
            modal.find('#curso_id').val(id)
            modal.find('#porcentaje').val(porcentaje)
            modal.find('div.status select').val(status)
        })
    })
</script>
</body>
</html>
