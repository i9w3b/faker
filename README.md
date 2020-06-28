# Faker

<p align="center" class="text-center" style="text-align:center;"><a href="https://github.com/i9w3b" target="_blank"><img src="https://cdn.jsdelivr.net/gh/i9w3b/cdn/img/logo-200px.png" width="200"></a></p>
<p align="center" class="text-center" style="text-align:center;">
<a href="https://github.com/i9w3b/faker/blob/master/LICENSE.md"><img src="https://img.shields.io/github/license/i9w3b/faker" alt="License"></a>
<a href="https://github.com/i9w3b/faker"><img src="https://img.shields.io/github/languages/count/i9w3b/faker" alt="GitHub Language Count"></a>
<a href="https://github.com/i9w3b/faker"><img src="https://img.shields.io/github/repo-size/i9w3b/faker" alt="GitHub Repo Size"></a>
<a href="https://github.com/i9w3b/faker/releases"><img src="https://img.shields.io/github/v/release/i9w3b/faker" alt="GitHub Release"></a>
<a href="https://packagist.org/packages/i9w3b/faker"><img alt="Packagist Downloads" src="https://img.shields.io/packagist/dt/i9w3b/faker"></a>
</p>

Helper para `fzaninotto/faker` em pt_BR.

## Estrutura

```bash
├── composer.json
├── LICENSE.md
├── README.md
└── src
    ├── FakerServiceProvider.php
    └── helpers.php
```

## Instalação

Via Composer

``` bash
$ composer require i9w3b/faker
```

## Uso

``` php
<?php
echo i9faker()->name;
echo i9faker()->address;
echo i9faker()->text;
```

## Segurança

Caso descubra algum problema relacionado à segurança, envie um e-mail para `marcelosenaonline@gmail.com` em vez de usar o rastreador de problemas.

## Licença

[MIT](https://github.com/i9w3b/faker/blob/master/LICENSE.md) © [i9W3b](https://github.com/i9w3b) | Consulte [LICENSE.md](https://github.com/i9w3b/faker/blob/master/LICENSE.md) para obter mais informações.