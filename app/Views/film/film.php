<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<div class="container">

<div class="row">
    <div class="col-md-6">
    <h1>Data Film</h1>
</div>


<div class="col-md-6 text-end">
    <a href="/film/add" class="btn btn-primary">Tambahkan Data Film</a>
</div>
</div>


<table class="table">
    <thead>
        <tr>
            <th scope="col">Cover</th>
            <th scope="col">Nama Film</th>
            <th scope="col">Genre</th>
            <th scope="col">Durasi</th>
            <th scope="col">Action</th>
        </tr>
    </thead>

    <tbody>
    <?php foreach ($semuafilm as $film) : ?>
        <tr>
            <td><img src="/assets/cover/<?= $film['cover'] ?>" alt="Cover Film" style="width: 100px;"></td>
            <td><?= $film['nama_film'] ?></td>
            <td><?= $film['nama_genre'] ?></td>
            <td><?= $film['duration'] ?></td>
            <td>
                <a href="/film/update/<?= encryptUrl($film["id"]); ?>" class="btn btn-success">Update</a>
                <a class="btn btn-danger" onclick="return confirmDelete(<?= $film['id'] ?>)">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
    </table>
</div>

<script>
    function confirmDelete(idfilm) {
        swal({
                title: "Apakah Anda yakin?",
                text: "setelah dihapus! data anda akan benar-benar hilang!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {

                    window.location.href = "/film/destroy/<?= encryptUrl($film['id']) ?>";


                } else {
                    swal("Data tidak jadi dihapus!");
                }
            });
    }
</script>
 

<?= $this->endSection() ?>