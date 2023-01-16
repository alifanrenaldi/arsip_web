<?= $this->extend('templates/template');?>
<?= $this->section('content');?>

<div class="p-4">

<form action="/update/<?=$mahasiswa['id'] ?>" method="POST">
<div class='row'>
    <div class="col-10">
        <div class="form-group">
            <label for="nomor_surat">Nomor Surat</label>
            <input type="text" name="nomor_surat" class="form-control" id="nomor_surat">
        </div>

        <div class="form-group">
            <label for="tangal_surat">Tanggal Surat</label>
            <input type="date" name="tanggal_surat" class="form-control" id="tanggal_surat">
        </div>

        <div class="form-group">
            <label for="tanggal_terima">Tanggal Terima</label>
            <input type="date" name="tanggal_terima" class="form-control" id="tanggal_terima">
        </div>

        <div class="form-group">
            <label for="asal_surat">Asal Surat</label>
            <input type="text" name="asal_surat" class="form-control" id="asal_surat">
        </div>

        <div class="form-group">
            <label for="perihal">Perihal</label>
            <input type="text" name="perihal" class="form-control" id="perihal">
        </div>

        <div class="form-group" >
            <label for="file_surat">File Surat</label>
            <input type="file" name="file_surat" class="form-control" id="file_surat" style="height: auto;">
        </div>

        <div class="form-group">
            <label for="penerima">Penerima</label>
            <input type="text" name="penerima" class="form-control" id="penerima">
        </div>

        <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Submit</button>
    </div>
</div>

</form>

</div>

<?= $this->endSection('content');?>