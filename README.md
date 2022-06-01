Penjelasan Sistem

silahkan jalankan :

1. php artisan migrate
2. php artisan db:seed UserTableSeeder

1. [POST] http://127.0.0.1:8000/api/register
   
   admin dapat membuat user dengan menggunakan http://127.0.0.1:8000/api/register , ada pun variable yang di butuhkan :
   1. name (string)
   2. email (string)
   3. password (integer)
   4. role (string)
2. [POST] http://127.0.0.1:8000/api/putin

   admin dapat menambahkan data item berdasarkan koli dan user menggunakan http://127.0.0.1:8000/api/putin ada pun variable yang di butuhkan :
   1. name (string)
   2. qty (integer)
   3. user_id (integer)
   4. koli_id (integer)
3. [POST] http://127.0.0.1:8000/api/takeout/{id}

   masukkan {id} dengan id yang ingin di ubah di tabel item.
   admin dapat merubah data item menggunakan http://127.0.0.1:8000/api/takeout/1 , untuk mengubah data id 1 pada tabel item.
   
4. [GET] http://127.0.0.1:8000/api/koli/common/{id}

   masukkan {id} dengan id user yang ingin di tampilkan di tabel koli dan item berdasarkan id di tabel user.
   admin dapat melihat list barang yang tersedia di 2 user pada tabel koli dan item menggunakan http://127.0.0.1:8000/api/koli/common/1 
   
