<main class="mn-inner">
    <div class="row">
        <div class="col s12">
            <div class="page-title">Detail Lokasi</div>
        </div>
        <div class="col s12 m12 12">
            <div class="card large">
                <div class="card-image">
                    <div id="googleMap" style="width:100%;height:380px;"></div>
                    <span class="card-title"></span>
                </div>
                <div class="card-content">
                    <p><?= $lokasi['id_lok']; ?></p>
                    <h4><?= $lokasi['nama_lok']; ?></h4>
                </div>
                <div class="card-action">
                    <a href="<?= base_url(); ?>admin/lokasi">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</main>