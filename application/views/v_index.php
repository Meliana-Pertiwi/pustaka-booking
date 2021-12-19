<!--index-->
<section>
    <h1><?php echo $judul ?></h1>
    <p align='justify'> Pada pengertian codeigniter diatas tadi dijelaskan bahwa codeigniter mengguanakan metode  MVC.Apa itu MVC? Kita juga harus mengetahui apa itu MVC sebelum masuk dan lebih jauh dalam belajar codeigniter.</p>
    <p> MVC adalah teknik atau konsep yang memisahkan komponen utama menjadi tiga komponen yaitu model, view, dan controller,</p>
        <ol type="a">
        <li>Model</li>
<p align='justify'> Model adalah kelas yang mempresentasikan atau memodelkan tipe data yang akan digunakan oleh aplikasi. Model juga dapat diidefinisikan sebagai bagian penanganan yang berhubungan denganpengolahan atau manipulasi database. Seperti misalnya mengambil data instruksi atau fungsi yang berhubung dengan pengolahan database diletakkan didalam model. Sebagai contoh, jika ingin membuat aplikasi untuk menghitung luas keliling lingkaran,maka dapat dimodelkan objek lingkaran sebagai kelas model.</p>
<p align='justify'> Sebagai catatan, semua model harus disimpan di dalam folder application\models.</p>
<li>View</li>
<p align='justify'> View merupakan bagian yang mengalami halaman user interface atau halaman yang muncul pada user(pada browser). tampilan dari user interface dikumpulkan pada view untuk memisahakannya dengan controller dan model sehingga memudahakan web designer dalam melakukan pengembangan tampilan halaman website.</p>
<li>Controller</li>
<p align='justify'> Controller merupakan kumpulan instruksi aksi yang menghubungkan model dan view. Jadi user tidak akan berhubungan dengan model secara langsung, intinya data yang tersimpan di database(model) diambil oleh controller dan kemudian controller pula yang menapilakan nya ke view. Jadi controller lah yang mengolah  instruksi.</p>
<p align='justify'> Dari penjelasan tentang model viewdan controller diatas dapat disimpulkan bahwa controller sebagai penghubung view dan model. Misalnya pada aplikasi yang menampilkan data dengan menggunakan metode konsep mvc, controller memanggil instruksi pada model yang mengambil data pada databae, kemudian controller yang meneruskannya pada viewuntuk ditampilkan. Jadi jelas sudah dan sangat mudah dalam pengembangan aplikasi dengan cara mvc ini karena
web developer tidakperlu lagi berhubungan dengan controller, dia hanya perlu berhubungan dengan view untuk mendisign tampilan aplikasi, karena back-end developer yang menangani bagian controller dan modelnya. Jadi pembagian tugas pun menjadi mudah dan pengembangan aplikasi dapat dilakukan dengan cepat dan terstruktur,</p>
</section>
