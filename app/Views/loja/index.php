

            <?php foreach($produtos as $produto): ?>
                <div class="col-3">
                    <a href="<?= base_url('loja/detalhes/' . $produto['id']) ?>">
                        <img src="https://picsum.photos/id/<?=rand(1,50)?>/200/150" alt="">
                        <p><?= $produto['nome']?> - <?=$produto['valor']?></p>
                    </a>
                </div>
            <?php endforeach; ?>

        