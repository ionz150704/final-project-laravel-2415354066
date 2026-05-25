# Final Project Aplikasi Berbasis Laravel - Dokumentasi API

## Identitas Mahasiswa

- **Nama:** Putu Rion Aditya Gunawan
- **NIM:** 2415354066
- **Kelas/Rombel:** TRPL 4B
- **Tanggal Praktikum:** 25 Mei 2026

---

## Teknologi & Tools yang Digunakan

- **Sistem Operasi:** Windows 11
- **Bahasa Pemrograman:** PHP (Laravel Framework)
- **Database:** MySQL / phpMyAdmin
- **Tools Pengujian API:** Thunder Client / Postman
- **Code Editor & Version Control:** VS Code & Git

---

## Daftar Endpoint API

### A. Modul Customer

| No | HTTP Method | Endpoint | Deskripsi | Status Dokumentasi |
|:--:|:-----------:|:---------|:----------|:------------------:|
| 1 | `GET` | `/customers/{id}` | Mengambil detail data satu pelanggan berdasarkan ID | [ ] Selesai |
| 2 | `POST` | `/customers` | Menambahkan data pelanggan baru ke dalam database | [ ] Selesai |
| 3 | `PUT` | `/customers/{id}` | Memperbarui keseluruhan data pelanggan berdasarkan ID | [ ] Selesai |
| 4 | `DELETE` | `/customers/{id}` | Menghapus data pelanggan dari database | [ ] Selesai |
| 5 | `GET` | `/customers-next-id` | Mendapatkan ID atau nomor urut selanjutnya untuk pelanggan baru | [ ] Selesai |
| 6 | `GET` | `/customers/status/{status}` | Mengambil daftar pelanggan berdasarkan status tertentu | [ ] Selesai |
| 7 | `PATCH` | `/customers/{id}/change-status` | Mengubah status pelanggan secara spesifik (parsial) | [ ] Selesai |

### B. Modul Service

| No | HTTP Method | Endpoint | Deskripsi | Status Dokumentasi |
|:--:|:-----------:|:---------|:----------|:------------------:|
| 8 | `GET` | `/services/{id}` | Mengambil detail data layanan berdasarkan ID | [ ] Selesai |
| 9 | `POST` | `/services` | Menambahkan jenis layanan baru | [ ] Selesai |
| 10 | `PUT` | `/services/{id}` | Memperbarui data layanan yang sudah ada berdasarkan ID | [ ] Selesai |
| 11 | `DELETE` | `/services/{id}` | Menghapus data layanan dari sistem | [ ] Selesai |

### C. Modul Subscription

| No | HTTP Method | Endpoint | Deskripsi | Status Dokumentasi |
|:--:|:-----------:|:---------|:----------|:------------------:|
| 12 | `GET` | `/subscriptions` | Mengambil semua daftar *subscription* yang ada di sistem | [ ] Selesai |
| 13 | `GET` | `/subscriptions/{id}` | Mengambil detail satu data *subscription* berdasarkan ID | [ ] Selesai |
| 14 | `POST` | `/subscriptions` | Membuat data *subscription* baru untuk *customer* | [ ] Selesai |
| 15 | `PATCH` | `/subscriptions/{id}/change-status` | Memperbarui status *subscription* | [ ] Selesai |

---

## Langkah-Langkah Pengujian Endpoint

1. Pastikan *local server* database (MySQL via phpMyAdmin/XAMPP/Laragon) sudah aktif.
2. Jalankan perintah `php artisan serve` pada terminal VS Code untuk mengaktifkan server lokal Laravel.
3. Buka ekstensi **Thunder Client** di VS Code.
4. Masukkan URL endpoint (sesuaikan domain lokal/port, misalnya: `http://localhost:8000` atau dengan tambahan *prefix* `/api` jika diatur di `api.php`).
5. Pilih HTTP Method yang sesuai, isi *Request Body* (jika bertipe POST/PUT/PATCH), lalu klik **Send**.
6. Ambil screenshot hasil *Response Body* beserta *HTTP Status Code*-nya untuk dokumentasi di bawah ini.

---

## Dokumentasi Hasil Pengujian (Screenshot)

*(Ganti teks placeholder di bawah dengan tag gambar atau screenshot dari Thunder Client)*

### Modul Customer

#### 1. Get Single Customer (`GET /customers/{id}`)
> ![Get Single Customer](https://placehold.co/600x400?text=Screenshot+GET+Customer)

#### 2. Create Customer (`POST /customers`)
> ![Create Customer](https://placehold.co/600x400?text=Screenshot+POST+Customer)

#### 3. Update Customer (`PUT /customers/{id}`)
> ![Update Customer](https://placehold.co/600x400?text=Screenshot+PUT+Customer)

#### 4. Delete Customer (`DELETE /customers/{id}`)
> ![Delete Customer](https://placehold.co/600x400?text=Screenshot+DELETE+Customer)

#### 5. Get Next Customer ID (`GET /customers-next-id`)
> ![Get Next Customer ID](https://placehold.co/600x400?text=Screenshot+GET+Next+ID)

#### 6. Get Customers by Status (`GET /customers/status/{status}`)
> ![Get Customers by Status](https://placehold.co/600x400?text=Screenshot+GET+Customer+by+Status)

#### 7. Change Customer Status (`PATCH /customers/{id}/change-status`)
> ![Change Customer Status](https://placehold.co/600x400?text=Screenshot+PATCH+Customer+Status)

---

### Modul Service

#### 8. Get Single Service (`GET /services/{id}`)
> ![Get Single Service](https://placehold.co/600x400?text=Screenshot+GET+Service)

#### 9. Create Service (`POST /services`)
> ![Create Service](https://placehold.co/600x400?text=Screenshot+POST+Service)

#### 10. Update Service (`PUT /services/{id}`)
> ![Update Service](https://placehold.co/600x400?text=Screenshot+PUT+Service)

#### 11. Delete Service (`DELETE /services/{id}`)
> ![Delete Service](https://placehold.co/600x400?text=Screenshot+DELETE+Service)

---

### Modul Subscription

#### 12. Get All Subscriptions (`GET /subscriptions`)
> ![Get All Subscriptions](https://placehold.co/600x400?text=Screenshot+GET+All+Subscriptions)

#### 13. Get Single Subscription (`GET /subscriptions/{id}`)
> ![Get Single Subscription](https://placehold.co/600x400?text=Screenshot+GET+Single+Subscription)

#### 14. Create Subscription (`POST /subscriptions`)
> ![Create Subscription](https://placehold.co/600x400?text=Screenshot+POST+Subscription)

#### 15. Change Subscription Status (`PATCH /subscriptions/{id}/change-status`)
> ![Change Subscription Status](https://placehold.co/600x400?text=Screenshot+PATCH+Subscription+Status)