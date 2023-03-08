<?php
    $lap = $fungsi->laporan();
    
?>

<div class="container mt-5">
    <a href="admin.php?page=datasiswa">Kembali ke data siswa</a>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama Siswa</th>
            <th>Tanggal Bayar</th>
            <th>Bulan Tahun Bayar</th>
            <th>Jumlah Bayar</th>
        </tr>
        <?php
        $no=1;
        foreach($lap as $d){  ?>

             <tr>
                <td><?= $no++;?></td>
                <td><?= $d['nama']?></td>
                <td><?= $d['tgl_bayar']?></td>
                <td><?= $d['bulan_dibayar']?> - <?= $d['tahun_dibayar']?>
                <td>Rp.<?= number_format($d['jumlah_bayar'],2,',','.')?></td>
                
             </tr>

      <?php  }
        
        ?>
    </table>
</div>

