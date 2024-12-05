<center>
    <h3>Laporan Data</h3>
    <br>
    <table border="1">

    <tr>
        <th>Kode</th>
        <th>Nama</th>
        <th>Pelanggaran</th>
        <th>Bobot_Sekarang</th>
        <th>Bobot_sebelumnya</th>
        <th>Total</th>
        <th>Sanksi</th>
    </tr>
    <?php
    foreach($lat as $r):
        ?>
        <tr>
            <td><?=$r['kode'] ?></td>
            <td><?=$r['nama'] ?></td>
            <td><?=$r['pelanggaran'] ?></td>
            <td><?=$r['bobot_sekarang'] ?></td>
            <td><?=$r['bobot_sebelumnya'] ?></td>
            <td><?=$r['total'] ?></td>
            <td><?=$r['sanksi'] ?></td>
        </tr>
        <?php
        endforeach;
        ?>

    </table>
</center>