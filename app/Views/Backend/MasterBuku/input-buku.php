<?php
/**
 * @var string $id_buku
 * @var array $kategori
 * @var array $rak
 */
?>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li>Master Data</li>
				<li class="active">Tambah Data Buku</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Tambah Data Buku</h1>
			</div>
		</div><!--/.row-->
				
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Form Tambah Buku</div>
					<div class="panel-body">
						<form role="form" action="<?= base_url('admin/simpan-data-buku') ?>" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>ID Buku</label>
                                <input class="form-control" name="id_buku" value="<?= $id_buku ?>" readonly style="background:#f5f5f5;">
                            </div>
                            <div class="form-group">
                                <label>Judul Buku</label>
                                <input class="form-control" name="judul_buku" required autofocus>
                            </div>
                            <div class="form-group">
                                <label>Pengarang</label>
                                <input class="form-control" name="pengarang" required>
                            </div>
                            <div class="form-group">
                                <label>Penerbit</label>
                                <input class="form-control" name="penerbit" required>
                            </div>
                            <div class="form-group">
                                <label>Tahun</label>
                                <input class="form-control" name="tahun" required onkeypress="return goodchars(event, '0123456789', this)">
                            </div>
                            <div class="form-group">
                                <label>Jumlah Eksemplar</label>
                                <input class="form-control" name="jumlah_eksemplar" type="number" required>
                            </div>
                            <div class="form-group">
                                <label>Kategori Buku</label>
                                <select class="form-control" name="id_kategori" required>
                                    <option value="">- Pilih Kategori -</option>
                                    <?php foreach($kategori as $k): ?>
                                    <option value="<?= $k['id_kategori'] ?>"><?= esc($k['nama_kategori']) ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Rak</label>
                                <select class="form-control" name="id_rak" required>
                                    <option value="">- Pilih Rak -</option>
                                    <?php foreach($rak as $r): ?>
                                    <option value="<?= $r['id_rak'] ?>"><?= esc($r['nama_rak']) ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Keterangan</label>
                                <textarea class="form-control" name="keterangan" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Cover Buku</label><br>
                                <div id="cover-preview-container">
                                    <img id="img-preview" style="max-width: 100%; max-height: 400px; display: none; margin-bottom: 10px;" class="img-thumbnail">
                                </div>
                                <input type="file" name="cover_buku" id="cover_buku" accept="image/png, image/jpeg, image/jpg" onchange="previewImage(this)">
                                <p class="help-block" style="font-size: 11px; color: #888; margin-top: 5px;">Format file yang diizinkan : jpg, jpeg, png Maksimal ukuran 1 MB</p>
                            </div>
                            <div class="form-group">
                                <label>E-Book</label><br>
                                <div id="ebook-preview-container">
                                    <iframe id="pdf-preview" width="100%" height="300px" style="border: 1px solid #ccc; margin-bottom: 10px; display: none;"></iframe>
                                </div>
                                <input type="file" name="e_book" id="e_book" accept="application/pdf" onchange="previewPdf(this)">
                                <p class="help-block" style="font-size: 11px; color: #888; margin-top: 5px;">Format file yang diizinkan : pdf Maksimal ukuran 10 MB</p>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan Data</button>
                            <a href="<?= base_url('admin/master-data-buku') ?>" class="btn btn-default">Batal</a>
                        </form>
					</div>
				</div>
			</div>
		</div><!--/.row-->	
	</div><!--/.main-->

    <script type="text/javascript">
        function previewImage(input) {
            const file = input.files[0];
            if (file) {
                const preview = document.getElementById('img-preview');
                preview.src = URL.createObjectURL(file);
                preview.style.display = 'block';
            }
        }

        function previewPdf(input) {
            const file = input.files[0];
            if (file) {
                const preview = document.getElementById('pdf-preview');
                preview.src = URL.createObjectURL(file);
                preview.style.display = 'block';
            }
        }
    </script>
