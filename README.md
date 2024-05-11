# Atividade Arquitetura MVC utilizando Codeigniter 4

Mais detalhes em no arquivo compartilhado no google docs [AQUI](https://docs.google.com/document/d/1Y71cA1MIdMHGlYulYpKd4AD9QT4WqXKYhDZr6Wy8bgA/edit?usp=sharing)


## O que é CodeIgniter?

CodeIgniter é um framework web PHP full-stack que é leve, rápido, flexível e seguro. Mais informações podem ser encontradas no site oficial .

Este repositório contém a versão distribuível da estrutura. Ele foi construído a partir do repositório de desenvolvimento .

Mais informações sobre os planos para a versão 4 podem ser encontradas no CodeIgniter 4 nos fóruns.

Você pode ler o guia do usuário correspondente à versão mais recente do framework.

## Important Change with index.php

index.php não está mais na raiz do projeto! Foi movido para dentro da pasta pública , para melhor segurança e separação dos componentes.

Isso significa que você deve configurar seu servidor web para "apontar" para a pasta pública do seu projeto , e não para a raiz do projeto. Uma prática melhor seria configurar um host virtual para apontar para lá. Uma prática ruim seria apontar seu servidor web para a raiz do projeto e esperar entrar public/... , pois o restante da sua lógica e da estrutura são expostos.

Por favor, leia o guia do usuário para uma explicação melhor de como funciona o CI4!

## Repository Management

Usamos problemas do GitHub, em nosso repositório principal, para rastrear BUGS e rastrear pacotes de trabalho de DESENVOLVIMENTO aprovados. Usamos nosso fórum para fornecer SUPORTE e discutir SOLICITAÇÕES DE RECURSOS.

Este repositório é de "distribuição", construído por nosso script de preparação de lançamento. Problemas com isso podem ser levantados em nosso fórum ou como problemas no repositório principal.

## Server Requirements

É necessário PHP versão 8.1 ou superior, com as seguintes extensões instaladas:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

Além disso, certifique-se de que as seguintes extensões estejam habilitadas em seu PHP:

json (ativado por padrão - não desligue)
mysqlnd se você planeja usar MySQL
libcurl se você planeja usar a biblioteca HTTP\CURLRequest
