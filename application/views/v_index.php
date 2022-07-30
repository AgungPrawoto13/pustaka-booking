<section>
	<h1><?php echo $judul ?></h1>
	<p align='justify'>Pada pengertian codeigniter di atas tadi di jelaskan bahwa codeigniter menggunakan metode MVC. Apa itu MVC? kita juga harus mengetahui apa otu MVC sebelum masuk dan lebih jauh dalam belajar codeigniter.</p>
	<p>MVC adalah teknik atau konsep yang memisahkan komponen utama menjadi tiga komponen yaitu model, view dan controller.</p>

	<ol type="a">
		<li>Model</li>
		<p align='justify'>Model adalah kelas yang mempresentasikan atau memodelkan tipe data yang akan di gunakan oleh aplikasi. model juga dapat didefinisikan sebagai bagian penanganan yang berhubungan dengan pengolahan atau manipulasi database. seperti misalnya mengambil data dari database, menginput dan pengolahan database lainya. semua intruksi atau fungsi yang berhubungan dengan pengolahan database di letakan didalam model. sebagai contoh, jika ingin membuat aplikasi untuk menghitung luas dan keliling lingkaran, maka dapat memodelkan objek lingkaran sebagai kelas model.</p>
		<p align='justify'>sebagai catatn, semua model harus disimpan di dalam folder application\models</p>
		<li>View</li>
		<p align='justify'>View merupakan bagian yang menangani halaman user interface atau halaman uang muncul pada user (pada browser). tampilan dari user interface di kumppulkan pada view untuk memisahkanya dengan controller dan model sehingga memudahkan web designer dalam melakukan pengembangan tampilan halaman website.</p>
		<li>Controller</li>
		<p align='justify'>dari penjelasan tentang model view dan controller di atas dapat disimpulkan bahwa controller sebagai penghubung view dan model. misalnya pada aplikasi yang menampilkan data dengan menggunakan metode konsep mvc, controller memanggil intruksi pada model yang mengambil data pada database, kemudian controller yang meneruskanya pada view untuk di tampilakan. jadi jelas sudah dan sangat mudah dalam pengembangan aplikasi dengan cara mvc ini jarena web designer atau front-end developer tidak perlu lagi berhubungan dengan controller, dia hanya perli berhubungan dengan iew untuk mendesign tampilan aplikasi, karena back-end developer yang mangani bagian controller dan modelnya. jadi pembagian tugas pun menjadi mudah dan pengembangan aplikasi dapat dilakukan dengan cepat dan terstruktur.</p> 
	</ol>
</section>