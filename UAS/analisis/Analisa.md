# Analisis Kreativitas dan Seni

## 1.Studi Kasus
Sebagai contoh implementasi, studi kasus akan berfokus pada seorang seniman digital bernama "Andi", yang ingin mengembangkan keterampilannya dan memperluas jangkauan audiensnya:

- Masalah: Andi kesulitan menemukan platform yang memungkinkan dia untuk berbagi karyanya, mendapatkan feedback, serta menemukan inspirasi baru.

- Solusi: Dengan menggunakan aplikasi yang dikembangkan, Andi dapat:

    - Mengunggah karyanya ke galeri online.

    - Berinteraksi dengan komunitas seni yang memberikan feedback konstruktif.

    - Menggunakan fitur inspirasi harian untuk mendapatkan ide baru.

    - Berkolaborasi dengan seniman lain melalui fitur komunitas.

- Hasil: Setelah menggunakan aplikasi ini selama beberapa bulan, Andi mendapatkan lebih banyak pengikut, meningkatkan keterampilannya, dan bahkan berhasil menjual beberapa karyanya melalui fitur marketplace di aplikasi.

## 2. 5W1H
- What (Apa)?

    - Aplikasi berbasis seni yang memungkinkan seniman untuk membuat, berbagi, dan memasarkan karya mereka.

- Who (Siapa)?

    - Seniman digital, kreator konten, pelajar seni, penggemar seni, dan galeri.

- When (Kapan)?

    - Kapan saja, terutama di era digital saat ini yang membutuhkan platform online untuk eksposur lebih luas.

- Where (Di mana)?

    - Platform digital yang dapat diakses melalui aplikasi web dan mobile.

- Why (Mengapa)?

    - Untuk membantu seniman mengatasi keterbatasan dalam berbagi karya, berkolaborasi, dan mendapatkan inspirasi.

- How (Bagaimana)?

    - Dengan mengembangkan aplikasi yang menyediakan fitur komunitas, alat desain digital, marketplace seni, dan inspirasi harian.

## 3.Latar belakang
Seni dan kreativitas adalah elemen penting dalam pengembangan budaya dan ekspresi diri manusia. Dalam era digital saat ini, banyak seniman dan kreator menghadapi tantangan dalam mencari platform untuk menampilkan karya mereka, berkolaborasi dengan sesama kreator, dan memasarkan hasil karya mereka. Teknologi digital membuka peluang untuk mengatasi tantangan ini dengan menyediakan alat dan platform yang memungkinkan lebih banyak orang terlibat dalam proses kreatif. Pengembangan aplikasi berbasis seni yang dapat diakses oleh berbagai kalangan akan menjadi solusi yang membantu seniman dan kreator memaksimalkan potensi mereka.

## 4.Idenfitikasi Masalah
Beberapa masalah yang dihadapi oleh para seniman dan kreator di era digital saat ini antara lain:

- Keterbatasan platform untuk berbagi karya seni secara efektif.
- Kurangnya alat yang mudah diakses untuk menciptakan karya seni digital bagi pemula.
- Keterbatasan jaringan untuk berkolaborasi dengan kreator lain atau memasarkan karya seni.
- Sulitnya mendapatkan inspirasi kreatif atau motivasi untuk terus berkarya secara konsisten.

## 5.Rumusan Masalah
Berdasarkan identifikasi masalah di atas, rumusan masalah yang dapat diambil adalah:

- Bagaimana mengembangkan platform yang memfasilitasi seniman untuk membuat, berbagi, dan mempromosikan karya seni mereka?
- Bagaimana aplikasi dapat mendukung pengguna dari berbagai tingkat keahlian untuk mengakses alat-alat seni digital?
- Bagaimana aplikasi dapat memberikan inspirasi dan motivasi kepada pengguna untuk meningkatkan kreativitas mereka?

## 6.Tujuan Penelitian
Tujuan dari pengembangan aplikasi ini adalah:

- Membuat platform yang memungkinkan pengguna membuat dan berbagi karya seni digital.
- Menyediakan fitur komunitas yang memungkinkan pengguna berkolaborasi, mendiskusikan karya, dan memperluas jaringan kreatif.
- Menyediakan alat bantu digital yang mudah diakses untuk pengguna dari berbagai tingkat keahlian, mulai dari pemula hingga profesional.
- Menginspirasi pengguna melalui fitur inspirasi harian dan latihan kreatif.

