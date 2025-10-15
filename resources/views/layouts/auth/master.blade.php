<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page | {{ env('APP_NAME') }}</title>
    <!-- Bootstraps 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <!-- Custom Style -->
    <link rel="stylesheet" href="{{ base_url('assets/backoffice/css/login.css') }}">
    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
        integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container-fluid h-100">
        <div class="row h-100">
            @yield('content')
            <div class="col-md-6 bg-login h-min-100 justify-content-center d-none d-md-flex">
                <div class="align-self-center text-center">
                    <img class="img-fluid mb-5" src="{{ base_url('adminlte/assets/img/AdminLTELogo.png') }}"
                        alt="">
                    <div class="d-flex justify-content-center align-items-center">
                        <div>
                            <small class="ms-3">{{ env('APP_SUBNAME') }}</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
        </script>
        <!-- sweetalert JS -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>

        <!-- Script -->
        <script>
            $(document).ready(function() {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })

                @if ($success = get_instance()->session->flashdata('success'))
                    Toast.fire({
                        icon: 'success',
                        {!! strip_tags($success) != $success ? "html: `$success`" : "text: `$success`" !!}
                    })
                @endif

                @if ($warning = get_instance()->session->flashdata('warning'))
                    Toast.fire({
                        icon: 'warning',
                        {!! strip_tags($warning) != $warning ? "html: `$warning`" : "text: `$warning`" !!}
                    })
                @endif

                @if ($error = get_instance()->session->flashdata('error'))
                    Toast.fire({
                        icon: 'error',
                        {!! strip_tags($error) != $error ? "html: `$error`" : "text: `$error`" !!}
                    })
                @endif

                $("body").on("click", (function(e) {
                    if ($(e.target).hasClass("destroy")) {
                        e.preventDefault();
                        const href = $(e.target).attr("href");
                        Swal.fire({
                            title: "Yakin ingin mengapus data ini?",
                            text: "Data yang dihapus tidak dapat dikembalikan lagi!",
                            icon: "warning",
                            showCancelButton: !0,
                            confirmButtonColor: "#3085d6",
                            cancelButtonColor: "#d33",
                            confirmButtonText: "Ya, hapus ini!"
                        }).then(result => {
                            if (result.isConfirmed) {
                                $('body').waitMe({
                                    effect: 'bounce',
                                    text: '',
                                    bg: "rgba(255, 255, 255, 0.7)",
                                    color: "#000",
                                    maxSize: '',
                                    waitTime: -1,
                                    textPos: 'vertical',
                                    fontSize: '',
                                    source: '',
                                    onClose: function() {}
                                });
                                result.isConfirmed && (document.location.href = href)
                            }
                        })
                    }

                    if ($(e.target).hasClass("waitme")) {
                        $('body').waitMe({
                            effect: 'bounce',
                            text: '',
                            bg: "rgba(255, 255, 255, 0.7)",
                            color: "#000",
                            maxSize: '',
                            waitTime: -1,
                            textPos: 'vertical',
                            fontSize: '',
                            source: '',
                            onClose: function() {}
                        });
                    }
                }));
            })
        </script>
        @stack('scripts')
</body>

</html>
