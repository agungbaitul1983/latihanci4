<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<?php if (session()->get('role') == 'admin') : ?>
<h1>Data Siswa</h1>
<table class="table-bordered table-striped">
  <tr>
    <td>Nama</td>
    <td>NIS</td>
    <td>Tanggal Lahir</td>
  </tr>
  <tr>
    <td>Andi Saputra</td>
    <td>101</td>
    <td>2003-12-22</td>
  </tr>
  <tr>
    <td>Budi Cahya</td>
    <td>102</td>
    <td>2004-01-30</td>
  </tr>
</table>
<?php else : ?>
<div class="alert alert-danger" role="alert">
  Anda tidak memliki akses untuk melihat data
</div>
<?php endif; ?>
<?= $this->endSection(); ?>