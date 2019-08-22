<main class="mn-inner">
    <div class="row">
        <div class="col s12">
            <div class="page-title">Tabel Kategori</div>
        </div>
        <div class="col s12">
            <hr>
        </div>
        <div class="col s12">
            <a href="<?= base_url(); ?>admin/kategori/Tambah" class="waves-effect waves-light btn indigo m-b-xs">Tambah Kategori</a>
        </div>
        <div class="col s12 m12 l12">
            <div class="card">
                <div class="card-content">
                    <div class="flash" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
                    <table id="example" class="display responsive-table datatable-example">
                        <thead>
                            <tr>
                                <th>No </th>
                                <th>ID </th>
                                <th>Nama Kategori</th>
                                <th>Tools</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 0;
                            foreach ($kategori as $ktg) :
                                $no++;
                                ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= $ktg['id_kat']; ?></td>
                                    <td><?= $ktg['nama_kat']; ?></td>
                                    <td>
                                        <a href="<?= base_url(); ?>admin/kategori/edit/<?= $ktg['id_kat']; ?>" class="waves-effect waves-light btn green m-b-xs" style="margin-left: 5px;padding-right: 15px;box-shadow: 0 black;height: 28px;width: 10px;padding-top: 0px;padding-bottom: 6px;padding-left: 8px;">
                                            <i class="Tiny material-icons">mode_edit</i>
                                        </a>
                                        <a href="<?= base_url(); ?>admin/kategori/hapus/<?= $ktg['id_kat']; ?>" class="waves-effect waves-light btn red m-b-xs hapus" style="margin-left: 5px;padding-right: 15px;box-shadow: 0 black;height: 28px;width: 10px;padding-top: 0px;padding-bottom: 6px;padding-left: 8px;">
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