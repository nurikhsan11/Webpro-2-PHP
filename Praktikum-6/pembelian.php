<?php
require_once 'dbkoneksi.php';
?>
<?php
$sql = "SELECT * FROM pembelian";
$rs = $dbh->query($sql);
?>

<h1 class="mt-4">Pembelian</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
    <li class="breadcrumb-item active">Tables</li>
</ol>
<div class="card mb-4">
    <div class="card-body">
        DataTables is a third party plugin that is used to generate the demo table below. For more
        information about DataTables, please visit the
        <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
        .
    </div>
</div>
<div class="card mb-4">
    <div class="card-header">
        <!-- <i class="fas fa-table me-1"></i> -->
        <a class="btn btn-success" href="index.php?hal=form_beli">Create Pembelian</a>
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Nomor</th>
                    <th>Produk ID</th>
                    <th>jumlah</th>
                    <th>harga</th>
                    <th>Vendor ID</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Nomor</th>
                    <th>Produk ID</th>
                    <th>jumlah</th>
                    <th>harga</th>
                    <th>Vendor ID</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
                <?php
                $nomor  = 1;
                foreach ($rs as $row) {
                ?>
                    <tr>
                        <td><?= $nomor ?></td>
                        <td><?= $row['tanggal'] ?></td>
                        <td><?= $row['nomor'] ?></td>
                        <td><?= $row['produk_id'] ?></td>
                        <td><?= $row['jumlah'] ?></td>
                        <td><?= $row['harga'] ?></td>
                        <td><?= $row['vendor_id'] ?></td>
                        <td>
                            <a class="btn btn-primary" href="view-beli.php?id=<?= $row['id'] ?>">View</a>
                            <a class="btn btn-primary" href="form_beli.php?idedit=<?= $row['id'] ?>">Edit</a>
                            <a class="btn btn-primary" href="delete_pembelian.php?iddel=<?= $row['id'] ?>" onclick="if(!confirm('Anda Yakin Hapus Data Pembelian <?= $row['nama'] ?>?')) {return false}">Delete</a>
                        </td>
                    </tr>
                <?php
                    $nomor++;
                }
                ?>
            </tbody>
        </table>
    </div>
</div>