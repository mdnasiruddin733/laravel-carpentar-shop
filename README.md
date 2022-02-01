<h1>Project Setup</h1>

***1) Create a brand new database and give it name 'wood'***

***2) Run the following commands sequentially***
> composer dump-autoload

> npm install

> npm run dev

>php artisan migrate:fresh --seed 

***3) Delete the storage folder inside public folder and run the following command***

> php artisan storage:link 

***4) Run the final command***
>php artisan serve