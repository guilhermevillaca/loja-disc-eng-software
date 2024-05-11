

<p>Listar</p>

<a class="btn btn-primary" href="<?= base_url('categoria/novo')?>">Novo</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Descrição</th>
      <th scope="col">Categoria Pai</th>
      <th>Ações</th>
    </tr>
  </thead>
  <tbody>


    <?php foreach ($categoria as $cat) : ?>
      <tr>
        <td scope="row"><?=$cat['id']?></td>
        <td><?=$cat['nome']?></td>
        <td><?=$cat['descricao']?></td>
        <td><?=$cat['categoria_pai_id']?></td>
        <td>
          <a class="btn btn-warning" href="<?= base_url('produto/listar/'. $cat['id']) ?>">Listar Produtos</a> 
          <a class="btn btn-primary" href="<?= base_url('categoria/editar/'. $cat['id']) ?>">Editar</a> 
          <a class="btn btn-danger" href="<?= base_url('categoria/delete/'. $cat['id']) ?>">Excluir</a>
        </td>
      </tr>
    <?php endforeach ?>
  </tbody>
</table>