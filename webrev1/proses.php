<?php
	include 'config/database.php';

	$mysqli = new mysqli('localhost','root','','perpustakaan');

	if(isset($_POST['submit-login'])){
		if($objek->login($_POST['username'], $_POST['password'])){
			header("LOCATION:admin.php");
		}
		else{
			echo ("<script LANGUAGE='JavaScript'>
		    window.alert('Kombinasi username & password tidak ditemukan');
		    window.location.href='login.php';
		    </script>");
		}	
	}



	if(isset($_POST['save'])) {
		$nomor = $_POST['nomor'];
		$jenis = $_POST['jenis'];
		$nama = $_POST['nama'];
		$pengarang = $_POST['pengarang'];
		$penerbit = $_POST['penerbit'];
		$tahun = $_POST['tahun'];
		$jumlah = $_POST['jumlah'];
		$foto = $_POST['foto'];

		$mysqli->query("INSERT into buku (no_buku, jenis_buku, nama_buku, pengarang, penerbit, tahun_terbit, jumlah, foto) VALUES ('$nomor','$jenis','$nama','$pengarang','$penerbit','$tahun','$jumlah','foto')") or die($mysqli -> eror);
		echo ("<script LANGUAGE='JavaScript'>
			    window.alert('Succesfully Save');
			    window.location.href='admin.php?page=buku';
			    </script>");

	}

	if(isset($_GET['delete'])) {
		$nomor = $_GET['delete'];
		$mysqli -> query("DELETE from buku where no_buku=$nomor") or die($mysqli->error());
		header("LOCATION:admin.php?page=buku");
	}

	if(isset ($_POST['edit'])) {
		if($objek->UPDATE('buku', $_POST['data'], "no_buku", $_POST['data']['no_buku'])){
			echo ("<script LANGUAGE='JavaScript'>
			    window.alert('Succesfully Updated');
			    window.location.href='admin.php?page=buku';
			    </script>");
		}else{
			echo ("<script LANGUAGE='JavaScript'>
			    window.alert('Failed to update');
			    window.location.href='admin.php?page=buku';
			    </script>");
		}
	}
?>