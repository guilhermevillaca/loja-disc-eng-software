<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <link rel="stylesheet" href="https://getbootstrap.com/docs/5.3/dist/css/bootstrap.min.css">
</head>
<body>
    
<div class="container">
    
    <hr>

    <div class="border col-2">
        <h1 class="text-center">MVC</h1>    
    </div>
    
    
    

    <hr>

    <nav class="nav justify-content-center">
        <a class="nav-link" href="<?= base_url('home');?>">Home</a>
        <a class="nav-link" href="<?= base_url('categoria');?>">Categorias</a>
        <a class="nav-link" href="<?= base_url('produto');?>">Produtos</a>
        <a class="nav-link" href="<?= base_url('loja') ?>">Loja</a>
    </nav>

    <hr>

    
    <p>Site Desenvolvido para entender o funcionamento da Arquitetura MVC</p>

    <br><br>