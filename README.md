# SuperGestão

Essa é uma app monolitica


### 1. Subindo os containers
~~~
./vendor/bin/sail up -d
~~~

### 2. Preparando o Banco de Dados
- Rodando as Migrations
~~~~
php artisan migrate
~~~~

- Rodando as Seeders
~~~~
php artisan db:seed
~~~~

- Caso ja tenha rodado as Migrations e as Seeders e quis acrescentar algo, para corrigir
~~~~
php artisan migrate:refresh --seed
~~~~

### 3. Rodando o frontend com Vite
- Dentro do container de frontend
~~~~
npm run dev
~~~~

