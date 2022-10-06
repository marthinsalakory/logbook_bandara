<div class="card m-5">
    <div class="card-header">
        <div class="row">
            <div class="col-8">
                <h3>LOGBOOK BANDAR UDARA PATTIMURA AMBON</h3>
            </div>
            <div class="col-4">
                <button class="btn btn-primary float-end mx-1 my-1" data-bs-toggle="modal" data-bs-target="#btn_add_logbook"><i class="fa fa-plus"></i> Add Logbook</button>
                <a onclick="return confirm('Export?')" href="<?= BASEURL; ?>/Logbook/export" class="btn btn-success float-end mx-1 my-1"><i class="fa fa-file-excel"></i> Export Logbook</a>
            </div>
        </div>
    </div>
    <!-- Modal Add -->
    <div class="modal fade fw-bold" style="margin-top: 80px;" id="btn_add_logbook" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen modal-dialog-scrollable">
            <div class="modal-content">
                <form method="POST" class="modal-body card" enctype="multipart/form-data">
                    <div class="card-header d-flex justify-content-between">
                        <h3>FORM ADD LOGBOOK</h3>
                        <div>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-caret-left"></i> Back</button>
                            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
                        </div>
                    </div>
                    <div class="card-body border border-2">
                        <div class="row mt-3">
                            <div class="col-lg-2 col-sm-12 d-flex align-items-center">
                                <label class="form-label" for="activity">Activity <span class="text-danger">*</span></label>
                            </div>
                            <div class="col-lg-10 col-sm-12">
                                <input required placeholder="Enter Here" type="text" name="activity" id="activity" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-2 col-sm-12">
                                <label class="form-label" for="area">Area <span class="text-danger">*</span></label>
                            </div>
                            <div class="col-lg-10 col-sm-12">
                                <div class="row">
                                    <div class="col-lg-6 col-sm-12">
                                        <input class="form-check-input" type="checkbox" name="A" id="A">
                                        <label class="form-check-label" for="A">A. Daerah Kedatangan (Arrival) Penumpang</label><br>
                                        <input class="form-check-input" type="checkbox" name="B" id="B">
                                        <label class="form-check-label" for="B">B. Ruang Tunggu Keberangkatan</label><br>
                                        <input class="form-check-input" type="checkbox" name="C" id="C">
                                        <label class="form-check-label" for="C">C. Ruang CHECK-IN</label><br>
                                        <input class="form-check-input" type="checkbox" name="F" id="F">
                                        <label class="form-check-label" for="F">F. Bagian Luar Gudang Karga Atau Halaman Kargo</label><br>
                                        <input class="form-check-input" type="checkbox" name="G" id="G">
                                        <label class="form-check-label" for="G">G. Bagian Dalam Gudang Kargo</label><br>
                                        <input class="form-check-input" type="checkbox" name="L" id="L">
                                        <label class="form-check-label" for="L">L. Gedung Listrik</label><br>
                                        <input class="form-check-input" type="checkbox" name="M" id="M">
                                        <label class="form-check-label" for="M">M. Daerah Fasilitas Metereologi</label><br>
                                    </div>
                                    <div class="col-lg-6 col-sm-12">
                                        <input class="form-check-input" type="checkbox" name="N" id="N">
                                        <label class="form-check-label" for="N">N. Gedung Peralatan Navigasi Dan Telekomunikasi</label><br>
                                        <input class="form-check-input" type="checkbox" name="O" id="O">
                                        <label class="form-check-label" for="O">O. Daerah Fasilitas Suplai Bahan Bakar</label><br>
                                        <input class="form-check-input" type="checkbox" name="P" id="P">
                                        <label class="form-check-label" for="P">P. Platform / Apron Area</label><br>
                                        <input class="form-check-input" type="checkbox" name="R" id="R">
                                        <label class="form-check-label" for="R">R. Gedung Radar</label><br>
                                        <input class="form-check-input" type="checkbox" name="T" id="T">
                                        <label class="form-check-label" for="T">T. Tower</label><br>
                                        <input class="form-check-input" type="checkbox" name="U" id="U">
                                        <label class="form-check-label" for="U">U. Baggage Make-Up Area Sisi Udara Kecuali Apron</label><br>
                                        <input class="form-check-input" type="checkbox" name="V" id="V">
                                        <label class="form-check-label" for="V">V. Seluruh Daerah Fasilitas Vital Bandar Udara</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-2 col-sm-12 d-flex align-items-center">
                                <label class="form-label" for="documentation">Documentation <span class="text-danger">*</span></label>
                            </div>
                            <div class="col-lg-10 col-sm-12">
                                <input required multiple placeholder="Enter Here" type="file" name="documentation[]" id="documentation" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-2 col-sm-12">
                                <label class="form-label" for="solution">Solution</label>
                            </div>
                            <div class="col-lg-10 col-sm-12">
                                <textarea placeholder="Enter Here" class="form-control" name="solution" id="solution" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body  table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr class="text-center">
                    <th scope="col">Datetime</th>
                    <th scope="col">Activity</th>
                    <th scope="col">Solution</th>
                    <th scope="col">Departement</th>
                    <th scope="col">Area</th>
                    <th scope="col">Documentation</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data['logbook'] as $log) : ?>
                    <tr class="text-center">
                        <td style="width: 350px !important;"><?= $log['datetime']; ?></td>
                        <td><?= $log['activity']; ?></td>
                        <td class="text-start"><?= $log['solution']; ?></td>
                        <td>Aiport Comunication Center</td>
                        <td>
                            <?php foreach (Database::find('area', 'id', $log['id']) as $key => $val) : ?>
                                <?php if ($key == 'id' || $val == 'off') continue; ?>
                                <?= $key; ?>
                            <?php endforeach; ?></td>
                        <td>
                            <?php $log_id = $log['id'];
                            foreach (Database::query("SELECT * FROM `documentation` WHERE `logbook_id` = '$log_id'") as $dc) : ?>
                                <a href="<?= BASEURL; ?>/files/logbook/<?= $dc['name']; ?>" target="_blank"><img class="border img-fluid" width="60" src="<?= BASEURL; ?>/files/logbook/<?= $dc['name']; ?>"></a>
                            <?php endforeach; ?>
                        </td>
                        <td>
                            <a href="<?= BASEURL; ?>/Logbook/update/<?= $log['id']; ?>" class="btn btn-warning btn-sm mx-1 my-1"><i class="fa fa-edit"></i></a>
                            <a onclick="return confirm('Hapus?')" href="<?= BASEURL; ?>/Logbook/delete/<?= $log['id']; ?>" class="btn btn-danger btn-sm mx-1 my-1"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>