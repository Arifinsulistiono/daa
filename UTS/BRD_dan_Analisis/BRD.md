# Business Requirements Document(BRD)
## Sistem Informasi Data Guru
### Project Start Date:15 November 2024
### client:Kementrian Pendidikan
### Modules:Data Guru,Absensi,Pengajian

## Introduction
### 1.1 Purpose of Document
Dokumen ini menjelaskan kebutuhan bisnis dan alur kerja sistem untuk pengelolaan data guru di seluruh sekolah dalam cakupan nasional. Sistem ini dirancang untuk memudahkan pengelolaan informasi guru, absensi, penggajian.

### 1.2 Project Scope
Proyek ini mencakup pengembangan beberapa modul inti, yaitu:

•Data Guru: Pengelolaan data personal dan profesional guru.

•Absensi: Pencatatan kehadiran guru.

•Penggajian: Sistem penggajian berbasis kehadiran dan kinerja.

## System Requiments
### 2.1 Business Flow
Alur bisnis utama melibatkan:

1.Pengumpulan dan validasi data guru di tiap sekolah.

2.Integrasi dengan sistem absensi untuk mengelola kehadiran.

3.Pengolahan data absensi dan kinerja untuk penggajian.

## 3.Business Requiments
### 3.1 Functional Requiments
#### 3.1.1 Modul Data Guru
| No   |             Kebutuhan Modul | Status    |
|:----:|:---------------------------:|:---------:|
| 1    |Pencatatan data personal guru (nama, NIK, alamat, dsb) | Modul Baru   |
| 2    |  Pencatatan data pendidikan dan sertifikasi guru | Modul Baru    |
| 3    |  Update dan validasi data secara berkala | Modul Baru|
| 4    |  Laporan data guru per sekolah dan per wilayah    |  Modul Baru  |


#### 3.1.2 Modul Absensi
| No   |             Kebutuhan Modul | Status    |
|:----:|:---------------------------:|:---------:|
| 1    |Pencatatan kehadiran harian guru | Modul Baru   |
| 2    |  integrasi dengan perangkat absensi fingerprint| Integritas |
| 3    |  Laporan kehadiran per bulan | Modul Baru|
| 4    |  Pengingat otomatis untuk absen via aplikasi mobile  |  Modul Baru  |

#### 3.1.3 Modul Pengajian
| No   |             Kebutuhan Modul | Status    |
|:----:|:---------------------------:|:---------:|
| 1    | Pencatatan komponen gaji (pokok, tunjangan, dsb)| Modul Baru   |
| 2    |  Penghitungan gaji berdasarkan absensi dan kinerja| Modul Baru |
| 3    |  Laporan gaji bulanan dan tahunan| Modul Baru|
| 4    |  Integrasi dengan sistem perbankan untuk pembayaran  |  Intergitas |

## 4.Approval
| Role |    Name | Signature       |  Date |
|:----:|:---------------------------:|:---------:|:-----:|
| Project Manager | Nama PM| (Signature) |  (Date)  |
| Client  |  Nama Client| (Signature) | (Date) |

## 5.Timeline(Initial Timeline)
|   Phase   |   Deliverable     |
|:---------:|:-----------------:|
|Analysis & Design|Business Requirement Document (BRD)|
|BRD Feedback|BRD Review & Signoff|
|Development|Module Development|
|UAT|User Acceptance Testing (UAT) Document|
|Training|User Manual & Training Sessions|
|Go Live|Launch of System|
