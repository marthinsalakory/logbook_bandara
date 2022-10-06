<div class="d-flex justify-content-center align-items-center w-100" style="height: 100vh; background-color: #0050B3;">
    <div class="card h-50 w-50">
        <form method="POST" class="card-body">
            <h1 class="text-center mb-5 fw-bold">LOGIN LOGBOOK</h1>
            <?= Flasher::flash(); ?>
            <div class="w-100 mb-4 mt-2">
                <label class="form-label" for="id">ID :</label>
                <input value="<?= Flasher::oldValue('id'); ?>" required class="form-control" type="text" name="id" id="id">
            </div>
            <div class="w-100 mb-4">
                <label class="form-label" for="password">Password :</label>
                <input required class="form-control" type="password" name="password" id="password">
            </div>
            <div class="w-100 text-center">
                <button class="btn btn-primary">LOGIN</button>
            </div>
            <div class="w-100">
                <a href="<?= BASEURL; ?>/Auth/register">Belum punya akun?</a>
            </div>
        </form>
    </div>
</div>