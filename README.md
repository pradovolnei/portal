# Portal 

Este é um portal de notícias desenvolvido com Laravel e Docker. Siga os passos abaixo para configurar e rodar o projeto em seu ambiente de desenvolvimento.

## Pré-requisitos

- [Docker](https://www.docker.com/get-started)
- [Docker Compose](https://docs.docker.com/compose/install/)
- [Composer](https://getcomposer.org/download/)

## Passo a Passo

### 1. Clonar o Repositório

Clone este repositório em sua máquina local:  

git clone https://github.com/pradovolnei/portal.git  
cd portal

### 2. Instalar Dependências

composer install

### 3. Configurar Laravel Sail

composer require laravel/sail --dev  

php artisan sail:install  

### 4. Configurar Arquivo .env

cp .env.example .env

Atualize as seguintes variáveis no arquivo .env:

DB_CONNECTION=mysql  
DB_HOST=  
DB_PORT=  
DB_DATABASE=  
DB_USERNAME=  
DB_PASSWORD=  

### 5. Subir os Containers do Docker

./vendor/bin/sail up

### 6. Executar Migrações

./vendor/bin/sail artisan migrate

### 7. Compilar Assets Frontend (Opcional)

./vendor/bin/sail npm install  
./vendor/bin/sail npm run dev  

### 8. Acessar o Projeto

http://localhost


## Estrutura do Projeto

routes/web.php: Define as rotas da aplicação.  
app/Http/Controllers: Contém os controladores da aplicação.  
resources/views: Contém as views Blade da aplicação.  
database/migrations: Contém as migrações do banco de dados.  

## Tecnologias Utilizadas

Laravel  
Docker  
MySQL  

