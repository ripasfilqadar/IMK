
<!DOCTYPE HTML>

<html>
	<head>
		<title>Home | Moment</title>
		
		<!-- Load library -->

		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/reset.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/usefull.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/icon.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/form.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/semantic.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/semantic.min.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/css.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/index.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/main.css" />
		<script type="text/javascript" src="<?php echo base_url()?>assets/javascript/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>assets/javascript/jquery.easing.js"></script>
		<link rel="icon" type="image/x-icon" href="<?php echo base_url('themes/images/logo.jpg');?>">
	    <link rel="stylesheet" href="<?php  echo base_url(); ?>css/metro-bootstrap.css">
	    <link rel="stylesheet" href="<?php  echo base_url(); ?>css/docs.css">
	    <link href="<?php  echo base_url(); ?>js/prettify/prettify.css" rel="stylesheet">
	    <link href="<?php  echo base_url(); ?>css/metro-bootstrap-responsive.css" rel="stylesheet">
	    <script src="<?php  echo base_url(); ?>js/jquery/jquery.min.js"></script>	
	    <script src="<?php  echo base_url(); ?>js/jquery/jquery.widget.min.js"></script>
	    <script src="<?php  echo base_url(); ?>js/prettify/prettify.js"></script>

	    <script src="<?php  echo base_url(); ?>js/metro/metro-hint.js"></script>
	    <script src="<?php  echo base_url(); ?>js/metro/metro-input-control.js"></script>
	    <script src="<?php  echo base_url(); ?>js/metro/metro-button-set.js"></script>
	    <script src="<?php  echo base_url(); ?>js/docs.js"></script>
	    <script src="<?php  echo base_url(); ?>js/jquery/jquery.dataTables.js"></script>
	    <script src="<?php  echo base_url(); ?>js/jquery/jquery.mousewheel.js"></script>
	    <script src="<?php  echo base_url(); ?>js/jquery/jquery.widget.min.js"></script>
	    <script src="<?php  echo base_url(); ?>js/metro.min.js"></script>
	    
	    <script src="<?php  echo base_url(); ?>js/metro/metro-dropdown.js"></script> 	
		<!-- Load CSS & JS-->
		
		<script type="text/javascript" src="<?php echo base_url()?>assets/javascript/script.js"></script>
		
		<!-- Meta Element -->
		<meta name="description" content="Catatuang" />
		<meta name="keywords" content="Pencatat keuangan anda!" />
		<meta charset="UTF-8" />
	</head>
	
	<body>
		<!-- Wrap semua elemen agar berada di tengah -->
		<div class="body wrapper">
			

			<!-- Isi Apps -->
			<section class="main body">
				<div class="ui large menu">
		  <div class="ui grid">
		        <div class="ui inverted fixed menu navbar page grid">
		            <a href="" class="brand item"><b>Moment</b></a> 
		                <div class="right menu">
							<div class="right menu">
							 
                    <a href="" class="item"><i class="user icon"></i><?php echo $this->session->userdata('nama')?></a>
                    <a href="<?php echo base_url()?>login/logout" class="item"><i class="sign out icon"></i>
Log Out</a>
		            </div>
		            </div>
		        </div>
			</div>
		</div>

				<!-- laporan -->
				<section class="laporan">
					<div class="item clearfix">
						<div class="red desc">
							<p class="title">Total Pemasukan</p>
							<button class="positive ui button" style="width:100%; height:40%; margin-top:5%; font-size:20px;" onclick="showdetail()">Detail</button>
						</div>
						<div class="amount">
							Rp. <?php echo $pemasukan[0]['jumlah']?> ,-
						</div>
					</div>
				</section>

				<!-- rekap -->
				<section class="summary">
					<header>
						Record Keuangan
					</header>
					<table>
						<tr >
							<td><strong>Pengeluaran</strong></td>
							<td class="out"></td>
							<td></td>
						</tr>
						<tr>
							<td>Pengeluaran Transportasi</td>
							<td>Rp. <?php echo $pengeluarantransportasi[0]['jumlah']?> ,-</td>
							<td><button class="positive ui button" style="font-size:15px;" onclick="detailpengeluaran(1)">Detail</button></td>
							<td class="out-t"></td>
						</tr>
						<tr>
							<td>Pengeluaran Konsumsi</td>
							<td>Rp. <?php echo $pengeluaranmakan[0]['jumlah']?> ,-</td>
							<td><strong><button class="positive ui button" style=" font-size:15px;" onclick="detailpengeluaran(2)">Detail</button></strong></td>
							<td class="out-k"></td>
						</tr>
						<tr>
							<td>Pengeluaran Hiburan</td>
							<td>Rp. <?php echo $pengeluaranhiburan[0]['jumlah']?> ,-</td>
							<td><strong><button class="positive ui button" style=" font-size:15px;" onclick="detailpengeluaran(3)">Detail</button></strong></td>
							<td class="out-h"></td>
						</tr>
						<tr>
							<td>Pengeluaran Lain-Lain</td>
							<td>Rp. <?php echo $pengeluaranlain[0]['jumlah']?> ,-</td>
							<td><strong><button class="positive ui button" style=" font-size:15px;" onclick="detailpengeluaran(4)">Detail</button></strong></td>
							<td class="out-l"></td>
						</tr>

