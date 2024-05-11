

<p>Listar</p>

<a class="btn btn-primary" href="<?= base_url('produto/novo')?>">Novo</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Descrição</th>
      <th scope="col">Valor</th>
      <th scope="col">Estoque</th>
      <th scope="col">Categoria</th>
      <th>Ações</th>
    </tr>
  </thead>
  <tbody>


    <?php foreach ($produtos as $produto) : ?>
      <tr>
        <th scope="row"><?=$produto['id']?></th>
        <td><?=$produto['nome']?></td>
        <td><?=$produto['descricao']?></td>
        <td><?=$produto['valor']?></td>
        <td><?=$produto['quantidade_estoque']?></td>
        <td><?=$produto['categoria_id']?></td>
        <td><a class="btn btn-primary" href="<?= base_url('produto/editar/'. $produto['id']) ?>">Editar</a> <a class="btn btn-danger" href="<?= base_url('produto/delete/'. $produto['id']) ?>">Excluir</a></td>
      </tr>
    <?php endforeach ?>
  </tbody>
</table>