## 7.Metode Analisis
### 7.1.SWOT analisis
- Strengths (Kekuatan): Platform yang memungkinkan seniman dari berbagai tingkatan untuk mengakses alat digital dan berbagi karya mereka dengan mudah.
- Weaknesses (Kelemahan): Potensi keterbatasan fitur dalam mengakomodasi semua jenis seni (misalnya, seni tradisional vs seni digital).
- Opportunities (Peluang): Peningkatan adopsi platform digital oleh seniman, serta meningkatnya minat publik pada seni dan kreativitas.
- Threats (Ancaman): Persaingan dengan platform seni digital yang sudah mapan, serta risiko keamanan data karya seni pengguna.

### 7.2.Business Model Canvas(BMC)
- Key Partners: Seniman, kreator konten, komunitas seni, sponsor, dan galeri seni.
- Key Activities: Pengembangan fitur digital untuk membuat dan berbagi seni, penyediaan komunitas online, dan pemasaran.
- Value Propositions: Aplikasi yang mendukung semua level pengguna untuk berkreasi dan terhubung dengan komunitas seni global.
- Customer Relationships: Komunitas kreatif yang mendukung, integrasi sosial media, dan fitur feedback karya.
- Customer Segments: Seniman digital, kreator konten, pelajar seni, penggemar seni, dan galeri.
- Key Resources: Infrastruktur teknologi, alat desain seni digital, tim pengembang.
- Channels: Aplikasi web dan mobile, media sosial, kolaborasi dengan sekolah seni.
- Cost Structure: Pengembangan dan pemeliharaan aplikasi, promosi, biaya server.
- Revenue Streams: Pembelian fitur premium, komisi dari penjualan karya, iklan.

### 7.3.Analisis GAP
Analisis GAP akan mengidentifikasi kesenjangan antara kondisi saat ini (seniman yang belum memiliki platform efektif) dan kondisi yang diinginkan (platform aplikasi seni yang mendukung semua aspek seni digital). Fokus utama adalah mengatasi masalah seperti keterbatasan alat digital dan keterhubungan antar seniman dalam satu ekosistem digital.

## 8.Peracangan Sistem
### 8.1.Entity Relationship Diagram (ERD)
- **Entitas** 

    1.Pengguna (ID_Pengguna, Nama, Email, Password, Level Pengguna)

    2.Karya_Seni (ID_Karya, Judul, Tanggal_Upload, ID_Pengguna, Kategori, File_Karya).

    3.Komentar (ID_Komentar, ID_Karya, ID_Pengguna, Isi_Komentar, Tanggal_Komentar).

    4.Inspirasi (ID_Inspirasi, Isi_Inspirasi, Tanggal)

Hubungan antar entitas:

- Pengguna dapat mengunggah banyak karya seni.
- Karya seni dapat memiliki banyak komentar dari pengguna.
- Setiap karya seni diunggah oleh satu pengguna.

### 8.2 Flowchart System
1.**Pengguna masuk/login** -> validasi pengguna.

2.**Dashboard**

- opsiOpsi untuk membuat karya seni baru → buka editor seni digital.
- Lihat galeri seni → tampilkan karya seni pengguna lain.
- Inspirasi harian → tampilkan konten inspirasi.
- Opsi untuk berkomentar pada karya seni → kirim komentar.

3.**Pengguna Logout**

## 9.Implementasi Teknologi
### a.Laravel
- Laravel digunakan sebagai framework backend untuk mengelola autentikasi pengguna, validasi input, dan mengatur rute aplikasi.
- Laravel juga akan menangani komunikasi dengan database MySQL, menyimpan data pengguna, karya seni, komentar, dan inspirasi.

### b.Docker
- Docker digunakan untuk containerisasi aplikasi agar pengembangan, pengujian, dan deployment lebih efisien dan dapat berjalan di berbagai lingkungan.
- Ini akan membantu tim pengembang dalam memastikan lingkungan pengembangan dan produksi konsisten.

### c.MySQL
- MySQL digunakan sebagai sistem database relasional untuk menyimpan semua data yang terkait dengan pengguna, karya seni, dan elemen lain dari aplikasi.
- Struktur database akan mengacu pada ERD yang telah dibuat sebelumnya untuk memastikan integritas data.