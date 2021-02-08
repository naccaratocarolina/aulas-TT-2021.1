# Liber
Repositório criado com objetivo de ser usado como exemplo nas aulas de Data Binding e Autenticação do Treinamento Técnico da EJCM 2021.1

## Frameworks utilizadas
- Ionic
- Laravel

## Instruções
* Clone o repositório
```bash
git clone https://github.com/naccaratocarolina/liber-app.git
```

### 1. Front-end
* Dar npm install
```bash
npm install
```

* Servir o front
```bash
ionic serve
```

### 2. Back-end
* Dar composer install
```bash
composer install
```

* Crie um banco de dados local
```bash
mysql -u root -p
mysql> CREATE DATABASE liber CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

* Crie o arquivo ```.env```
```bash
cp .env.example .env
```

* Salve as credenciais do banco no arquivo ```.env```
```bash
DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=liber
DB_USERNAME=root
DB_PASSWORD=SUA SENHA
```
* Gere uma key para a sua aplicacao
```bash
php artisan key:generate
```

* Migre as tabelas e seeders
```bash
php artisan migrate --seed
```

* Inicialize o passport
```bash
php artisan passport:install
```

* Servir o projeto
```bash
php artisan serve
```
