
<div class="row">

    <div class="col">

        <p>Novo</p>


        <a class="btn btn-primary" href="<?= base_url('categoria/listar')?>">Listar</a>

        <br>
        <br>

        <?php echo form_open('categoria/salvar') ?>
        
            <div class="mb-3">
                <label for="nome">Nome categoria</label>
                <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome">
            </div>

            <div class="mb-3">
                <label for="descricao">Descrição</label>
                <textarea class="form-control" name="descricao" id="descricao" placeholder="Descrição"></textarea>
            </div>

            <div class="mb-3">
                <label for="categorias_pai_id">Categoria Pai</label>
                <select class="form-control" id="categorias_pai_id" name="categoria_pai_id">
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



