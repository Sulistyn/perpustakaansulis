<h1 class="mt-4">Ubah Kategori Buku</h1>
<br>
<div class="card">
	<div class="card-body">
		<div class="row">
	<div class="col-md-12">
		<form class="form-group" action="" method="post">
			<?php 
			$id = $_GET['id'];
			if (isset($_POST["submit"])) {
				$kategori = $_POST['kategori'];
				$query = mysqli_query($koneksi, "UPDATE kategori set kategori='$kategori' WHERE id_kategori=$id");

				if($query){
					echo "
					<script>
					alert('Ubah data berhasil.');

					</script>
					";
				}
				else{
					echo "
					<script>
					alert('Ubah data gagal.');

					</script>
					";
				}
			}
				
				$query = mysqli_query($koneksi, "SELECT*FROM kategori WHERE id_kategori=$id");
				$data = mysqli_fetch_array($query);

			 ?>

			<div class="row mb-3">
				<div class="col-md-2">Nama Kategori</div>
				<div class="col-md-8"><input type="text" value="<?php echo $data['kategori']; ?>" class="form-control" name="kategori" required=""></div>
			</div>
		<div class="row">
			<div class="col-md-2">	</div>
			<div class="col-md-8">
			<button type="submit" class="btn btn-primary" name="submit" value="submit">Simpan</button>
			<button type="reset" class="btn btn-secondary">Reset</button>
			<a href="?page=kategori" class="btn btn-danger">Kembali</a>
			</div>	
		</div>
		</form>
	</div>	
</div>
	</div>
</div>