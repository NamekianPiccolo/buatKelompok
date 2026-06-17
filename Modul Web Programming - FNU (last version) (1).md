# MODUL
WEB PROGRAMMING
```
PENYUSUN :
```
FUAD NUR HASAN, M.KOM
UNIVERSITAS BINA SARANA INFORMATIKA
FAKULTAS TEKNIK DAN INFORMATIKA
```
PROGRAM STUDI INFORMATIKA (S1)
```
JAKARTA
2024
KATA PENGANTAR
Segala puji syukur kepada Tuhan Yang Maha Esa karena berkat rahmatNya penulisan
modul Mata Kuliah Web Programming dapat terselesaikan dengan baik. Modul ini disusun
untuk memenuhi kebutuhan mahasiswa dalam mata kuliah Web Programming yang disajikan
dalam bentuk praktikum dan diharapkan dapat membekali mahasiswa dalam memahami
Pembuatan web dengan menggunakan Framework Codeigniter 4 dan bootstrap.
Modul web Programming materi bahasan dibatasi sampai dengan halaman Administrator
```
(Back-End). Diakhir perkuliahan mahasiswa diharapkan mampu mengimplementasikannya
```
dalam bentuk final project yang harus dipresentasikan sebagai syarat kelulusan mata kuliah
Web Programming. Teknik penyajiannya dilakukan secara terpadu dan sistematis.
Seperti layaknya sebuah modul, maka pembahasan dimulai dengan menjelaskan target
pembelajaran yang hendak dicapai. Dengan demikian pengguna modul ini secara mandiri dapat
mengukur tingkat ketuntasan yang dicapainya.
Penulis menyadari sepenuhnya bahwa modul ini tentu memiliki banyak kekurangan.
Untuk itu penulis dengan lapang dada menerima masukan dan kritik yang konstruktif dari
berbagai pihak demi kesempurnaannya di masa yang akan datang. Semoga modul ini dapat
bermanfaat bagi para pembaca.
Jakarta, September 2024
Tim Penulis
BAB I
PENJELASAN KONTRAK PERKULIAHAN,
PENEGASAN TUGAS DAN INSTALASI
A. Deskripsi Pembelajaran
Pada bab ini akan dibahas mengenai kontrak perkuliahan selama satu semester kedepan,
kontrak perkuliahan ini disepakati antara dosen dan mahasiswa sehingga perkuliahan dapat
berjalan dengan lancar dan sesuai dengan target capaian yang telah ditetapkan oleh program
studi. Dalam bab ini juga akan menjelaskan terkait penugasan dan pembagian kelompok
mahasiswa dalam penyelesaian final project yang nantinya akan dipresentasikan sebagai nilai
dari mata kuliah web programming ini. Setelah itu mahasiswa diminta untuk melakukan
instalasi software pendukung dan text editor pendukung yang sesuai dengan selera mahasiswa.
B. Tujuan Pembelajaran
Dalam bab ini tujuan pembelajaran utama sebagai berikut :
1. Mahasiswa memahami dan menyepakati kontrak kuliah yang telah ditentukan
bersama.
2. Mahasiswa memahami bentuk tugas dan final project yang telah dibagikan
3. Mahasiswa telah selesai melakukan instalasi software pendukung dan dapat
berfungsi dengan baik.
C. Kontrak Perkuliahan
Kontrak perkuliahan dalam mata kuliah web programming adalah sebagai berikut :
1. Mata kuliah web programming merupakan mata kuliah PBL (Project Based
```
Learning) sehingga nilai mata kuliah akan diambil dari presentasi final project yang
```
akan dilakukan pada pertemuan ke-13 sampai dengan pertemuan ke-15 sesuai
dengan RPS yang telah diterbitkan.
2. Keterlambatan Maksimal 15 Menit.
3. Pakaian bebas, pantas, rapi.
4. Perkuliahan Wajib membawa Laptop yang sudah terinstal software pendukung.
5. Mengisi absensi via MyBest. Absensi akan di kroscek di akhir pertemuan.
6. Mengisi umpan balik (penilaian pembelajaran) via MyBest.
7. Persentase kehadiran minimal 80%. Jika kurang dari 80% maka nilai tidak diberikan.
D. Pembagian Tugas (Final Project)
Adapun ketentuan untuk pembagian tugas penyusunan final project adalah sebagai
```
berikut :
```
1. Final Project disusun untuk memenuhi nilai akhir dari mata kuliah web
programming.
2. 1 kelompok terdiri dari minimal 3 mahasiswa dan maksimal 5 mahasiswa
disesuaikan dengan jumlah mahasiswa dalam satu kelas.
3. Final project yang dikerjakan wajib menggunakan framework Codeigniter 4.
4. Tema final project ditentukan oleh masing-masing dosen pengampu mata kuliah
dengan ketentuan masing-masing kelompok memilih tema yang berbeda.
5. Final project disusun menggunakan metode pengembangan perangkat lunak misal :
spiral, waterfall, dll.
6. Penyusunan Final project mengacu kepada metode pengembangan yang dipilih oleh
mahasiswa.
7. Final project berbasis object yang dibuktikan dengan penyusunan UML (Unified
```
Modelling Language) diantaranya Usecase Diagram, activity diagram dan class
```
diagram yang digambarkan dengan baik dan jelas.
8. Adapun susunan dari paper Final Project adalah sebagai berikut :
✓ Lembar Judul
```
✓ Bab 1 Pendahuluan (Latar Belakang, Rumusan Masalah, Batasan Masalah)
```
✓ Bab 2 Teori Pendukung
✓ Bab 3 Metode Pengembangan Perangkat Lunak
✓ Bab 4 Pembahasan
✓ Bab 5 Penutup
✓ Daftar Pustaka
✓ Lampiran
E. Instalasi
Pada bagian ini dilakukan instalasi software pendukung yang digunakan dalam mata
kuliah web programming. Adapun software pendukung tersebut adalah sebagai berikut :
1. Xampp
XAMPP adalah perangkat lunak bebas, yang mendukung banyak sistem operasi,
merupakan kompilasi dari beberapa program. Fungsinya adalah sebagai server yang
```
berdiri sendiri (localhost), yang terdiri atas program Apache HTTP Server, MySQL
```
database, dan penerjemah bahasa yang ditulis dengan bahasa pemrograman PHP dan
```
Perl. Nama XAMPP merupakan singkatan dari X (tempat sistem operasi apapun),
```
Apache, MySQL, PHP dan Perl. Program ini tersedia dalam GNU General Public License
dan bebas, merupakan web server yang mudah digunakan yang dapat melayani tampilan
halaman web yang dinamis. Untuk mendapatkanya dapat mendownload langsung
melalui link berikut ini :
```
https://drive.google.com/file/d/1zWUUZ2cADLNAqQcQFzTXYouQZBH_0xN9/vi
```
ew?usp=sharing
Diatas adalah xampp Versi minimum untuk pembelajara mata kuliah ini yaitu versi 8.1.4
diperuntukkan untuk windows x64. Jika Anda menggunakan perangkat yang berbeda
Anda dapat mengunduh langsung melalui laman resmi Xampp di
```
https://www.apachefriends.org/download.html
```
Ada beberapa penyesuaian yang harus dipastikan dalam xampp ini, silakan ikuti langkah-
langkah dibawah ini :
Silakan buka Xampp Control Panel. Kemudian klik tombol “Config” pada bagian
```
“Apache” lalu pilih “PHP (php.ini)”. Lihat gambar di bawah ini :
```
Setelah terbuka file “php.ini” kemudian silakan cari baris berikut :
```
Kemudian sesuaikan baris dengan menghilangkan tanda baca (;) yang ada di awal baris.
```
Sehingga baris kode menjadi seperti di bawah ini :
Jangan lupa simpan hasil konfigurasi akhir dari file php.ini dan Xampp siap digunakan
untuk proses selanjutnya.
```
Note : Jika di laptop Anda sudah terinstal aplikasi Xampp namun versi PHP
```
dibawah 8.1 silakan uninstal Xampp Anda dan ganti dengan versi diatas atau yang
terbaru. Cara cek versi php di laptop anda : Hidupkan Xampp, Buka Command
Prompt lalu ketikkan perintah : php -v.
2. Composer
```
Composer adalah tools dependency manager pada PHP, Dependency (ketergantungan)
```
sendiri diartikan ketika project PHP yang kamu kerjakan masih membutuhkan atau
memerlukan library dari luar. Composer berfungsi sebagai penghubung antara project
PHP kamu dengan library dari luar.
Dependency manager memungkinkan kamu untuk membuat dan mengambil library pada
project PHP kamu pada library packagist.org. Packagist.org sendiri merupakan situs yang
menyediakan banyak libary yang bisa kamu gunakan. Dengan bantuan tools tersebut
kamu bisa terhubung pada situs packagist.org dan kamu dapat mengambil dan
mengupload library.
Lalu apa sih manfaat dari kita menggunakan Dependency Manager? Banyak sekali
manfaat yang bisa kamu dapatkan ketika kamu menggunakan tools tersebut pada saat
mengerjakan projek PHP. Selain lebih cepat dalam menyelesaikan proyek karena kamu
bisa leluasa menggunakan library dari packagist.org masih banyak manfaat lainnya,
Berikut manfaat menggunakan composer saat mengerjakan projek PHP :
1. Dengan menggunakan Tools ini, Kamu bisa lebih terstruktur saat coding PHP dengan
menggunakan konsep MVC.
2. Package yang kamu butuhkan saat mengerjakan projek PHP akan secara otomatis
terinstal atau mengupdate tanpa harus menginstall secara manual.
3. Kamu tidak perlu melakukan include terhadap semua file php atau class php yang
dibutuhkan dalam proyek PHP kamu, Karena sudah terdapat autoload yang akan
menghandle fungsi tersebut.
4. Dengan menggunakan dependency manager yang terhubung dengan packagist, Kamu
dapat dengan leluasa menggunakan ribuan package yang sudah tersedia packagist.
Nah.. Berikutnya adalah bagaimana sih cara kerja dari Compeser itu sendiri? Sesuai
dengan penjelasan diatas, Jika composer menggunakan packagist.org sebagai penyedia
bundle/package utama. Nah, tools ini bertugas untuk menghubungkan antara
programmer dengan packagist.org.
Packagist.org akan menyerahkan fitur-fitur pada versi atau integrasi dengan GitHub dan
/ atau bitbucket. Tools ini membantu menemukan package/bundle yang tersedia pada
situs packagist.org.
Sebagian besar repositori seperti Github, menyertakan tautan atau perintah yang siap
menyederhanakan pengunduhan bundel yang sesuai melalui composer.
Dapat menghasilkan struktur hierarkis, misalnya: Sebuah situs web repository nasional
```
mungkin memerlukan situs repositori kontinental (child-parent dependency), sambil
```
```
menjadi anak dari situs repositori frameworks (a parent for the previous parent). Dengan
```
cara ini struktur dependensi dibuat.
Lalu bagaimana cara menginstal composer? Silakan simak tutorial berikut ini :
1. Silakan download file composer.exe melalui link berikut ini :
```
https://getcomposer.org/Composer-Setup.exe
```
2. Lakukan instalasi seperti biasa, yang menjadi perhatian adalah pada step pertama kita
tidak perlu ceklis “Developer Mode”.
Pada step 1 silakan klik tombol “Next” untuk melanjutkan proses Instalasi.
Pada step 2 akan muncul requirement bahwa harus ada program php di PC kita. Jika
sudah langsung klik tombol “Next”.
Pada step 4 – Proxy Settings tidak perlu di ceklis. Langsung saja klik tombol “Next”
Pada step 5 ini langsung saja klik tombol “Install”. Tunggu hingga proses selesai.
3. Visual Studio Code
Dalam pembelajaran ini menggunakan visual studio code. Silakan download dan instal
visual studio code. Untuk link download dapat melalui laman berikut ini :
```
https://fuadnurhasan.net/baca_artikel/2020/09/free-download-visual-studio-code-
```
v1491-64-bit
4. Codeigniter
Pada proses instalasi, Codeigniter 4 menyediakan 2 opsi instalasi yaitu instalasi secara
manual dan instalasi melalui bantuan composer. Namun pada kesempatan kali ini penulis
akan mengajarkan bagaimana instalasi Codeigniter 4 menggunakan bantuan composer.
Silakan ikuti Langkah-langkah di bawah ini :
1. Silakan buka command prompt kalian. Lihat gambar :
2. Langkah berikutnya adalah silakan ketikkan perintah berikut sehingga posisi kita
berada pada drive C atau Drive dimana kalian menyimpan folder instalasi Xampp
kalian. Perintahnya yaitu “cd C:/”.
3. Silakan berpindah ke folder “xampp/htdocs” dengan perintah “cd xampp/htdocs”.
4. Setelah kita berada pada directory C:/xampp/htdocs/ maka silakan ketikan kode di
bawah ini untuk memulai download Codeigniter 4 via composer :
“composer create-project codeigniter4/appstarter project-root”
Perhatikan kode di atas. Pada bagian kode “project-root” silakan diganti dengan nama
project yang akan kalian buat. Dalam hal ini penulis mengganti dengan nama project
“webpro_ci4”. Maka kode composer menjadi seperti di bawah ini :
“composer create-project codeigniter4/appstarter webpro_ci4”
Selengkapnya silakan lihat gambar berikut :
5. Silakan tunggu hingga proses download Source Code selesai.
6. Jika tampilan Command Prompt kalian sudah seperti diatas maka itu tandanya proses
download Codeigniter 4 sudah berhasil. Dan kalian bisa melihat hasilnya di directory
xampp/htdocs/webpro_ci4 kalian sudah terdapat hasil download Codeigniter 4.
BAB II
PENGENALAN DASAR CODEIGNITER 4
A. Deskripsi Pembelajaran
Pada bab ini kita akan membahas mengenai perintah-perintah dasar dan konfigurasi dasar
pada Codeigniter 4. Apa saja yang perlu kita pahami dan kita lakukan pada konfigurasi dasar
Codeigniter 4 setelah berhasil mendownload file Codeigniter 4. Silakan simak dan pelajari
baik-baik pada bab ini.
B. Tujuan Pembelajaran
Diharapkan mahasiswa mampu mengetahui dan mencerna dasar-dasar penggunaan
Codeigniter 4 dan mampu mengimplementasikan ke dalam Final Project!
C. Environment Setting (env)
```
Pada tahap ini yang harus kita lakukan adalah mencari file (env) pada direktori Code
```
Igniter kita yang sudah kita download sebelumnya. Kemudian mengubah nama file menjadi
```
(.env) dengan menambahkan titik (.) di depan nama file (env).
```
```
Tidak hanya sampai disini silakan kalian buka file (.env) kemudian lakukan konfigurasi
```
kode di bawah ini :
- Pada baris ke 17 silakan hilangkan tanda tagar (#) kemudian ubah kode
CI_ENVIRONMENT yang awalnya adalah “production” ubah menjadi
“development”. Lihat gambar :
- Kemudian aktifkan seluruh perintah pada bagian APP atau pada baris 23 dengan cara
```
menghapus tanda tagar (#) di depan kode tersebut. Dan isikan app.baseURL dengan
```
```
http://localhost:8080. Lihat gambar :
```
D. PHP Spark
Spark adalah kerangka mikro PHP kecil dan kuat yang dibuat dan dikelola oleh tim teknik
di When I Work. Ia mencoba untuk mematuhi PSR-1, PSR-2, PSR-4 dan PSR-7. Ini didasarkan
```
pada pola ADR. (https://spark.readthedocs.io/en/latest/)
```
Nah untuk dapat mengaktifkan server http://localhost:8080/ maka kita yang perlu kita
lakukan adalah
- Jalankan terminal pada Visual Studio Code kalian di folder webpro_ci4.
- Tuliskan baris kode berikut “php spark serve” lalu tekan enter. Lihat gambar :
Maka kalian sudah bisa melihat hasil instalasi Codeigniter 4 kalian di browser dengan
mengunjungi laman http://localhost:8080/.
- Untuk mengehentikan perintah “php spark serve” silakan tekan CTRL+C pada
terminal.
E. Mengenal URL Structure Pada Codeigniter 4
Secara umum struktur URL pada Codeigniter 4 tidak berbeda dengan Code Igniter 3.
```
Pada gambar III.5 diatas terdapat struktur URL (lihat address bar) yaitu http://localhost:8080/
```
jika kita artikan maka pada struktur url ini code igniter tidak menerima apapun di segment 1
maupun segment 2. Lalu apaitu segment 1, segment 2 dan seterusnya? Oke penulis akan
mencoba menggambarkannya. Jadi misalkan kita mempunyai sebuah url seperti di bawah ini :
```
http://localhost:8080/index.php/home/index
```
Maka dapat diartikan seperti ini :
- http://localhost:8080/ merupakan BASE URL.
- Index.php merupakan default dari Code Igniter, di Codeigniter 4 kita bisa langsung
menghilangkan index.php ini.
- home merupakan controller yang menjadi controller default pada saat kita pertama kali
menjalankan Codeigniter 4. Atau bisa kita sebut posisi segment 1 URL diisi oleh
controller.
- index merupakan method yang dipanggil pada controller home. Disini method berada
pada struktur url segment 2.
- Nah apabila dibelakang segment 2 (method) terdapat parameter lanjutan maka itu
```
disebut segment 3 dan seterusnya yang dipisahkan dengan tanda slash (/). Hitungan
```
segment dimulai setelah index.php
F. Memahami Apa Itu Controller
Controller adalah barisan kode yang bertugas memproses request yang datang dari user
melewati browser dan URL tertentu, dimana Controller mengambil data dan informasi melalui
Model atau resource lainnya. Setelah itu Controller menampilkan hasil dari prosesnya ke dalam
View sebagai response dari request. Secara default pada Codeigniter 4 maka akan diarahkan
menuju ke controller home. Untuk setting default controller pada Codeigniter 4 kalian bisa
buka file Routing.php yang terdapat pada folder app/config. Lihat gambar :
Untuk merubah default controller kalian bisa melakukan perubahan pada baris yang
berisi variabel $defaultController dengan menyebutkan nama controller yang kalian inginkan.
Sementara untuk merubah default method kalian bisa merubahnya pada variable
$defaultMethod, sebutkan method yang kalian inginkan.
Sekarang kita coba buka controller Home.php.
```
Kita bisa lihat pada controller Home.php terdapat 1 method yaitu index(). Di dalam method
```
```
index tersebut terdapat perintah “return view('welcome_message');” ini artinya pada perintah
```
ini akan membawa kita ke folder Views dan file welcome_message.php. Kita bisa lihat di
direktori Views/welcome_message.php.
Kita akan sedikit modifikasi untuk mempertajam pemahaman kalian terkait segment
dalam codeigniter. Kita akan membuat tambahan method dalam controller Home yang sudah
```
ada. Kita berikan nama belajar_segment().
```
Selanjutnya kita akan siapkan terlebih dahulu tampilan untuk method belajar_segment ini.
Buatlah file segment_view.php pada folder Views dengan code dibawah ini :
Untuk pendefinisian parameter pada saat routing ada 4 type yang bisa kita pakai yaitu
```
✓ (:alpha) : Untuk parameter yang berisi huruf saja
```
```
✓ (:num) : Untuk parameter yang berisi angka saja
```
```
✓ (:alphanum) : Untuk parameter yang berisi gabungan huruf dan angka
```
```
✓ (:any) : Untuk parameter yang berisi gabungan semua karakter, huruf dan angka.
```
Kita akan gunakan 3 type routing saja dalam pembelajaran web programming kali ini yaitu
```
(:alpha), (:num) dan (:alphanum).
```
Selanjutnya kita akan lakukan beberapa perubahan di controller Home.php dan file routes.php
agar tampilan segment_view.php kita bisa berfungsi dengan baik.
Sesuaikan file controller Home.php sebagai berikut :
Sesuaikan file routes.php dalam folder config.
Nah pada baris ke-9 itulah kita definisikan kebutuhan parameter berdasarkan segment yang
akan kita gunakan dalam file segment_view.php. Untuk parameter pertama kita definisikan
dengan $1, parameter kedua dengan $2, dst. Tergantung kebutuhan parameter yang akan
dijalankan dalam sebuah method. Jika method diakses tanpa parameter yang lengkap maka
tidak akan bisa menampilkan request halaman atau error. Dikarenakan routing-nya tidak
terdefinisi. Ini menambah sisi keamanan juga di dalam website atau aplikasi yang kita buat. Di
baris ke-8 sampai dengan baris ke-9 menggunakan method nya adalah get apa bedanya dengan
post? Get dalam routing ini berarti hanya akan menampilkan halaman tanpa adanya pengiriman
data yang lain artinya routes hanya menerima request dari address bar. Jika method nya adalah
post maka routes menerima request dari address bar dan ada pengiriman data lain dari formulir
yang di submit oleh user atau melalui kontak jquery post dari user.
Kemudian yang terakhir kita sesuaikan untuk file segment_view.php.
Hasilnya jika kita buka url http://localhost:8080/home/coba-parameter/aku/091292/aku851
Penjelasan url http://localhost:8080/home/coba-parameter/aku/091292/aku851
```
http://localhost:8080/ : ini adalah BASE URL
```
```
home : ini adalah controller yang diakses (segment 1)
```
```
coba-parameter : ini adalah method yang diakses (segment 2)
```
```
aku : ini adalah parameter 1 (segment 3)
```
```
091292 : ini adalah parameter 2 (segment 4)
```
```
aku851 : ini adalah parameter 3 (segment 5)
```
Ekstra Bab II >> Pemahaman Routes.php
```
Jika kita lihat pada routes diatas maka terdapat 2 bagian yaitu disebelah kiri tanda koma (,) dan
```
disebalah kanannya.
Rumusnya seperti ini :
```
$routes->method('link_samaran', 'Controller::Function');
```
```
Keterangan :
```
```
Method : get/post
```
```
Link_samaran : berisi samaran link yang digunakan termasuk setting parameter
```
```
Controller : sebutkan controller yang dituju
```
```
Function : sebutkan function didalam controller yang dituju diikuti dengan parameter
```
BAB III
PERANCANGAN DATABASE, KONEKSI DATABASE,
IMPLEMENTASI BOOTSTRAP
A. Deskripsi Pembelajaran
Pada bab ini kita akan mempelajari bagaimana merancang database sesuai dengan aturan
yang ada pada Teori Perancangan Database sehingga dihasilkan database yang efektif dan
efisien. Setelah itu kita akan mengkoneksikan database yang kita buat ke project Codeigniter
kita. Setelah itu kita implementasikan template dari bootstrap untuk bisa digunakan di project
yang sudah kita buat.
B. Tujuan Pembelajaran
Diharapkan mahasiswa mampu :
1. Merancang database dengan baik sesuai dengan kebutuhan sistem dan pengguna
2. Melakukan koneksi database
3. Mengimplementasikan bootstrap
C. Perancangan Database
Di dalam merancang sebuah database kita perlu memperhatikan aturan-aturan main
dalam perancangan database. Seperti yang telah dipelajari sebelumnya pada mata kuliah
“Perancangan Database”. Langsung saja disini kita ada beberapa langkah dalam menyiapkan
database yang akan kita gunakan dalam pembelajaran di mata kuliah web programming ini.
1. Buka dan aktifkan service Apache dan MySql melalui Xampp kalian.
2. Buka http://localhost/phpmyadmin di browser kalian.
3. Buatlah database dengan nama “perpus_db”.
4. Setelah database berhasil dibuat, silakan buat tabel-tabel dibawah ini sesuaikan
penamaan tabel dan field yang sudah ditentukan, teliti dengan penulisan.
5. Tabel Admin (tbl_admin)
6. Tabel Anggota (tbl_anggota)
7. Tabel Buku (tbl_buku)
8. Tabel Detail Peminjaman (tbl_peminjaman)
9. Tabel Kategori (tbl_kategori)
10. Tabel Peminjaman (tbl_peminjaman)
11. Tabel Pengembalian (tbl_pengembalian)
12. Tabel Rak (tbl_rak)
13. Tabel Temp Peminjaman (tbl_temp_peminjaman)
D. Koneksi Database
Untuk melakukan koneksi database di codeigniter 4 kita hanya perlu melakukan
```
perubahan pada file (.env) yang sebelumnya sudah kita sesuaikan. Silakan buka file
```
environment pada main folder project kita.
Cari bagian dibawah ini :
Kemudian lakukan penyesuaian sesuai dengan gambar dibawah ini :
Jika xampp kalian disetting dengan password silakan isikan password mysql nya di
bidang password dengan password kalian, jika tidak disetting password kosongkan
seperti tampilan diatas. Sampai disini maka koneksi database selesai dilakukan.
E. Implementasi Bootstrap
Untuk memudahkan dan mempercepat project yang akan kita buat, maka disini kami
sudah sediakan template bootstrap yang bisa dijadikan sebagai bahan pembelajaran mata
kuliah web programming ini. Untuk itu silakan download template terlebih dahulu pada
link berikut ini :
```
https://drive.google.com/file/d/1wDtL67V6plUSoYkDH8k5rBQseC_DLo-F/view
```
Agar template di atas dapat diimplementasikan ke dalam project kita maka kita harus
memecah beberapa bagian menjadi bagian-bagian kecil yang nantinya kita sebut sebagai
Assets.
1. Setelah berhasil download silakan ekstrak file template sehingga seluruh komponen
didalam template tersebut dapat kita akses.
2. Buatlah folder Assets di dalam folder public di project yang kita buat. Masuk ke
htdocs/webpro_ci4/public.
3. Bukalah folder hasil ekstrak file zip. Lalu copy seluruh folder yang ada di dalamnya
```
(css, fonts, js, tables) ke folder Assets yang barusan kita buat.
```
Copy to
4. Selanjutnya kita akan membuka salah satu halaman yang nantinya akan kita pecah
menjadi bagian-bagian file kecil untuk dijadikan template awal.
5. Buka file tables.html di folder lumino dengan visual studio code! File ini dipilih
karena plugin yang digunakan sudah lengkap dan mewakili semua file yang ada di
template tersebut.
6. Buatlah folder baru dengan nama Backend di dalam Folder app/Views. Lalu buat
folder baru dengan nama Template di dalam folder Backend. Lihat gambar dibawah
```
ini :
```
7. Seleksi baris 1-44 dari file tables.html. Kemudian copy baris tersebut dan letakkan
pada file baru yang nantinya akan kita simpan dengan nama header.php di dalam
folder app/Views/Backend/Template.
8. Lakukan penyesuaian pada baris ke 6-11 di file header.php sebagai berikut :
9. Selanjutnya kita kembali ke file tables.html yang tadi sudah kita buka di vs code.
Seleksi baris 46-85 dari file tables.html. Kemudian copy baris tersebut dan letakkan
pada file baru yang nantinya akan kita simpan dengan nama sidebar.php di dalam
folder app/Views/Backend/Template.
10. Yang terakhir kita lakukan pemisahan untuk file footer. Seleksi baris 189-214 dari
file tables.html. Kemudian copy baris tersebut dan letakkan pada file baru yang
nantinya akan kita simpan dengan nama footer.php di dalam folder
app/Views/Backend/Template.
11. Lakukan penyesuaian pada file footer.php sebagai berikut :
12. Setelah pemisahan 3 file diatas selesai maka template tersebut sudah siap kita
gunakan untuk keperluan design di tampilan backend project nantinya.
BAB IV
PENGETAHUAN DASAR IF…ELSE, FOR dan FOREACH
A. Deskripsi Pembelajaran
Pada bab ini kita akan membahas terkait pengetahuan dasar percabangan IF…ELSE
yang sering kita gunakan di dalam membuat sebuah program aplikasi. Dan perbedaan pada
perulangan FOR dan FOREACH. Ketiga fungsi ini akan sering kita gunakan di dalam
pembelajaran kita pada mata kuliah web programming ini.
B. Tujuan Pembelajaran
Diharapkan mahasiswa mampu :
1. Memahami percabangan dengan menggunakan IF…ELSE
2. Memahami perulangan dengan menggunakan FOR
3. Memahami perulangan dengan menggunakan FOREACH
4. Memahami perbedaan penggunaan FOR dan FOREACH
C. Percabangan IF…ELSE
Sama seperti halnya bahasa pemrograman PHP pada umumnya, di dalam framework
codeigniter 4 ini kita juga bisa melakukan perintah percabangan dengan IF…ELSE atau
IF…ELSEIF…ELSE. Adapun format penggunaannya sebagai berikut :
Percabangan di sebelah kiri digunakan jika hanya ada pernyataan/kondisi tunggal.
Sementara percabangan yang berada di sebelah kanan digunakan jika pernyataan/kondisi
lebih dari satu.
```
if(Pernyataan/kondisi){
```
Perintah
```
}
```
```
else{
```
Perintah
```
}
```
```
if(Pernyataan/kondisi){
```
Perintah
```
}
```
```
elseif(Pernyataan/kondisi){
```
Perintah
```
}
```
…..
```
else{
```
Perintah
```
}
```
D. Perulangan FOR dan FOREACH
Penggunaan perintah perulangan yang sering digunakan pada pemrograman php berbasis
framework codeigniter 4 yaitu FOR dan FOREACH. Adapun kegunaan dan cara
penggunaannya sebagai berikut :
1. Perulangan FOR
Dalam codeigniter 4, umumnya kita menggunakan perulangan FOR untuk mencetak
data dengan jumlah tertentu, artinya perulangan FOR ini bergantung kepada kondisi
yang sudah disusun oleh programmernya. Batasan atau kondisi dalam perulangan
FOR sesuai dengan batasan yang tertulis pada baris kode. Berbeda dengan
perulangan WHILE atau FOREACH. Adapun format perulangan FOR sebagai
```
berikut :
```
```
Seperti yang terlihat pada format diatas perulangan FOR memiliki variabel awal ($x)
```
yang diberikan nilai awal adalah 1 dan mempunyai syarat/kondisi dimana perulangan
tersebut akan berhenti yaitu $x<=10, kemudian diakhir pernyataan diberikan
penambahan pada nilai awal dengan perintah $x++. Hasil/output dari kode program
diatas adalah mencetak angka 1 sampai dengan 10. Contoh berikutnya :
Dari baris kode diatas akan berulang sebanyak 20 kali dan mencetak kalimat “Belajar
Framework CI4” sebanyak 20 kali.
2. Perulangan FOREACH
Berbeda dengan perulangan FOR, dalam perulangan FOREACH batasan data yang
akan ditampilkan bergantung dengan jumlah data yang tersimpan di dalam array.
Dimana array ini biasanya menyimpan data yang diambil tabel di dalam database
tertentu. Perintah penggunaan FOREACH sebagai berikut :
Dalam format penulisan diatas $dataBuku adalah variabel yang dikirimkan
melalui controller yang dimana diambil dari database tabel buku. Sehingga
```
for($x=1;$x<=10;$x++){
```
```
echo $x;
```
```
}
```
```
for($kata=1;$kata<=20;$kata++){
```
```
echo "Belajar Framework CI4"."<br/>";
```
```
}
```
```
foreach($dataBuku as $buku){
```
```
echo $buku[‘judul_buku’]. "<br/>;
```
```
}
```
nantinya akan tercetak seluruh data judul buku di tabel buku. Dalam perulangan
FOREACH ini ada variabel alias yaitu $buku. $buku ini adalah alias untuk
$dataBuku. Maka dalam pemanggilan data menggunakan variabel aliasnya atau
$buku dalam kasus diatas. Implementasi di kode program kita lihat di bab
selanjutnya.
BAB V
PEMBUATAN FORM LOGIN DAN CRUD MODULE ADMIN
A. Deskripsi Pembelajaran
Pada bab ini kita akan membahas untuk pembuatan form login admin dan CRUD module
admin pada project kita. Ada beberapa hal yang harus dipastikan sebelum memulai bab ini,
```
yaitu :
```
1. Database sudah dibuat dan selesai.
2. Template sudah diatur sebagaimana disampaikan di bab sebelumnya.
B. Tujuan Pembelajaran
Mahasiswa diharapkan mampu :
1. Membuat form login dan autentikasi login
2. Membuat dan menerapkan CRUD pada module admin
3. Menyelesaikan tugas mandiri
C. Pembuatan Controller Admin.php
```
Dalam pembuatan controller admin ini kita hanya perlu ATM (Amati, Tiru dan
```
```
Modifikasi) dari controller yang sudah ada. Kita buka Controller Home.php di folder
```
app/Controller. Kemudian kita save as dengan nama Admin.php.
Kemudian lakukan penyesuaian berikut ini, baris ke-5 Home replace to Admin :
D. Tampilan Login Admin
Untuk membuat tampilan login admin kita buka kembali file master template Lumino
kemudian cari login.html. Save as file login.html dengan nama login.php di dalam
folder app/Views/Backend/Login. Cek gambar!!
Lakukan penyesuaian pada baris 6-10 seperti gambar di bawah ini :
Pada baris 29 seperti gambar di bawah ini :
Dan pada baris 49-55 seperti gambar di bawah ini :
Jangan lupa lakukan simpan file secara berkala.
Kemudian kita setting default controller, sebelumnya default controller telah dijelaskan
pada Bab II. Kita setting default Controller kita ke Admin dan default method ke login.
Selanjutnya kita setting Routes.php untuk halaman login admin ini.
Selanjutnya coba buka laman http://localhost:8080/ Maka tampilan halaman login admin
sudah bisa diakses seperti gambar di bawah ini :
E. Siapkan tampilan dashboard admin
Untuk membuat tampilan dashboard admin kita ambil dari template Lumino. Cari file
index.html kemudian save as dengan nama dashboard_admin.php ke dalam folder
app/Views/Backend/Login. Lihat gambar!!
Lakukan beberapa penyesuaian berikut ini :
1. Hapus baris 1-84, kemudian simpan (ctrl+s).
2. Hapus baris 270-299, kemudian simpan (ctrl+s).
Lakukan penambahan function di dalam controller admin. Buat function untuk
menampilkan dashboard admin seperti gambar di bawah ini :
Tambahkan baris berikut pada file Routes.php
Buka laman http://localhost:8080/admin/dashboard-admin Pastikan tampil halaman
seperti gambar di bawah ini :
F. Model Admin dan Autentikasi Login
Selanjutnya kita buat model admin. Model disini akan melakukan manipulasi database,
peran model adalah menghubungkan antara controller dengan database. Idealnya 1 tabel
di dalam database mempunyai 1 model atau 1 tabel di dalam database mempunyai 1
prosedur dalam pengelolaan databasenya.
Buatlah file baru kemudian simpan dengan nama M_Admin.php di dalam folder
app/Models.
Kemudian tuliskan baris kode di bawah ini :
Setelah itu jangan lupa disimpan. Tekan CTRL+S!
Hampir selesai untuk autentikasi login.
Untuk membuat fungsi autentikasi login maka kita perlu kembali ke controller
Admin.php. Tambahkan baris di bawah ini dibagian atas file controller setelah
```
namespace App\Controllers;
```
```
Tambahkan sebuah fungsi dengan nama autentikasi(). Kemudian tuliskan baris kode
```
yang ada di bawah ini :
Kemudian lakukan penyesuaian untuk fungsi dashboard di controller Admin.php!
Lakukan penyesuaian pada file login.php yang berada pada folder app/Views/Login
sebagai berikut :
1. Baris ke-26
2. Baris ke-39
3. Tambahkan style untuk Sweetalert. Download style sweatalert di sini :
```
https://drive.google.com/drive/folders/1XV9FzIOO-
```
WNTLqF6Fn8QlqA12sHlRE7i?usp=sharing
Langkah menambahkan sweetalert2 :
```
✓ Download file css (sweetalert2.min.css) kemudian pindahkan ke folder
```
public/Assets/css.
```
✓ Download file js (sweetalert2.min.js) kemudian pindahkan ke folder
```
public/Assets/js.
✓ Tambahkan baris berikut di file login.php setelah baris ke-10.
✓ Tambahkan baris berikut di file login.php setelah baris ke-56.
✓ Tambahkan baris berikut di file login.php setelah baris ke-72.
✓ Tambahkan baris berikut di file header.php setelah baris ke-11.
✓ Tambahkan baris berikut di file footer.php setelah baris ke-8.
✓ Tambahkan baris berikut di file footer.php setelah baris ke-24.
4. Tambahkan baris berikut pada file Routes.php
5. Silakan tambahkan 1 baris record di dalam tabel admin di database dengan isian
seperti dibawah ini :
Password admin isikan hasil enkripsi dari developer yaitu:
$2y$10$BtHHWFXmLuhnP79ievN58O8EivCDmojcmNDivaVhmIlBQNSiqr9Ku
6. Terakhir silakan lakukan penyesuaian pada file environment (.env) pada baris ke 62-
63 seperti terlihat pada gambar.
7. Coba jalankan form login dengan username dan password => developer
8. Perintah untuk logout sebagai berikut :
Dan untuk setting di Routes.php maka tambahkan baris kode berikut ini :
G. Create, Read, Update, Delete Module Admin
1. Create
Sebelum membuat module create kita siapkan terlebih dahulu design dari form input
admin nya. Silakan dituliskan kode program seperti di bawah ini :
Dalam baris kode diatas menggunakan fitur validasi dari HTML5 yaitu required.
Selain itu terdapat juga baris kode untuk verifikasi inputan user pada textfield
username dengan menggunakan event keypress. Yang tertera dalam baris kode ke-
25 pada fungsi goodchars. Semua karakter yang didefinisikan pada fungsi
goodchars inilah yang bisa diinputkan oleh user. Simpan file tersebut dengan nama
input-admin.php di dalam folder app/Views/Backend/MasterAdmin. Selanjutnya
kita lakukan penyesuaian di file sidebar.php dan header.php yang berada di folder
Template sebagai berikut :
✓ Hapus baris 2-6 pada sidebar.php. Lihat gambar!
✓ Sesuaikan baris ke-3 pada sidebar.php. Lihat gambar!
✓ Hapus baris 4-8 pada sidebar.php. Lihat gambar!
✓ Sesuaikan baris 4-36 pada sidebar.php. Lihat gambar!
✓ Sesuaikan baris ke-37 pada sidebar.php. Lihat gambar!
✓ Sisipkan baris kode berikut pada header.php sebelum tag </head>.
<script type="text/javascript">
```
function getkey(e){
```
```
if (window.event)
```
```
return window.event.keyCode;
```
```
else if (e)
```
```
return e.which;
```
else
```
return null;
```
```
}
```
```
function goodchars(e, goods, field){
```
```
var key, keychar;
```
```
key = getkey(e);
```
```
if (key == null) return true;
```
```
keychar = String.fromCharCode(key);
```
```
//keychar = keychar.toLowerCase();
```
```
//goods = goods.toLowerCase();
```
// check goodkeys
```
if (goods.indexOf(keychar) != -1)
```
```
return true;
```
// control keys
```
if ( key==null || key==0 || key==8 || key==9 || key==27 )
```
```
return true;
```
```
if (key == 13) {
```
```
var i;
```
```
for (i = 0; i < field.form.elements.length; i++)
```
```
if (field == field.form.elements[i])
```
```
break;
```
```
i = (i + 1) % field.form.elements.length;
```
```
field.form.elements[i].focus();
```
```
return false;
```
```
};
```
// else return false
```
return false;
```
```
}
```
</script>
Fungsi diatas digunakan untuk membatasi inputan yang dilakukan oleh user pada
formulir yang kita buat. Fungsi ini akan berguna di beberapa kondisi formulir yang
nantinya kita buat.
Selanjutnya kita setting Routes.php untuk keseluruhan CRUD Module Admin
sebagai berikut :
Setelah kita selesai menyiapkan design tampilan untuk form input admin, mengatur
link pada sidebar dan menyesuaikan Routes.php maka selanjutnya kita buat perintah
untuk menampilkan Form Input Admin dan proses CREATE nya di controller
Admin.php. Tuliskan baris kode berikut ini :
2. Read
Pada bagian ini kita akan mengimplementasikan percabangan IF…ELSE dan
perulangan dengan FOREACH seperti yang tertera pada Bab sebelumnya. Silakan
buat file baru dengan nama master-data-admin.php yang disimpan di folder
app/Views/Backend/MasterAdmin kemudian ketikkan baris kode di bawah ini :
Pada baris kode 30 adalah implementasi perulangan dengan FOREACH. Dan pada
baris kode 39 adalah implementasi percabangan dengan IF…ELSE.
Setelah selesai dengan design module Admin READ. Silakan tambahkan baris kode
dibawah ini pada controller Admin.php.
Pada baris kode diatas maka variabel data_user yang dikirimkan hanya akan
mengambil data admin dengan status delete nya = 0 dan akses level nya != 1. Maka
jika kita akses halaman berikut http://localhost:8080/admin/master-data-admin
hasilnya seperti gambar di bawah ini :
Tampilan jika data admin sudah diinput seperti di bawah ini :
Soal!!
Pada gambar di atas terlihat bahwa Akses Level masih tampil angka. Ubahlah
tampilan angka 2 dan 3 tersebut dengan percabangan IF…ELSE. Ketentuan :
2 = Kepala Perpustakaan
3 = Admin Perpustakaan
Kerjakan dan beritahu dosenmu jika kamu sudah selesai!!
Hasil yang benar adalah seperti gambar di bawah ini :
3. Edit dan Update
Pada bagian ini kita akan membuat tampilan edit data dan proses update. Tentunya
kita akan mengadopsi tampilan yang sudah kita buat sebelumnya dalam proses input
admin. Dari tampilan tersebut kita modifikasi menjadi seperti dibawah ini :
Kode program lihat dibawah ini :
Save as dari file input-admin.php dan beri nama edit-admin.php di folder yang
sama dengan penyimpanan file sebelumnya. Kemudian sesuaikan form menjadi
seperti gambar di atas.
Setelah itu kita tambahkan baris kode di bawah ini dalam controller Admin.php.
Kemudian untuk proses simpan updatenya silakan tambahkan kode di controller
Admin.php seperti di bawah ini :
4. Delete
Pada bagian delete kita tidak membutuhkan view hanya satu langkah saja yang perlu
kita lakukan yaitu menambahkan baris kode berikut pada Controller Admin.php.
H. Tugas!!
Buatlah CRUD untuk module Anggota, Rak, Kategori dengan mengikuti contoh yang
sudah ada di Module Admin!!
BAB VI
UPLOAD, RENAME & VALIDASI FILE
A. Deskripsi Pembelajaran
Pada bab ini kita akan membahas untuk pembuatan CRUD module buku pada project
kita. Ada beberapa hal yang harus dipastikan sebelum memulai bab ini, yaitu :
1. Database sudah dibuat dan selesai.
2. Template sudah diatur sebagaimana disampaikan di bab sebelumnya.
3. Paham akan alur CRUD yang sudah dibahas pada bab sebelumnya.
B. Tujuan Pembelajaran
Mahasiswa diharapkan mampu :
1. Membuat CRUD module buku
2. Menerapkan validasi form dari CodeIgniter 4
```
(https://codeigniter.com/user_guide/libraries/validation.html#form-validation-
```
```
tutorial)
```
C. Membuat Model untuk Module Buku
Silakan buat model untuk module buku seperti di bawah ini dengan nama M_Buku.php
<?php
```
namespace App\Models;
```
```
use CodeIgniter\Model;
```
class M_Buku extends Model
```
{
```
```
protected $table = 'tbl_buku';
```
```
public function getDataBuku($where = false)
```
```
{
```
```
if ($where === false) {
```
```
$builder = $this->db->table($this->table);
```
```
$builder->select('*');
```
```
$builder->orderBy('judul_buku','ASC');
```
```
return $query = $builder->get();
```
```
} else {
```
```
$builder = $this->db->table($this->table);
```
```
$builder->select('*');
```
```
$builder->where($where);
```
```
$builder->where($where);
```
```
$builder->orderBy('judul_buku','ASC');
```
```
return $query = $builder->get();
```
```
}
```
```
}
```
```
public function getDataBukuJoin($where = false)
```
```
{
```
```
if ($where === false) {
```
```
$builder = $this->db->table($this->table);
```
```
$builder->select('*');
```
```
$builder->join('tbl_kategori','tbl_kategori.id_kategori = tbl_buku.id_kategori','LEFT');
```
```
$builder->join('tbl_rak','tbl_rak.id_rak = tbl_buku.id_rak','LEFT');
```
```
$builder->orderBy('tbl_buku.judul_buku','ASC');
```
```
return $query = $builder->get();
```
```
} else {
```
```
$builder = $this->db->table($this->table);
```
```
$builder->select('*');
```
```
$builder->where($where);
```
```
$builder->join('tbl_kategori','tbl_kategori.id_kategori = tbl_buku.id_kategori','LEFT');
```
```
$builder->join('tbl_rak','tbl_rak.id_rak = tbl_buku.id_rak','LEFT');
```
```
$builder->orderBy('tbl_buku.judul_buku','ASC');
```
```
return $query = $builder->get();
```
```
}
```
```
}
```
```
public function saveDataBuku($data)
```
```
{
```
```
$builder = $this->db->table($this->table);
```
```
return $builder->insert($data);
```
```
}
```
```
public function updateDataBuku($data, $where)
```
```
{
```
```
$builder = $this->db->table($this->table);
```
```
$builder->where($where);
```
```
return $builder->update($data);
```
```
}
```
Jangan lupa lakukan inisiasi model buku di controller Admin.php yaaa..
D. Sesuaikan File Routes.php seperti di bawah ini :
Jangan lupa disimpan yaaa…
E. Membuat View untuk Module Buku
Selanjutnya buatlah tampilan untuk view dari master buku seperti tampilan di bawah ini
Setelah itu simpan dengan nama master-data-buku.php pada folder MasterBuku.
```
}
```
```
public function autoNumber() {
```
```
$builder = $this->db->table($this->table);
```
```
$builder->select("id_buku");
```
```
$builder->orderBy("id_buku", "DESC");
```
```
$builder->limit(1);
```
```
return $query = $builder->get();
```
```
}
```
```
}
```
?>
Jika sudah jadi silakan tambahkan baris kode berikut pada controller Admin.php
Selanjutnya buatlah tampilan input Buku seperti gambar!
Penamaan Field sebagai berikut
Judul Buku > judul_buku
Pengarang > pengarang
Penerbit > penerbit
Tahun > tahun
Jumlah Eksemplar > jumlah_eksemplar
Kategori Buku > kategori_buku
Keterangan > keterangan
Rak > rak
```
Cover Buku > cover_buku (type = file)
```
```
E-Book > e_book (type = file)
```
Setelah itu simpan dengan nama file input-buku.php di dalam folder MasterBuku.
Jangan lupa pada tag form tambahkan behavior dari form seperti pada gambar di bawah
```
ini :
```
Kemudian tambahkan kode berikut ini di dalam controller Admin.php.
Kemudian untuk proses simpan buku maka silakan tambahkan baris kode di bawah ini :
Perhatikan kode diatas, pada kode diatas terdapat validasi file cover buku dan e
book. Dimana file cover buku maksimal berukuran 1 Mb dan berekstensi
JPG/PNG. Maka selain itu akan dilakukan penolakan dan dikembalikan ke file
inputan. Dalam file e-book file dibatasi dengan 10 Mb dengan ekstensi file harus
PDF, maka selain itu akan ditolak. Untuk lebih detailnya dari validasi form kalian
bisa membaca pada documentasi codeigniter 4 secara online.
Pada kode diatas terjadi proses upload cover buku dan ebook sesuai dengan direktori
yang sudah ditentukan. Dimana direktorinya? Maka silakan tambahkan direktori baru
pada folder public/Assets. Tambahkan direktori baru dengan nama CoverBuku dan
E-Book!! File yang masuk juga akan diubah namanya jika cover maka akan diubah
seperti yang ada pada variabel namaFile1, jika e book maka akan diubah nama filenya
menjadi seperti yang ada pada variabel namaFile2.
Kode dibawahnya berfungsi untuk memanggil auto number seperti penjelasan
sebelumnya pada form master yang lain.
Pada kode diatas digunakan untuk menyimpan data dari form ke database seperti yang
sudah dilakukan pada form master lainnya.
Hapus Buku
Tuliskan baris kode dibawah ini pada controller Admin.php
```
Penjelasan dari kode diatas, sebelum data buku dilakukan penghapusan (soft delete)
```
maka terlebih dahulu harus dihapus file yang ada di dalam direktori cover dan e-book.
```
Maka digunakan kode unlink(). Unlink disini akan menghapus file yang ada
```
sebelumnya.
F. Tugas Mandiri
Pada tugas pertemuan kali ini silakan kalian kerjakan Form Edit Buku dan perintah untuk
Update Buku. Adapun ketentuan dan panduannya sebagai berikut :
1. Save as form input-buku.php dengan nama edit-buku.php di folder yang sama.
2. Modifikasi tampilannya menjadi seperti dibawah ini :
Perbedaan pada input buku nampak pada file upload cover buku dan e-book. Dimana
pada cover buku ditampilkan gambar cover buku sebelum di ubah dan file cover buku
```
tidak wajib diisi (not required). Begitu juga di file e-book, maka di e-book
```
ditampilkan dengan iframe untuk menampilkan file e-book sebelum diubah.
3. Ketentuan proses update sebagai berikut : jika file cover buku dan e-book tidak di
ubah atau tidak dipilih file baru maka tidak perlu dilakukan update dan validasi file,
hanya saja keterangan yang lain bisa diupdate sesuai data update yang ingin
dilakukan. Jika hanya file cover yang diupdate maka file cover lama akan terhapus
dan diganti dengan file cover yang baru, file e-book tidak terpengaruh sama sekali.
Jika hanya file e-book yang diupdate maka file e-book yang lama akan terhapus dan
diganti dengan file e-book yang baru, file cover tidak terpengaruh sama sekali. Jika
cover dan e-book diganti maka file cover dan e-book yang lama akan terhapus dan
diganti dengan file cover dan e-book yang baru.
BAB VII
FORM TRANSAKSI PEMINJAMAN
A. Deskripsi Pembelajaran
Pada bab ini kita akan membahas untuk pembuatan form transaksi peminjaman. Ada
beberapa hal yang harus dipastikan sebelum memulai bab ini, yaitu :
1. Database sudah dibuat dan selesai.
2. Template sudah diatur sebagaimana disampaikan di bab sebelumnya.
3. Paham akan alur CRUD yang sudah dibahas pada bab sebelumnya.
4. Seluruh proses CRUD sudah selesai.
B. Tujuan Pembelajaran
Mahasiswa diharapkan mampu :
1. Membuat form transaksi peminjaman
C. Membuat Model untuk Module Peminjaman
<?php
```
namespace App\Models;
```
```
use CodeIgniter\Model;
```
class M_Peminjaman extends Model
```
{
```
```
protected $table = 'tbl_peminjaman';
```
```
protected $tableTmp = 'tbl_temp_peminjaman';
```
```
protected $tableDetail = 'tbl_detail_peminjaman';
```
```
public function getDataPeminjaman($where = false)
```
```
{
```
```
if ($where === false) {
```
```
$builder = $this->db->table($this->table);
```
```
$builder->select('*');
```
```
$builder->orderBy('no_peminjaman','DESC');
```
```
return $query = $builder->get();
```
```
} else {
```
```
$builder = $this->db->table($this->table);
```
```
$builder->select('*');
```
```
$builder->where($where);
```
```
$builder->orderBy('no_peminjaman','DESC');
```
```
return $query = $builder->get();
```
```
}
```
```
}
```
```
public function getDataPeminjamanJoin($where = false)
```
```
{
```
```
if ($where === false) {
```
```
$builder = $this->db->table($this->table);
```
```
$builder->select('*');
```
```
$builder->join('tbl_anggota','tbl_anggota.id_anggota = tbl_peminjaman.id_anggota','LEFT');
```
```
$builder->join('tbl_admin','tbl_admin.id_admin = tbl_peminjaman.id_admin','LEFT');
```
```
$builder->orderBy('tbl_peminjaman.no_peminjaman','DESC');
```
```
if ($where === false) {
```
```
$builder = $this->db->table($this->table);
```
```
$builder->select('*');
```
```
$builder->join('tbl_anggota','tbl_anggota.id_anggota = tbl_peminjaman.id_anggota','LEFT');
```
```
$builder->join('tbl_admin','tbl_admin.id_admin = tbl_peminjaman.id_admin','LEFT');
```
```
$builder->orderBy('tbl_peminjaman.no_peminjaman','DESC');
```
```
return $query = $builder->get();
```
```
} else {
```
```
$builder = $this->db->table($this->table);
```
```
$builder->select('*');
```
```
$builder->where($where);
```
```
$builder->join('tbl_anggota','tbl_anggota.id_anggota = tbl_peminjaman.id_anggota','LEFT');
```
```
$builder->join('tbl_admin','tbl_admin.id_admin = tbl_peminjaman.id_admin','LEFT');
```
```
$builder->orderBy('tbl_peminjaman.no_peminjaman','DESC');
```
```
return $query = $builder->get();
```
```
}
```
```
}
```
```
public function getDataTemp($where = false)
```
```
{
```
```
if ($where === false) {
```
```
$builder = $this->db->table($this->tableTmp);
```
```
$builder->select('*');
```
```
return $query = $builder->get();
```
```
} else {
```
```
$builder = $this->db->table($this->tableTmp);
```
```
$builder->select('*');
```
```
$builder->where($where);
```
```
return $query = $builder->get();
```
```
}
```
```
}
```
```
public function getDataTempJoin($where = false)
```
```
{
```
```
if ($where === false) {
```
```
$builder = $this->db->table($this->tableTmp);
```
```
$builder->select('*');
```
```
$builder->join('tbl_buku','tbl_buku.id_buku = tbl_temp_peminjaman.id_buku','LEFT');
```
```
return $query = $builder->get();
```
```
} else {
```
```
$builder = $this->db->table($this->tableTmp);
```
```
$builder->select('*');
```
```
$builder->where($where);
```
```
$builder->join('tbl_buku','tbl_buku.id_buku = tbl_temp_peminjaman.id_buku','LEFT');
```
```
return $query = $builder->get();
```
```
}
```
```
}
```
```
public function saveDataPeminjaman($data)
```
```
{
```
```
$builder = $this->db->table($this->table);
```
```
return $builder->insert($data);
```
```
}
```
```
public function saveDataTemp($data)
```
```
{
```
```
$builder = $this->db->table($this->tableTmp);
```
```
return $builder->insert($data);
```
```
}
```
```
public function saveDataDetail($data)
```
```
{
```
Simpan pada folder Model dengan nama M_Peminjaman.php. Jangan lupa lakukan
inisisasi pada controller Admin.php
D. Sesuaikan Routes.php
```
public function saveDataTemp($data)
```
```
{
```
```
$builder = $this->db->table($this->tableTmp);
```
```
return $builder->insert($data);
```
```
}
```
```
public function saveDataDetail($data)
```
```
{
```
```
$builder = $this->db->table($this->tableDetail);
```
```
return $builder->insert($data);
```
```
}
```
```
public function updateDataPeminjaman($data, $where)
```
```
{
```
```
$builder = $this->db->table($this->table);
```
```
$builder->where($where);
```
```
return $builder->update($data);
```
```
}
```
```
public function updateDataDetail($data, $where)
```
```
{
```
```
$builder = $this->db->table($this->tableDetail);
```
```
$builder->where($where);
```
```
return $builder->update($data);
```
```
}
```
```
public function hapusDataTemp($where)
```
```
{
```
```
$builder = $this->db->table($this->tableTmp);
```
```
return $builder->delete($where);
```
```
}
```
```
}
```
?>
E. Membuat tampilan form peminjaman step 1
Simpan dengan nama peminjaman-step-1.php di dalam folder Transaksi.
Selanjutnya tambahkan baris kode berikut pada controller Admin.php
Selanjutnya kita buat file tampilan peminjaman step 2.
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
<div class="row">
<ol class="breadcrumb">
<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
<li>Transaksi</li>
<li class="active">Peminjaman</li>
</ol>
</div><!--/.row-->
<div class="row">
<div class="col-md-12">
<div class="panel panel-default">
<div class="panel-body">
<h3>Data Anggota</h3>
<hr />
<div class="form-group col-md-6">
<label>ID Anggota</label>
```
<br /><?= session()->get('idAgt');?>
```
</div>
```
<div style="clear:both;"></div>
```
<div class="form-group col-md-6">
<label>Nama Anggota</label>
```
<br /><?= $dataAnggota['nama_anggota'];?>
```
</div>
```
<div style="clear:both;"></div>
```
<br />
<h3>Keranjang Peminjaman Buku</h3>
<table data-toggle="table">
<thead>
<tr>
<th data-sortable="true">No</th>
<th data-sortable="true">Judul Buku</th>
<th data-sortable="true">Pengarang</th>
<th data-sortable="true">Penerbit</th>
<th data-sortable="true">Tahun</th>
<th data-sortable="true">Opsi</th>
</tr>
</thead>
<th data-sortable="true">Pengarang</th>
<th data-sortable="true">Penerbit</th>
<th data-sortable="true">Tahun</th>
<th data-sortable="true">Opsi</th>
</tr>
</thead>
<tbody>
<?php
```
$no = 0;
```
```
foreach($dataTemp as $data){
```
?>
<tr>
```
<td data-sortable="true"><?php echo $no=$no+1;?></td>
```
```
<td data-sortable="true"><?php echo $data['judul_buku'];?></td>
```
```
<td data-sortable="true"><?php echo $data['pengarang'];?></td>
```
```
<td data-sortable="true"><?php echo $data['penerbit'];?></td>
```
```
<td data-sortable="true"><?php echo $data['tahun'];?></td>
```
<td data-sortable="true">
```
<a href="#" onclick="doDelete('<?= sha1($data['id_buku']);?>')"><button
```
```
type="button" class="btn btn-warning"><span class="glyphicon glyphicon-trash"></span>
```
Hapus</button></a>
</td>
</tr>
```
<?php } ?>
```
</tbody>
</table>
<?php
```
if($jumlahTemp > 0){
```
?>
```
<br /><a href="<?= base_url('admin/simpan-transaksi-peminjaman');?>"><button class="btn
```
btn-primary btn-block">Simpan Transaksi Peminjaman Buku</button></a>
```
<?php } ?>
```
</div>
</div>
</div>
</div><!--/.row-->
<div class="row">
<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-body">
<table data-toggle="table" data-url="tables/data1.json" data-show-refresh="true" data-
show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1"
data-pagination="true" data-sort-name="name" data-sort-order="desc">
<thead>
<tr>
<th data-sortable="true">No</th>
<th data-sortable="true">Judul Buku</th>
<th data-sortable="true">Pengarang</th>
<th data-sortable="true">Penerbit</th>
<th data-sortable="true">Tahun</th>
<th data-sortable="true">Jumlah Eksemplar</th>
<th data-sortable="true">Kategori Buku</th>
<th data-sortable="true">Keterangan</th>
<th data-sortable="true">Rak</th>
<th data-sortable="true">Cover Buku</th>
<th data-sortable="true">E-Book</th>
<th data-sortable="true">Opsi</th>
</tr>
</thead>
<tbody>
<?php
<th data-sortable="true">E-Book</th>
<th data-sortable="true">Opsi</th>
</tr>
</thead>
<tbody>
<?php
```
$no = 0;
```
```
foreach($dataBuku as $data){
```
?>
<tr>
```
<td data-sortable="true"><?php echo $no=$no+1;?></td>
```
```
<td data-sortable="true"><?php echo $data['judul_buku'];?></td>
```
```
<td data-sortable="true"><?php echo $data['pengarang'];?></td>
```
```
<td data-sortable="true"><?php echo $data['penerbit'];?></td>
```
```
<td data-sortable="true"><?php echo $data['tahun'];?></td>
```
```
<td data-sortable="true"><?php echo $data['jumlah_eksemplar'];?></td>
```
```
<td data-sortable="true"><?php echo $data['nama_kategori'];?></td>
```
```
<td data-sortable="true"><?php echo $data['keterangan'];?></td>
```
```
<td data-sortable="true"><?php echo $data['nama_rak'];?></td>
```
<td data-sortable="true"><img src="/Assets/Cover_buku/<?php echo
```
$data['cover_buku'];?>" width="80px"></a></td>
```
```
<td data-sortable="true"><a href="/Assets/E-book/<?php echo $data['e_book'];?>"
```
```
target="_blank"><?php echo $data['e_book'];?></a></td>
```
<td data-sortable="true">
<?php
```
if($data['jumlah_eksemplar']!="0"){
```
?>
```
<a href="<?= base_url('admin/simpan-temp-
```
```
pinjam')."/".sha1($data['id_buku']);?>"><button type="button" class="btn btn-primary">Pinjam
```
Buku</button></a>
```
<?php } else echo "#"; ?>
```
</td>
</tr>
```
<?php } ?>
```
</tbody>
</table>
</div>
</div>
</div>
</div><!--/.row-->
</div>
<script type="text/javascript">
```
function doDelete(idDelete) {
```
```
swal({
```
```
title: "Hapus Data Peminjaman?",
```
```
text: "Data ini akan terhapus permanen!!",
```
```
icon: "warning",
```
```
buttons: true,
```
```
dangerMode: false,
```
```
})
```
```
.then(ok => {
```
```
if (ok) {
```
```
window.location.href = '<?= base_url() ?>/admin/hapus-temp/' + idDelete;
```
```
} else {
```
```
$(this).removeAttr('disabled')
```
```
}
```
```
})
```
```
}
```
</script>
Simpan file dengan nama peminjaman-step-2.php pada folder Transaksi.
Tambahkan kode dibawah ini pada controller Admin.php
Pada kode diatas setelah ID Anggota di POST dari form peminjaman step 1 maka akan
di setting sebagai session. Setelah itu dilakukan validasi dengan data peminjaman lain
apakah masih ada peminjaman sebelumnya yg belum selesai. Jika ada peminjaman
sebelumnya yang belum selesai atau status peminjaman masih berjalan maka tidak dapat
dilanjutkan proses ke step ke-2.
```
.then(ok => {
```
```
if (ok) {
```
```
window.location.href = '<?= base_url() ?>/admin/hapus-temp/' + idDelete;
```
```
} else {
```
```
$(this).removeAttr('disabled')
```
```
}
```
```
})
```
```
}
```
</script>
Selain itu maka akan masuk ke step ke-2 peminjaman buku. Didalam form peminjaman
step ke-2 ini ada kaitannya dengan tabel sementara peminjaman atau keranjang
peminjaman. Dan ada proses yang akan berjalan di dalamnya. Apa prosesnya? Prosesnya
seperti tertera pada kode program dibawah ini :
Yang pertama proses simpan-temp-pinjam. Proses ini bertujuan untuk memasukkan
buku yang dipilih ke tabel temporari peminjaman.
Tuliskan kode ini pada controller Admin.php
Pada proses awal disini kembali akan ada beberapa validasi seperti terlihat pada baris
kode diatas.
Proses penyimpanan ke tabel temporari ada disini. Jadi buku yang dimasukkan ke tabel
temporari otomatis stok ketersediaan bukunya akan dikurangin 1.
Yang kedua proses penghapusan dari tabel sementara. Perhatikan baris kode berikut
```
ini :
```
Tambahkan pada controller Admin.php
Pada kode diatas maka buku yang dihapus dari tabel peminjaman maka stok bukunya
akan dikembalikan dengan di tambah 1 eksemplar dari stok awal.
Yang terakhir adalah proses simpan-peminjaman.
Sebelumnya maka kita akan melakukan proses instalasi composer QR Code Generator
dari Endrodi dengan mengetikkan perintah dibawah ini melalui terminal, pastikan
hentikan dulu php spark server nya dengan tekan ctrl+C :
composer require endroid/qr-code
Setelah terinstal di project kita maka lakukan inisiasi di baris atas controller Admin.php
Siapkan logo apa saja taruh di Assets. Wajib PNG dan Kotak. Disini saya gunakan logo
UBSI.
Lanjut, kita masukkan kode di controller Admin.php
Nah kita lihat disini, disini akan disetting tanggal kembali adalah H+7 dari tanggal
pinjam. Perintah dapat dilihat pada variabel kembali.
Kemudian kita akan membuat QR Code peminjaman buku dengan menambahkan logo
UBSI di dalam QR Code yang kita buat, prosesnya berada pada variabel result. $dataQR
dan labelQR kita isikan dengan idpeminjaman. Kemudian QR Code ini akan disimpan di
folder Assets/qr_code. Siapkan folder qr_code nya di dalam folder Assets yaaa…
Selanjutnya data akan disimpan ke database dan data didalam tabel temp peminjaman
akan dikosongkan. Sukses deh peminjaman bukunya.
F. Tugas Mandiri
Buatlah data peminjaman buku dengan tampilan seperti dibawah ini beserta tampilan
detailnya!