<main class="mn-inner">
    <div class="row">
        <div class="col s12">
            <div class="page-title"><?= $title; ?></div>
        </div>
        <div class="col s12 m4">
            <div class="card horizontal">
                <div class="card-image" style="padding: 10px;">
                    <img src="<?= base_url('tmplt/assets/img/user/') . $user['image']; ?>">
                </div>
                <div class="card-stacked">
                    <div class="card-content">
                        <p><?= $user['username']; ?></p>
                        <p><?= $user['email']; ?></p>
                    </div>
                    <div class="card-action">
                        <p>
                            <small>Member since <?= date('d F Y', $user['date_created']); ?></small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 m8"></div>
    </div>
</main>