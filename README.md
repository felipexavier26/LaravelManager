<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>
<h1>Sistema de Gerenciamento de Registros - CRUD com Autenticação</h1>

<p>
Este é um projeto desenvolvido em <b>Laravel</b> que implementa um sistema CRUD (Criar, Ler, Atualizar, Excluir) com autenticação de usuários. Apenas usuários autenticados podem acessar as funcionalidades do sistema.
</p>

<h1>Tecnologias Utilizadas</h1>
<li><strong>Laravel: </strong> Framework PHP utilizado para construir o backend e a API RESTful.</li>
<li><strong>PHP</strong> >= 8.0.</li>
<li><strong>CSS: </strong>Utilizado para exibição de alertas e notificações modais, oferecendo feedback elegante aos usuários.</li>
<li><strong>Blade: </strong>Motor de templates do Laravel.</li>

<h1>Funcionalidade de Interface</h1>
<b>Autenticação de Usuários</b>
<li>Sistema de login e registro de novos usuários.</li>
<li>Apenas usuários logados podem acessar o CRUD.</li>
<li>Middleware aplicado para proteger as rotas.</li>
<br>


<h1>Instruções de Instalação e Execução</h1>
<li><strong>PHP: </strong> >= 8.0</li>
<li><strong>Composer:</strong> Para gerenciar as dependências do Laravel</li>
<li><strong>Node.js e npm:</strong> Para o frontend React</li>
<li><strong>Banco de Dados: </strong> Configurado e acessível MySQL</li>



1. **Clone o repositório:**
   ```bash
      git clone https://github.com/seu-usuario/laravel-crud.git
      cd laravel-crud

2. **Instale as Dependências:**
   ```bash
     composer install


3. **Configure o Arquivo .env**
   ```bash
   cp .env.example .env

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=crud
    DB_USERNAME=root
    DB_PASSWORD=   

4. **Gere a Chave da Aplicação:**
   ```bash
   php artisan key:generate

5. **Crie o Banco de Dados**
   ```bash
    CREATE DATABASE crud

6. **Rode as Migrações**<br>
    ```bash    
    php artisan migrate

    
7. **Inicie o Servidor**
   ```bash
    php artisan serve

 

