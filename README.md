<h1>Explanation</h1>

please run:

1. php artisan migrate
2. php artisan db:seed UserTableSeeder

1. [POST] http://127.0.0.1:8000/api/register
   
   admin can create user(s), using: http://127.0.0.1:8000/api/register 
   </br> The variables needed are:
   1. name (string)
   2. email (string)
   3. password (integer)
   4. role (string)
2. [POST] http://127.0.0.1:8000/api/putin

   admin can put in item(s) to koli under user, using: http://127.0.0.1:8000/api/putin 
   </br>The variables needed are:
   1. name (string)
   2. qty (integer)
   3. user_id (integer)
   4. koli_id (integer)
3. [POST] http://127.0.0.1:8000/api/takeout/{id}

   enter {id} with id you want to update in item table.
   admin can update item data list using: http://127.0.0.1:8000/api/takeout/1 , to update data from id 1 in item table. 
   </br>The variables needed are:
   1. name (string)
   2. qty (integer)
   3. user_id (integer)
   4. koli_id (integer)
   
4. [GET] http://127.0.0.1:8000/api/koli/common/{id}

   enter {id} with the user id you want to display in the koli table and the item table based on the id in the user table.
   admin can list all common koli of 2 users, and can see the list, using: http://127.0.0.1:8000/api/koli/common/1 
   
 </br>
 In addition to the task commands above, admin can also do the following commands:
 
 1. 1. [GET] http://127.0.0.1:8000/api/item/remove/{id} => to remove data from item table
    2. [GET] http://127.0.0.1:8000/api/koli/remove/{id} => to remove data from koli table
    3. [GET] http://127.0.0.1:8000/api/user/remove/{id} => to remove data from user table
   
   Admin can remove data from the item, koli, and user table using the link above, by entering the id of the data you want to delete.
 
 2. [POST]  http://127.0.0.1:8000/api/putin/koli
 
   admin can put in koli(s) under user, using: http://127.0.0.1:8000/api/putin/koli  
   </br>The variables needed are:
   1. koli (string)
   2. user_id (integer)

 3. [GET] http://127.0.0.1:8000/api/user
 
   admin can display all registered users in the user table, using: http://127.0.0.1:8000/api/user
 
   
