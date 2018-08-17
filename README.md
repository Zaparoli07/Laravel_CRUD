# Projeto Tray
> Projeto desenvolvido para a empresa Tray, referente à vaga de Programador PHP I.

![PHP Version][php-image]

Login utilizando Laravel.

Cadastro de Contatos.

PHP Mailer

## Instalação

OS X & Linux:

Inicializar Banco de Dados:

```sh
php artisan migrate
```

Inicializar o Servidor:
```sh
php artisan serve
```

Windows:

Inicializar Banco de Dados:

```sh
php artisan migrate
```

Inicializar o Servidor:
```sh
php artisan serve
```

## Configuração para Desenvolvimento

Dependências:

Composer

```sh
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('SHA384', 'composer-setup.php') === '544e09ee996cdf60ece3804abc52599c22b1f40f4323403c44d44fdfdd586475ca9813a858088ffbc1f233e9b180f061') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
```

## Meta

Luiz Zaparoli – [@LuizZaparoli](www.linkedin.com/in/luiz-zaparoli) – luizzaparoli07@gmail.com

[https://github.com/Zaparoli07](https://github.com/Zaparoli07/)

## Contributing

1. Faça o _fork_ do projeto (<https://github.com/Zaparoli07/Laravel_CRUD>)
2. Crie uma _branch_ para sua modificação (`git checkout -b feature/fooBar`)
3. Faça o _commit_ (`git commit -am 'Add some fooBar'`)
4. _Push_ (`git push origin feature/fooBar`)
5. Crie um novo _Pull Request_

[php-image]: https://img.shields.io/packagist/php-v/symfony/symfony.svg

