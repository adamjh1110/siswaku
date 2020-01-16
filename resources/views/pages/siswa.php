<div id="siswa">
  <h2>Nama Kelompok: <?php echo $siswa->nama_kelompok ?></h2>
  <h2>Jumlah murid: <?php echo $siswa->jumlah_murid ?></h2>
  <h2>Apakah mereka bisa baca: <?php echo $siswa->bisa_baca ?></h2>
  <h2>siswa</h2>

  <?php if (!empty ($siswa->daftar_murid)):?>
    <ul>
      <?php foreach($siswa->daftar_murid as $anak): ?>
        <li><?= $anak ?></li>
      <?php endforeach ?>
    
    </ul>
  <?php else: ?>
    <p> Tidak ada data siswa.</p>
  <?php endif ?>
</div>