<!-- 						<tr>
							<td><strong>Pemasukan</strong></td>
							<td class="in"></td>
						</tr> -->
						<tr>
							<td></td>
							<td></td>
						</tr>

						<tr>
							<td><strong class="very">Total</strong></td>
							<td class="total"><?php echo $totalpengeluaran[0]['jumlah'];?></td>
						</tr>
					</table>
				</section>

				<!-- text rekap -->
				<section class="summary-text">
					<form class="ui form">
						<textarea id="summary-text">sad</textarea>
					</form>					
				</section>
			</section>
		</div>

		<!-- menu bawah -->
		<section class="main nav">
			<nav>
				<a href="#" id="pemasukan" class="clearfix"><i class="add sign inverted big icon"></i></a>
				<a href="#" id="pengeluaran" class="clearfix"><i class="minus sign inverted big icon"></i></a>
				<a href="#" id="info" class="clearfix"><i class="info inverted big icon"></i></a>
				<a href="#" id="sumtext" class="clearfix"><i class="list inverted big icon"></i></a>
				<a href="#" id="clearstorage" class="clearfix"><i class="trash inverted big icon"></i></a>
			</nav>
		</section>

		<!-- input masukan/keluaran -->
		<section class="input">
			<div class="wrapper">
				<header class="input header">
					Input Pemasukan / Pengeluaran
				</header>

				<form action="#" method="post" class="ui form" id="FormInputOutput">
					<input type="hidden" name="tipe" value="pengeluaran" />

					<section class="left">
					<div class="field">
						<label style="color: grey;">Penjelasan Singkat</label>
						<input type="text" name="penjelasan" placeholder="penjelasan singkat" />
					</div>

					<div class="field">
						<label style="color: grey;">Jumlah</label>
						<input type="text" name="jumlah" placeholder="contoh : 10000" />
					</div>

					<div class="field" id="category">
						<label style="color: grey;">Kategori</label>
						<label class="title label">Lain-Lain</label>

						<div class="cat button" id="1" ><i class="truck large icon"></i></div>
						<div class="cat button" id="2"><i class="food large icon"></i></div>
						<div class="cat button" id="3"><i class="music large icon"></i></div>
						<div class="cat button active" id="4"><i class="tags large icon"></i></div>

						<input type="hidden" name="kategori" value="4"  />
					</div>

					<div class="field">
						<label style="color: grey;">Tanggal</label>
						<input type="date" name="tanggal" />
					</div>
					</section>

					<section class="right">
					<div class="field">
						<label style="color: grey;">Detail</label>
						<textarea name="detail" placeholder="Detail"></textarea>
					</div>
						<input type="submit" value="Submit" class="submit button" id="submit-input" />
						<input type="reset" value="Cancel" class="cancel button" id="cancel-input" />
					</section>
				</form>
			</div>
		</section>
		<div id="idpemasukan" style="display:none"><span><?php echo base_url()?>catat/pemasukan</span></div>
		<div id="idpengeluaran" style="display:none"><span><?php echo base_url()?>catat/pengeluaran</span></div>
		
<script type="text/javascript">
	function showdetail()
	{
		{
            $.Dialog({
                shadow: true,
                overlay: true,
                draggable: true,
                width: 550,
                height:500,
                padding: 10,
                content: '',
               onShow: function(_dialog){
                    var content = '<div style="width:90%; height:8%"><table class="table striped hovered dataTable" id="dataTables-3"><thead><tr><th class="text-left">Detail</th><th class="text-left">Jumlah</th><th class="text-left">keterangan</th><th class="text-left">Tanggal</th></tr></thead><tbody></tbody></table><button class="default" style="margin-left:200px;width:100px" onclick="$.Dialog.close()">OK</button></div>';
                    $.Dialog.content(content);
                    $.Metro.initInputs();
                }
            });

            $(function(){

                    $('#dataTables-3').dataTable( {
                        "bProcessing": true,
                        "sAjaxSource": "<?php echo base_url()?>page/detailpemasukan",
                        "aoColumns": [
                            { "mData": "detail" },
                            { "mData": "jumlah" },
                            { "mData": "keterangan" },
                            { "mData": "tanggal" }
                        ]
                    } );
                });
        }

	}
</script>
<script type="text/javascript">
	function detailpengeluaran (flag) {
		
		var judul=' ';
		if((flag)==1){ judul="Pengeluaran Transportasi";}
		else if((flag)==2){ judul="Pengeluaran Makanan";}
		else if((flag)==3){ judul="Pengeluaran Hiburan";}
		else if((flag)==4){ judul="Pengeluaran Lain-Lain";}
		{
            $.Dialog({
                shadow: true,
                overlay: true,
                draggable: true,
                width: 550,
                height:500,
                padding: 10,
                

               onShow: function(_dialog){
                    var content = '<div><b><h3 style="text-align:center">'+judul+'</h3></b></div><div style="width:90%; height:8%"><table class="table striped hovered dataTable" id="dataTables-3"><thead><tr><th class="text-left">Detail</th><th class="text-left">Jumlah</th><th class="text-left">keterangan</th><th class="text-left">Tanggal</th></tr></thead><tbody></tbody></table><button class="default" style="margin-left:200px;width:100px" onclick="$.Dialog.close()">OK</button></div>';
                    $.Dialog.content(content);
                    $.Metro.initInputs();
                }
            });

            $(function(){

                    $('#dataTables-3').dataTable( {
                        "bProcessing": true,
                        "sAjaxSource": "<?php echo base_url()?>page/detailpengeluaran/"+flag+"",
                        "aoColumns": [
                            { "mData": "detail" },
                            { "mData": "jumlah" },
                            { "mData": "keterangan" },
                            { "mData": "tanggal" }
                        ]
                    } );
                });
        }

	}
</script>
	</body>
</html>