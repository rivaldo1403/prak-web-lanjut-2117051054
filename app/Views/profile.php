<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=base_url("assets/css/style.css")?>">
</head>
<body>
<div class="container-md d-flex justify-content-center align-items-center flex-column">
<img src="<?= $user['foto'] ?? base_url('assets/img/card.jpg') ?>" alt="foto" style="width: 200px; height: 250px; border-radius: 35%;">
    <div class="card mt-3" style="width: 18rem;">
        <ul class="list-group list-group-flush">
            <li class="list-group-item list-group-item-secondary"><?= $user['nama'] ?></li>
            <li class="list-group-item list-group-item-secondary"><?= $user['npm'] ?></li>
            <li class="list-group-item list-group-item-secondary"><?= $user['nama_kelas'] ?></li>
        </ul>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
