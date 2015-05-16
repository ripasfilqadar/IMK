{
  "aaData": [
    <?php  $in_cart = array(); $i=1; $total = count($detailpemasukan);  foreach($detailpemasukan as $row) : ?>
		{
		  "detail": "<?php echo $row['DETAIL']?>",
		  "jumlah": "<?php  echo $row['JUMLAH']; ?>",
		  "keterangan": "<?php  echo $row['KETERANGAN']; ?>",
		  "tanggal": "<?php echo $row['TANGGAL']?>"
		}<?php  if($i<$total) { echo ","; $i++; } ?>
	<?php  endforeach; ?>
  ]
}