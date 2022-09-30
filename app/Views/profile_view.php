<style>
.field-icon {
    float: right;
    height: 15px;
    width: 15px;
    margin-top: 1px;
    position: relative;
    z-index: 2;
}
</style>

<form id="form" method="post" autocomplete="off" action="<?= base_url('profile/update'); ?>">
    <div class="page-body"></div>
    <div class="container-xl">
        <div class="row row-cards">

            <div class="col-md-7 col-lg-6">
                <div class="card">
                    <div class="card-header bg-primary-lt">
                        <h3 class="card-title">Profil</h3>
                    </div>
                    <div class="card-body">
                        <input type="hidden" id="edit_prof">
                        <div class="col mb-2">
                            <label class="form-label">Alamat Email</label>
                            <input type="text" class="form-control" name="user_email" id="email"
                                readonly value="<?= $user_email; ?>">
                        </div>

                        <div class="col mb-2">
                            <label class="form-label">Nama Lengkap<a style="color: red">*</a></label>
                            <input type="text" class="form-control" name="user_name" id="user_name"
                                value="<?= $user_name; ?>">
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Ganti Kata Sandi<a style="color: red">*</a></label>
                            <div class="input-group input-group-flat">
                                <input type="password" class="form-control " name="password1" id="password1">
                                <span class="input-group-text">
                                    <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle toggle-password"></span>
                                </span>              
                            </div>
                        </div>
                        <div class="mb-2">
                            <abel class="form-label">Ulangi Kata Sandi <a style="color: red">*</a></label>
                            <div class="input-group input-group-flat">
                                <input type="password" class="form-control " name="user_password" id="password2">
                                <span class="input-group-text">
                                    <span toggle="#password2" class="fa fa-fw fa-eye field-icon toggle toggle-password"></span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row align-items-center">
                            <div class="col"></div>
                            <div class="col-auto">
                                <a href="data" class="btn btn-warning">Kembali</a>
                                <button type="submit" class="btn btn-primary btn-ubah update">Ubah</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</form>

<!-- DATATABLES SCRIPT -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/PapaParse/4.6.3/papaparse.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.2.3/js/dataTables.fixedHeader.min.js"></script>
<!-- --- -->

<script>
$(".toggle-password").click(function() {

    $(this).toggleClass("fa-eye fa-eye-slash");
    var input = $($(this).attr("toggle"));
    if (input.attr("type") == "password") {
        input.attr("type", "text");
    } else {
        input.attr("type", "password");
    }
});

$(document).ready(function(e) {
    toastr.options = {
        'closeButton': false,
        'debug': false,
        'newestOnTop': false,
        'progressBar': true,
        'positionClass': 'toast-top-right',
        'preventDuplicates': false,
        'showDuration': '1000',
        'hideDuration': '1000',
        'timeOut': '3000',
        'extendedTimeOut': '1000',
        'showEasing': 'swing',
        'hideEasing': 'linear',
        'showMethod': 'fadeIn',
        'hideMethod': 'fadeOut',
    }

    $(document).on('click', '.update', function(e) {
        e.preventDefault();
        $.ajax({
            method: "post",
            url: "profile/update",
            data: $('#form').serialize(),
            success: function(response) {
                if (response.status == "Profil berhasil diupdate silakan login kembali") {
                    toastr.success(response.status);
                    window.setTimeout(function() {
                        location.replace("/login/logout"); // Harus logout soalnya biar session berubah
                    }, 3000);
                } else {
                    toastr.error(response.status); // ini masih belum bias nampilin error
                }
            }
        });
        e.preventDefault();
    });
});
</script>

<!-- Tabler Core -->
<script src="/Assets/js/tabler.min.js"></script>
<script src="/Assets/js/demo.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>