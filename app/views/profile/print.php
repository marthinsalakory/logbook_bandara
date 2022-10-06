<div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
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
<script>
    print()
</script>