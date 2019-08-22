<main class="mn-inner">
    <div class="row">
        <div class="col s12">
            <div class="page-title"><?= $title; ?></div>
        </div>
        <div class="row">
            <div class="col s12">
                <?= $this->session->flashdata('message'); ?>
            </div>
        </div>
        <div class="col s12 m5">
            <div class="card horizontal">
                <div class="card-image" style="padding: 10px;">
                    <img src="<?= base_url('tmplt/assets/img/user/') . $user['image']; ?>">
                </div>
                <div class="card-stacked">
                    <div class="card-content">
                        <p><?= $user['username']; ?></p>
                        <p><?= $user['email']; ?></p>
                        <br><br><br>
                        <small>Since <?= date('d F Y', $user['date_created']); ?></small>
                    </div>
                    <div class="card-action">
                        <a href="#">Edit</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 m8"></div>
    </div>
</main>