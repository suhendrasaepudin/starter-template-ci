<!-- sweetalert JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
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

        <?php if ($success = $this->session->flashdata('success')) { ?>
            Toast.fire({
                icon: 'success',
                text: `<?= $success ?>`
            })
        <?php } ?>

        <?php if ($warning = $this->session->flashdata('warning')) { ?>
            Toast.fire({
                icon: 'warning',
                text: `<?= $warning ?>`
            })
        <?php } ?>

        <?php if ($error = $this->session->flashdata('error')) { ?>
            Toast.fire({
                icon: 'error',
                text: `<?= $error ?>`
            })
        <?php } ?>

        <?php if ($info = $this->session->flashdata('info')) { ?>
            Toast.fire({
                icon: 'info',
                text: `<?= $info ?>`
            })
        <?php } ?>

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