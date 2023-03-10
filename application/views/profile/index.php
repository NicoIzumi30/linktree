<div class="right_col" role="main">

    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

        <div class="row">
            <div class="col-lg-6">
                <?= $this->session->flashdata('message'); ?>
            </div>
        </div>
        <div class="row p-3">
            <div class="card mb-3 col-lg-6">
                <div class="row g-0 p-3">
                    <div class="col-md-3 my-auto text-center">
                        <img src="<?= base_url() ?>assets/image/profile/<?= $user['image'] ?>" class="img-fluid rounded-start" style="height: 100px; " alt="...">
                    </div>
                    <div class="col-md-9 ">
                        <div class="card-body">
                            <table class="text-dark mt-2">
                                <tr>
                                    <td>Nama</td>
                                    <td> : </td>
                                    <td><?= $user['name']; ?></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td> : </td>
                                    <td><?= $user['email']; ?></td>
                                </tr>
                                <tr>
                                    <td>Username</td>
                                    <td> : </td>
                                    <td><?= $user['username']; ?></td>
                                </tr>
                                <tr>
                                    <td>Deskripsi</td>
                                    <td> : </td>
                                    <td><?= $user['deskripsi']; ?></td>
                                </tr>
                                <tr>
                                    <td>Bergabung sejak</td>
                                    <td> : </td>
                                    <td><?= date("d-M-Y", $user['date_created']) ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>