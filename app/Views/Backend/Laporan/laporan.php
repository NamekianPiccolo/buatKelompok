<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Laporan</li>
        </ol>
    </div><!--/.row-->
    
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Laporan Perpustakaan</h1>
        </div>
    </div><!--/.row-->
            
    <div class="row">
        <!-- Card Laporan Anggota -->
        <div class="col-xs-12 col-md-6 col-lg-4">
            <div class="panel panel-blue panel-widget">
                <div class="row no-padding">
                    <div class="col-sm-3 col-lg-5 widget-left">
                        <em class="glyphicon glyphicon-user glyphicon-l"></em>
                    </div>
                    <div class="col-sm-9 col-lg-7 widget-right">
                        <div class="large">Anggota</div>
                        <div class="text-muted">Data Laporan Anggota</div>
                        <a href="<?= base_url('admin/laporan-anggota') ?>" class="btn btn-primary btn-sm" style="margin-top: 10px;">Buka Laporan</a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Card Laporan Buku -->
        <div class="col-xs-12 col-md-6 col-lg-4">
            <div class="panel panel-orange panel-widget">
                <div class="row no-padding">
                    <div class="col-sm-3 col-lg-5 widget-left">
                        <em class="glyphicon glyphicon-book glyphicon-l"></em>
                    </div>
                    <div class="col-sm-9 col-lg-7 widget-right">
                        <div class="large">Buku</div>
                        <div class="text-muted">Data Laporan Buku</div>
                        <a href="<?= base_url('admin/laporan-buku') ?>" class="btn btn-warning btn-sm" style="margin-top: 10px;">Buka Laporan</a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Card Laporan Transaksi -->
        <div class="col-xs-12 col-md-6 col-lg-4">
            <div class="panel panel-teal panel-widget">
                <div class="row no-padding">
                    <div class="col-sm-3 col-lg-5 widget-left">
                        <em class="glyphicon glyphicon-transfer glyphicon-l"></em>
                    </div>
                    <div class="col-sm-9 col-lg-7 widget-right">
                        <div class="large">Transaksi</div>
                        <div class="text-muted">Peminjaman &amp; Pengembalian</div>
                        <a href="<?= base_url('admin/laporan-transaksi') ?>" class="btn btn-success btn-sm" style="margin-top: 10px;">Buka Laporan</a>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/.row-->
</div><!--/.main-->
