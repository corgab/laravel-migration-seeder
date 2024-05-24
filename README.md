## Comando per .env

### Mac 
cp .env.example .env

### Windows
Copy-Item -Path .env.example -Destination .env

## Intallare le risorse
npm i
composer i

## Comando per Controller
php artisan make:controller Folder/NomeController (il nome deve essere singolare e in PascalCase, Folder/nomeController se è sottocartella)

## Comando per Model
php artisan make:model Mymodel (singolare e in PascalCase)
