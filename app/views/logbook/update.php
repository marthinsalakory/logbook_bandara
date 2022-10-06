<form method="POST" enctype="multipart/form-data" class="card m-5">
    <div class="card-header">
        <div class="row">
            <div class="col-10">
                <h3>EDIT LOGBOOK</h3>
            </div>
            <div class="col-2">
                <button class="btn btn-primary float-end mx-1 my-1"><i class="fa fa-save"></i> Save</button>
                <a href="<?= BASEURL; ?>/Logbook" class="btn btn-danger float-end mx-1 my-1"><i class="fa fa-left-long"></i> Back</a>
            </div>
        </div>
    </div>
    <div class="card-body border border-2">
        <div class="row mt-3">
            <div class="col-lg-2 col-sm-12 d-flex align-items-center">
                <label class="form-label" for="activity">Activity <span class="text-danger">*</span></label>
            </div>
            <div class="col-lg-10 col-sm-12">
                <input value="<?= $data['edit']->activity; ?>" required placeholder="Enter Here" type="text" name="activity" id="activity" class="form-control">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-2 col-sm-12">
                <label class="form-label" for="area">Area <span class="text-danger">*</span></label>
            </div>
            <div class="col-lg-10 col-sm-12">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <input <?= $data['area']->A == 'on' ? 'checked' : ''; ?> class="form-check-input" type="checkbox" name="A" id="A">
                        <label class="form-check-label" for="A">A. Daerah Kedatangan (Arrival) Penumpang</label><br>
                        <input <?= $data['area']->B == 'on' ? 'checked' : ''; ?> class="form-check-input" type="checkbox" name="B" id="B">
                        <label class="form-check-label" for="B">B. Ruang Tunggu Keberangkatan</label><br>
                        <input <?= $data['area']->C == 'on' ? 'checked' : ''; ?> class="form-check-input" type="checkbox" name="C" id="C">
                        <label class="form-check-label" for="C">C. Ruang CHECK-IN</label><br>
                        <input <?= $data['area']->F == 'on' ? 'checked' : ''; ?> class="form-check-input" type="checkbox" name="F" id="F">
                        <label class="form-check-label" for="F">F. Bagian Luar Gudang Karga Atau Halaman Kargo</label><br>
                        <input <?= $data['area']->G == 'on' ? 'checked' : ''; ?> class="form-check-input" type="checkbox" name="G" id="G">
                        <label class="form-check-label" for="G">G. Bagian Dalam Gudang Kargo</label><br>
                        <input <?= $data['area']->L == 'on' ? 'checked' : ''; ?> class="form-check-input" type="checkbox" name="L" id="L">
                        <label class="form-check-label" for="L">L. Gedung Listrik</label><br>
                        <input <?= $data['area']->M == 'on' ? 'checked' : ''; ?> class="form-check-input" type="checkbox" name="M" id="M">
                        <label class="form-check-label" for="M">M. Daerah Fasilitas Metereologi</label><br>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <input <?= $data['area']->N == 'on' ? 'checked' : ''; ?> class="form-check-input" type="checkbox" name="N" id="N">
                        <label class="form-check-label" for="N">N. Gedung Peralatan Navigasi Dan Telekomunikasi</label><br>
                        <input <?= $data['area']->O == 'on' ? 'checked' : ''; ?> class="form-check-input" type="checkbox" name="O" id="O">
                        <label class="form-check-label" for="O">O. Daerah Fasilitas Suplai Bahan Bakar</label><br>
                        <input <?= $data['area']->P == 'on' ? 'checked' : ''; ?> class="form-check-input" type="checkbox" name="P" id="P">
                        <label class="form-check-label" for="P">P. Platform / Apron Area</label><br>
                        <input <?= $data['area']->R == 'on' ? 'checked' : ''; ?> class="form-check-input" type="checkbox" name="R" id="R">
                        <label class="form-check-label" for="R">R. Gedung Radar</label><br>
                        <input <?= $data['area']->T == 'on' ? 'checked' : ''; ?> class="form-check-input" type="checkbox" name="T" id="T">
                        <label class="form-check-label" for="T">T. Tower</label><br>
                        <input <?= $data['area']->U == 'on' ? 'checked' : ''; ?> class="form-check-input" type="checkbox" name="U" id="U">
                        <label class="form-check-label" for="U">U. Baggage Make-Up Area Sisi Udara Kecuali Apron</label><br>
                        <input <?= $data['area']->V == 'on' ? 'checked' : ''; ?> class="form-check-input" type="checkbox" name="V" id="V">
                        <label class="form-check-label" for="V">V. Seluruh Daerah Fasilitas Vital Bandar Udara</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-2 col-sm-12 d-flex align-items-center">
                <label class="form-label" for="documentation">New Documentation</label>
            </div>
            <div class="col-lg-10 col-sm-12">
                <input multiple placeholder="Enter Here" type="file" name="documentation[]" id="documentation" class="form-control">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-2 col-sm-12">
                <label class="form-label" for="solution">Solution <span class="text-danger">*</span></label>
            </div>
            <div class="col-lg-10 col-sm-12">
                <textarea required placeholder="Enter Here" class="form-control" name="solution" id="solution" cols="30" rows="10"><?= $data['edit']->solution; ?></textarea>
            </div>
        </div>
    </div>
</form>