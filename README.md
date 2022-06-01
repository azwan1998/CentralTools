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
   ada pun variable yang di butuhkan :
   1. name (string)
   2. qty (integer)
   3. user_id (integer)
   4. koli_id (integer)
   
4. [GET] http://127.0.0.1:8000/api/koli/common/{id}

   masukkan {id} dengan id user yang ingin di tampilkan di tabel koli dan item berdasarkan id di tabel user.
   admin dapat melihat list barang yang tersedia di 2 user pada tabel koli dan item menggunakan http://127.0.0.1:8000/api/koli/common/1 
   
   
 Selain perintah task diatas admin juga bisa melakukan beberapa perintah selain task, antara lain :
 
 1. 1. [POST] http://127.0.0.1:8000/api/item/remove/{id} => untuk meremove data pada tabel item
    2. [POST] http://127.0.0.1:8000/api/koli/remove/{id} => untuk meremove data pada tabel koli
    3. [POST] http://127.0.0.1:8000/api/user/remove/{id} => untuk meremove data pada tabel user
   
   admin dapat melakukan remove data pada tabel item, koli, dan user dengan menggunakan link diatas, dengan menambahkan id data yang ingin di hapuskan
 
 2.[POST]  http://127.0.0.1:8000/api/putin/koli
 
  admin dapat menambahkan data koli berdasarkan user menggunakan http://127.0.0.1:8000/api/putin/koli  , ada pun variable yang di butuhkan :
   1. koli (string)
   2. user_id (integer)

 2.[GET] http://127.0.0.1:8000/api/user
 
 admin dapat menampilkan seluruh user yang sudah terdaftar di tabel user.
 
   
