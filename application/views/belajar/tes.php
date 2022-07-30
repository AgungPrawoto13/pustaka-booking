<table>
	<?php
		foreach($data as $buku) :?>
			<tr>
				<td>nama buku = <?php $judul=$buku->judul_buku; echo $judul;?></td>
			</tr>
		<?php endforeach ?>
	?>
</table>
<?php

var_dump($data);
?>

<a href="https://api.whatsapp.com/send?phone=+6285711866400&text=Haloo saya berniat memesan prodak <?php echo $buku->judul_buku;?>" target="blank" class="my-cart-b item_add">Pesan Sekarang</a>
