<main class="mn-inner">
    <div class="row">
        <div class="col s12">
            <div class="page-title">Tabel Lokasi</div>
        </div>
        <div class="col s12">
            <hr>
        </div>
        <div class="col s12">
            <a href="<?= base_url(); ?>admin/lokasi/Tambah" class="waves-effect waves-light btn indigo m-b-xs">Tambah Lokasi</a>
        </div>
        <div class="col s12 m12 l12">
            <div class="card">
                <div class="card-content">
                    <?php if ($this->session->flashdata('lok')) : ?>
                        <div class="chip" style="background-color: #c5ffc5;">
                            Data lokasi berhasil <?= $this->session->flashdata('lok'); ?>
                            <i class="close material-icons">close</i>
                        </div>
                    <?php endif; ?>
                    <table id="example" class="display responsive-table datatable-example">
                        <thead>
                            <tr>
                                <th>No </th>
                                <th>ID </th>
                                <th>Nama Lokasi</th>
                                <th>Tools</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 0;
                            foreach ($lokasi as $lks) :
                                $no++;
                                ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= $lks['id_lok']; ?></td>
                                    <td><?= $lks['nama_lok']; ?></td>
                                    <td>
                                        <a href="<?= base_url(); ?>admin/lokasi/detail/<?= $lks['id_lok']; ?>" class="waves-effect waves-light btn blue m-b-xs" style="padding-right: 15px;box-shadow: 0 black;height: 28px;width: 10px;padding-top: 0px;padding-bottom: 6px;padding-left: 8px;">
                                            <i class="Tiny material-icons">description</i>
                                        </a>
                                        <a href="<?= base_url(); ?>admin/lokasi/edit/<?= $lks['id_lok']; ?>" class="waves-effect waves-light btn green m-b-xs" style="margin-left: 5px;padding-right: 15px;box-shadow: 0 black;height: 28px;width: 10px;padding-top: 0px;padding-bottom: 6px;padding-left: 8px;">
                                            <i class="Tiny material-icons">mode_edit</i>
                                        </a>
                                        <a href="<?= base_url(); ?>admin/lokasi/hapus/<?= $lks['id_lok']; ?>" class="waves-effect waves-light btn red m-b-xs" onclick="return confirm('Hapus data?');" style="margin-left: 5px;padding-right: 15px;box-shadow: 0 black;height: 28px;width: 10px;padding-top: 0px;padding-bottom: 6px;padding-left: 8px;">
                                            <i class="Tiny material-icons">delete</i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>