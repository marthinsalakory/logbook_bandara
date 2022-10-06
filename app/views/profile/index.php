<div class="card m-5">
    <div class="card-header">
        <h3>Profile</h3>
    </div>
    <div class="card-body row">
        <div class="col-lg-4 col-sm-12 d-flex justify-content-center mb-5">
            <div class="bg-info border border-2 border-danger" style="height: 440px; width: 290px;">
                <div class="d-flex justify-content-around align-items-center" style="height: 80px; border-bottom: 12px solid #fff;">
                    <img height="50px" src="<?= BASEURL; ?>/assets/img/pesawat.png" alt="">
                    <div class="text-light">
                        <h3 class="fs-5 fw-bold text-light text-center">KANTOR OTORITAS</h3>
                        <h3 class="fs-5 fw-bold text-light text-center">BANDAR UDARA WILAYAH VIII</h3>
                    </div>
                </div>
                <div class="d-flex justify-content-center align-items-center" style="height: 40px; border-bottom: 12px solid #fff;">
                    <h3 class="fs-5 fw-bold text-light">BANDAR UDARA PATTIMURA</h3>
                </div>
                <div class="h-100">
                    <div class="row">
                        <div class="col-7 ms-2">
                            <h2 class="text-light fw-bold">08 OKT 2022</h2>
                            <img height="170px" width="150px" src="<?= BASEURL; ?>/files/profile/<?= Auth::user()->picture; ?>">
                            <p class="text-light mt-1">B AP1. AMQ. 110</p>
                        </div>
                        <div class="col-4">
                            <h3 class="text-light fw-bold text-center mt-2">AREA</h3>
                            <?php $i = 0;
                            foreach (Database::find('area', 'id', Auth::user()->id) as $a => $b) : ?>
                                <?php if ($a == 'id' || $b == 'off') continue;
                                $i++;
                                $area[$i] = $a; ?>
                                <h1 class="text-light fw-bold text-center lh-1"><?= $a; ?></h1>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="row">
                        <h3 class="text-light ms-2"><?= explode(' ', Auth::user()->name)[0] ?></h3>
                        <div class="col-9">
                            <p class="mt-1 lh-base ms-2 text-light">PT. ANGKASA PURA I<br>PKL UNIVERSITAS PATTIMURA</p>
                        </div>
                        <div class="col-3 text-center">
                            <img height="40px" src="<?= BASEURL; ?>/assets/img/kode_qr.jpeg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <form method="POST" enctype="multipart/form-data" class="col-lg-8 col-sm-12">
            <h3 class="fw-bold text-center">DETAIL</h3>
            <hr>
            <div class="row">
                <div class="col-2 d-flex justify-content-end align-items-center">
                    <label class="form-label fw-bold" for="id">ID</label>
                </div>
                <div class="col-10">
                    <input value="<?= Auth::user()->id; ?>" readonly type="text" class="form-control">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-2 d-flex justify-content-end align-items-center">
                    <label class="form-label fw-bold" for="name">Name</label>
                </div>
                <div class="col-10">
                    <input value="<?= Auth::user()->name; ?>" readonly type="text" class="form-control">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-2 d-flex justify-content-end align-items-center">
                    <label class="form-label fw-bold" for="departement">Departement</label>
                </div>
                <div class="col-10">
                    <input value="<?= Auth::user()->departement; ?>" readonly type="text" class="form-control">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-2 d-flex justify-content-end align-items-center">
                    <label class="form-label fw-bold" for="area">Area</label>
                </div>
                <div class="col-10">
                    <input value="<?= implode(',', $area); ?>" readonly type="text" class="form-control">
                </div>
            </div>

            <h3 class="fw-bold text-center mt-3">FORM UPDATE</h3>
            <div class="row mt-3">
                <div class="col-2 d-flex justify-content-end align-items-center">
                    <label class="form-label fw-bold" for="picture">New Picture</label>
                </div>
                <div class="col-10">
                    <input value="<?= Auth::user()->area_id; ?>" name="picture" id="picture" type="file" class="form-control">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-2 d-flex justify-content-end align-items-center">
                    <label class="form-label fw-bold" for="password">New Password</label>
                </div>
                <div class="col-10">
                    <input type="password" name="password" id="password" class="form-control">
                </div>
            </div>
            <div class="row mt-4 text-center">
                <div class="col-12">
                    <a href="<?= BASEURL; ?>/Profile/print" target="_blank" class="btn btn-success"><i class="fa fa-print"></i> Print</a>
                    <button class="btn btn-primary"><i class="fa fa-save"></i> Save Change</button>
                </div>
            </div>
        </form>
    </div>
</div>