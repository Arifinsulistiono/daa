# Analisis Kreativitas dan Seni

## 1.Latar belakang
Seni dan kreativitas adalah elemen penting dalam pengembangan budaya dan ekspresi diri manusia. Dalam era digital saat ini, banyak seniman dan kreator menghadapi tantangan dalam mencari platform untuk menampilkan karya mereka, berkolaborasi dengan sesama kreator, dan memasarkan hasil karya mereka. Teknologi digital membuka peluang untuk mengatasi tantangan ini dengan menyediakan alat dan platform yang memungkinkan lebih banyak orang terlibat dalam proses kreatif. Pengembangan aplikasi berbasis seni yang dapat diakses oleh berbagai kalangan akan menjadi solusi yang membantu seniman dan kreator memaksimalkan potensi mereka.

## 2.Idenfitikasi Masalah
Beberapa masalah yang dihadapi oleh para seniman dan kreator di era digital saat ini antara lain:

- Keterbatasan platform untuk berbagi karya seni secara efektif.
- Kurangnya alat yang mudah diakses untuk menciptakan karya seni digital bagi pemula.
- Keterbatasan jaringan untuk berkolaborasi dengan kreator lain atau memasarkan karya seni.
- Sulitnya mendapatkan inspirasi kreatif atau motivasi untuk terus berkarya secara konsisten.

## 3.Rumusan Masalah
Berdasarkan identifikasi masalah di atas, rumusan masalah yang dapat diambil adalah:

- Bagaimana mengembangkan platform yang memfasilitasi seniman untuk membuat, berbagi, dan mempromosikan karya seni mereka?
- Bagaimana aplikasi dapat mendukung pengguna dari berbagai tingkat keahlian untuk mengakses alat-alat seni digital?
- Bagaimana aplikasi dapat memberikan inspirasi dan motivasi kepada pengguna untuk meningkatkan kreativitas mereka?

## 4.Tujuan Penelitian
Tujuan dari pengembangan aplikasi ini adalah:

- Membuat platform yang memungkinkan pengguna membuat dan berbagi karya seni digital.
- Menyediakan fitur komunitas yang memungkinkan pengguna berkolaborasi, mendiskusikan karya, dan memperluas jaringan kreatif.
- Menyediakan alat bantu digital yang mudah diakses untuk pengguna dari berbagai tingkat keahlian, mulai dari pemula hingga profesional.
- Menginspirasi pengguna melalui fitur inspirasi harian dan latihan kreatif.

## 5.Metode Analisis
### 5.1.SWOT analisis
- Strengths (Kekuatan): Platform yang memungkinkan seniman dari berbagai tingkatan untuk mengakses alat digital dan berbagi karya mereka dengan mudah.
- Weaknesses (Kelemahan): Potensi keterbatasan fitur dalam mengakomodasi semua jenis seni (misalnya, seni tradisional vs seni digital).
- Opportunities (Peluang): Peningkatan adopsi platform digital oleh seniman, serta meningkatnya minat publik pada seni dan kreativitas.
- Threats (Ancaman): Persaingan dengan platform seni digital yang sudah mapan, serta risiko keamanan data karya seni pengguna.

### 5.2.Business Model Canvas(BMC)
- Key Partners: Seniman, kreator konten, komunitas seni, sponsor, dan galeri seni.
- Key Activities: Pengembangan fitur digital untuk membuat dan berbagi seni, penyediaan komunitas online, dan pemasaran.
- Value Propositions: Aplikasi yang mendukung semua level pengguna untuk berkreasi dan terhubung dengan komunitas seni global.
- Customer Relationships: Komunitas kreatif yang mendukung, integrasi sosial media, dan fitur feedback karya.
- Customer Segments: Seniman digital, kreator konten, pelajar seni, penggemar seni, dan galeri.
- Key Resources: Infrastruktur teknologi, alat desain seni digital, tim pengembang.
- Channels: Aplikasi web dan mobile, media sosial, kolaborasi dengan sekolah seni.
- Cost Structure: Pengembangan dan pemeliharaan aplikasi, promosi, biaya server.
- Revenue Streams: Pembelian fitur premium, komisi dari penjualan karya, iklan.

### 5.3.Analisis GAP
Analisis GAP akan mengidentifikasi kesenjangan antara kondisi saat ini (seniman yang belum memiliki platform efektif) dan kondisi yang diinginkan (platform aplikasi seni yang mendukung semua aspek seni digital). Fokus utama adalah mengatasi masalah seperti keterbatasan alat digital dan keterhubungan antar seniman dalam satu ekosistem digital.

## 6.Peracangan Sistem
### 6.1.Entity Relationship Diagram (ERD)
- **Entitas** 

    1.Pengguna (ID_Pengguna, Nama, Email, Password, Level Pengguna)

    2.Karya_Seni (ID_Karya, Judul, Tanggal_Upload, ID_Pengguna, Kategori, File_Karya).

    3.Komentar (ID_Komentar, ID_Karya, ID_Pengguna, Isi_Komentar, Tanggal_Komentar).

    4.Inspirasi (ID_Inspirasi, Isi_Inspirasi, Tanggal)

Hubungan antar entitas:

- Pengguna dapat mengunggah banyak karya seni.
- Karya seni dapat memiliki banyak komentar dari pengguna.
- Setiap karya seni diunggah oleh satu pengguna.

### 6.2 Flowchart System
1.**Pengguna masuk/login** -> validasi pengguna.

2.**Dashboard**

- opsiOpsi untuk membuat karya seni baru → buka editor seni digital.
- Lihat galeri seni → tampilkan karya seni pengguna lain.
- Inspirasi harian → tampilkan konten inspirasi.
- Opsi untuk berkomentar pada karya seni → kirim komentar.

3.**Pengguna Logout**

## Implementasi Teknologi
### a.Laravel
- Laravel digunakan sebagai framework backend untuk mengelola autentikasi pengguna, validasi input, dan mengatur rute aplikasi.
- Laravel juga akan menangani komunikasi dengan database MySQL, menyimpan data pengguna, karya seni, komentar, dan inspirasi.

### b.Docker
- Docker digunakan untuk containerisasi aplikasi agar pengembangan, pengujian, dan deployment lebih efisien dan dapat berjalan di berbagai lingkungan.
- Ini akan membantu tim pengembang dalam memastikan lingkungan pengembangan dan produksi konsisten.

### c.MySQL
- MySQL digunakan sebagai sistem database relasional untuk menyimpan semua data yang terkait dengan pengguna, karya seni, dan elemen lain dari aplikasi.
- Struktur database akan mengacu pada ERD yang telah dibuat sebelumnya untuk memastikan integritas data.