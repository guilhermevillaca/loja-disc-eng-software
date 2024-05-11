
<div class="row">

    <div class="col">

        <p>Novo</p>


        <a class="btn btn-primary" href="<?= base_url('produto/listar')?>">Listar</a>

        <br>
        <br>

        <?php echo form_open('produto/salvar') ?>
        
            <div class="mb-3">
                <label for="nome">Nome Produto</label>
                <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome">
            </div>

            <div class="mb-3">
                <label for="descricao">Descrição</label>
                <textarea class="form-control" name="descricao" id="descricao" placeholder="Descrição"></textarea>
            </div>

            <div class="mb-3">
                <label for="valor">Valor</label>
                <input type="text" class="form-control" name="valor" id="valor" placeholder="Valor">
            </div>

            <div class="mb-3">
                <label for="estoque">Estoque</label>
                <input type="text" class="form-control" name="estoque" id="estoque" placeholder="Estoque">
            </div>

            <div class="mb-3">
                <label for="categorias_id">Categoria</label>
                <select class="form-control" id="categorias_id" name="categoria_id">
                    <option value="" selected>Selecione</option>

                    <?php foreach($categorias as $categoria) : ?>
                        <option value="<?= $categoria['id']?>"><?= $categoria['nome'];?></option>
                    <?php endforeach; ?>
                    
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Salvar</button>

        <?php echo form_close(); ?>

    </div>

</div>



