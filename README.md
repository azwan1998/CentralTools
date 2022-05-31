Penjelasan Sistem

silahkan jalankan :

1. php artisan migrate
2. php artisan db:seed

1. [POST] http://127.0.0.1:8000/api/register
   
   admin dapat membuat user dengan menggunakan http://127.0.0.1:8000/api/register , ada pun variable yang di butuhkan :
   1. name
   2. email
   3. password
   4. role
2. [POST] http://127.0.0.1:8000/api/putin

   admin dapat menambahkan data item berdasarkan koli dan user menggunakan http://127.0.0.1:8000/api/putin ada pun variable yang di butuhkan :
   1. nama
   2. qty
   3. user_id
   4. koli_id
3. [POST] http://127.0.0.1:8000/api/takeout/{id}

   masukkan {id} dengan id yang ingin di ubah di tabel item.
   admin dapat merubah data item menggunakan http://127.0.0.1:8000/api/takeout/1 , untuk mengubah data id 1 pada tabel item.
   
4. [GET] http://127.0.0.1:8000/api/koli/common/{id}

   masukkan {id} dengan id user yang ingin di tampilkan di tabel koli dan item berdasarkan id di tabel user.
   admin dapat melihat list barang yang tersedia di 2 user pada tabel koli dan item menggunakan http://127.0.0.1:8000/api/koli/common/1 
   
