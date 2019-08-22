<main class="mn-inner">
    <div class="row">
        <div class="col s12">
            <div class="page-title">Form Edit Kegiatan</div>
        </div>
        <div class="col s12 m12 12">
            <div class="card">
                <div class="card-content">
                    <div class="row">
                        <form class="col s12" action="" method="post">
                            <input type="hidden" name="id_keg" value="<?= $kegiatan['id_keg']; ?>">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="text" name="nama_keg" class="validate" value="<?= $kegiatan['nama_keg']; ?> ">
                                    <label for="nama_sub" class="">Nama Kegiatan</label>
                                    <small style="color:red;"><?= form_error('nama_keg'); ?></small>
                                    <select class="js-states browser-default" name="id_sub" tabindex="-1" style="width: 100%" id="basic">
                                        <optgroup label="Sub Kategori">
                                            <?php foreach ($sub_kategori as $s) : ?>
                                                <?php if ($s['id_sub'] == $kegiatan['id_sub']) : ?>
                                                    <option value="<?= $s['id_sub']; ?>" selected><?= $s['nama_sub']; ?></option>
                                                <?php else : ?>
                                                    <option value="<?= $s['id_sub']; ?>"><?= $s['nama_sub']; ?></option>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </optgroup>
                                    </select>
                                    <br><br>
                                    <select class="js-states browser-default" name="id_lok" tabindex="-1" style="width: 100%" id="basic">
                                        <optgroup label="Lokasi">
                                            <?php foreach ($lokasi as $s) : ?>
                                                <?php if ($s['id_lok'] == $kegiatan['id_lok']) : ?>
                                                    <option value="<?= $s['id_lok']; ?>" selected><?= $s['nama_lok']; ?></option>
                                                <?php else : ?>
                                                    <option value="<?= $s['id_lok']; ?>"><?= $s['nama_lok']; ?></option>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" name="Edit" class="waves-effect waves-light btn indigo m-b-xs">Edit Data</button>
                            <a href="<?= base_url(); ?>admin/kegiatan" class="waves-effect waves-red btn-flat m-b-xs">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>