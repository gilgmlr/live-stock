<div class="container" style="margin-top: 50px;">
    <div class="row justify-content-center">
        <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
            <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">
                Pendaftaran Akun Warehouse
            </p>
            <form class="mx-1 mx-md-4" action="<?= base_url() ?>settings/add_account" method="POST">
                <div class="row justify-content-center">
                    <div class="col-sm-10">
                        <div class="input mt-2">
                            <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                            <label class="form-label" for="form3Example1c">NIP</label>
                            <input type="text" id="nip" class="text-input" name="nip" autocomplete="off"
                                placeholder="Enter your NIP" required />
                        </div>

                        <div class="input mt-2">
                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                            <label class="form-label" for="form3Example1c">Nama</label>
                            <input type="text" id="name" class="text-input" name="name" autocomplete="off"
                                placeholder="Enter your name" required />
                        </div>

                        <div class="input mt-2">
                            <i class="fas fa-users fa-lg me-3 fa-fw"></i>
                            <label class="form-label" style="margin-top: 8px;" for="form3Example1c">Role</label>
                            <select class="form-select form-control text-input" aria-label=".form-select-lg example"
                                id="role" name="role" required>
                                <option selected>-- select --</option>
                                <option value="1">1</option>
                                <option value="1">2</option>
                                <option value="1">3</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center mx-4 mb-3 mb-md-4">
                    <button type="submit" class="btn btn-primary btn-lg">Register</button>
                </div>
                <center><a href="#pablo">See registered accounts?</a></center>
            </form>
        </div>
    </div>

</div>


</body>
<script>
$(document).ready(function() {
    $('#warehouse').DataTable();
    LengthMenu: [
        [5, 10, 25, 50, 100, -1],
        [5, 10, 25, 50, 100, "All"]

    ]
});
</script>

</html>