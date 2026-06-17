	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<ul class="nav menu">
			<li class="<?= (isset($title) && $title == 'dashboard') ? 'active' : '' ?>">
				<a href="<?= base_url('admin/dashboard-admin') ?>"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>
			
			<li class="parent <?= (isset($title) && in_array($title, ['Admin', 'Anggota', 'Kategori', 'Rak', 'Buku'])) ? 'active' : '' ?>">
				<a href="#sub-item-1" data-toggle="collapse" aria-expanded="<?= (isset($title) && in_array($title, ['Admin', 'Anggota', 'Kategori', 'Rak', 'Buku'])) ? 'true' : 'false' ?>">
					<span class="glyphicon glyphicon-list"></span> Master Data 
					<span class="icon pull-right"><em class="glyphicon glyphicon-s <?= (isset($title) && in_array($title, ['Admin', 'Anggota', 'Kategori', 'Rak', 'Buku'])) ? 'glyphicon-minus' : 'glyphicon-plus' ?>"></em></span>
				</a>
				<ul class="children collapse <?= (isset($title) && in_array($title, ['Admin', 'Anggota', 'Kategori', 'Rak', 'Buku'])) ? 'in' : '' ?>" id="sub-item-1">
					<li>
						<a class="" href="<?= base_url('admin/master-data-admin') ?>">
							<span class="glyphicon glyphicon-share-alt"></span> Data Admin
						</a>
					</li>
					<li>
						<a class="" href="<?= base_url('admin/master-data-anggota') ?>">
							<span class="glyphicon glyphicon-share-alt"></span> Data Anggota
						</a>
					</li>
					<li>
						<a class="" href="<?= base_url('admin/master-data-kategori') ?>">
							<span class="glyphicon glyphicon-share-alt"></span> Data Kategori
						</a>
					</li>
					<li>
						<a class="" href="<?= base_url('admin/master-data-rak') ?>">
							<span class="glyphicon glyphicon-share-alt"></span> Data Rak
						</a>
					</li>
					<li>
						<a class="" href="<?= base_url('admin/master-data-buku') ?>">
							<span class="glyphicon glyphicon-share-alt"></span> Data Buku
						</a>
					</li>
				</ul>
			</li>

			<li class="parent <?= (isset($title) && in_array($title, ['Peminjaman', 'Pengembalian'])) ? 'active' : '' ?>">
				<a href="#sub-item-2" data-toggle="collapse" aria-expanded="<?= (isset($title) && in_array($title, ['Peminjaman', 'Pengembalian'])) ? 'true' : 'false' ?>">
					<span class="glyphicon glyphicon-random"></span> Transaksi 
					<span class="icon pull-right"><em class="glyphicon glyphicon-s <?= (isset($title) && in_array($title, ['Peminjaman', 'Pengembalian'])) ? 'glyphicon-minus' : 'glyphicon-plus' ?>"></em></span>
				</a>
				<ul class="children collapse <?= (isset($title) && in_array($title, ['Peminjaman', 'Pengembalian'])) ? 'in' : '' ?>" id="sub-item-2">
					<li>
						<a class="" href="<?= base_url('admin/data-transaksi-peminjaman') ?>">
							<span class="glyphicon glyphicon-share-alt"></span> Peminjaman
						</a>
					</li>
					<li>
						<a class="" href="<?= base_url('admin/data-transaksi-pengembalian') ?>">
							<span class="glyphicon glyphicon-share-alt"></span> Pengembalian
						</a>
					</li>
				</ul>
			</li>

			<li role="presentation" class="divider" style="position: absolute; bottom: 90px; width: 100%; margin: 0;"></li>
			<li style="position: absolute; bottom: 50px; width: 100%;"><a href="<?= base_url('admin/logout-admin') ?>"><span class="glyphicon glyphicon-user"></span> Logout</a></li>
		</ul>
		<div class="attribution">Template by <a href="http://www.medialoot.com/item/lumino-admin-bootstrap-template/">Medialoot</a></div>
	</div><!--/.sidebar-->
