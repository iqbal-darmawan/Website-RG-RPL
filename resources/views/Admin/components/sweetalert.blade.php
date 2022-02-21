@if (Session::has('success'))
    <script>
        swal("success","{!!Session::get('success')!!}","success")
    </script>
@endif
@if (Session::has('error'))
    <script>
        swal("error","{!!Session::get('error')!!}","error")
    </script>
@endif
