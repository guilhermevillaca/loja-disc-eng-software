<p>Detalhes do produto <?= $produto['nome']; ?></p>

<div class="row">

    <div class="col-9">

        <h2><?= $produto['nome'] ?></h2>

        <img src="https://picsum.photos/id/<?=rand(1,50)?>/400/250" alt="">

        <p><?= $produto['descricao'] ?></p>

        <a class="btn btn-primary" href="#">Adicionar ao carrinho</a>
        <a class="btn btn-secondary" href="<?= base_url('loja/comprar/' . $produto['id']) ?>">Comprar agora</a>

    </div>
</div>