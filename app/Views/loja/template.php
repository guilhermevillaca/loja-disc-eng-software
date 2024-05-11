<?php echo view('/header'); ?>
<p>Loja Virtual</p>


<div class="row">

    <div class="col-3">
        <h2>Sidebar</h2>

        <ul class="list-group">
            <?php foreach($categorias as $categoria) : ?>
                <li class="list-group-item"><a class="nav-link" href="<?= base_url('loja/produtos/' . $categoria['id']) ?>"><?= $categoria['nome']?></a></li>
            <?php endforeach; ?>
        </ul>

    </div>

    <div class="col-9">
        <h2>Produtos</h2>

        <div class="row">

            <?php echo view($main_content); ?>

        </div>
    </div>
</div>

<?php echo view('/footer'); ?>