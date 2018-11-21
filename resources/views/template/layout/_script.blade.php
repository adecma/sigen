<script src="{{ asset('vendors/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendors/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('vendors/adminlte/js/adminlte.min.js') }}"></script>

@stack('add_script')

<script>
    $(function() {
        @stack('add_js')
    })
</script>