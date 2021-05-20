## Sobre o projeto
Projeto exemplo do GraphQL com Laravel utilizando framework Lighthouse

## 🛠 Construido com
* [Laravel](https://laravel.com/)
* [Composer](https://getcomposer.org/)
* [Lighthouse](https://lighthouse-php.com/)

## ⚙ Instalação

```bash
# Clone
$ git clone https://github.com/tfbartels/happy.git

# Instalar dependencias
$ composer install
```

## Dados

1. Criar arquivo database.sqlite dentro da pasta database

2. Configurar sqlite no .env a partir do .env.example

3. Gerar tabelas do banco e dados

```bash
# Criar extrutura do banco 
$ php artisan migrate

# Criar dados de exemplo
$ php artisan db:seed
```

## ⚙ Execução

```bash
$ php artisan serve
```

## Outras instruções

```bash
php artisan lighthouse:mutation createPost  
```

## 📝 Licença
Este projeto está sob a licença do MIT

