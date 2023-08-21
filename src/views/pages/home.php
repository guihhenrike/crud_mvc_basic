<?php 
$base;
$render('header'); ?>

<a href="<?=$base;?>/novo">Novo Usuario</a>

<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Ações</th>
    </tr>
    <?php foreach($usuarios as $usuario): ?>
        <tr>
            <td><?= $usuario['id'];?></td>
            <td><?= $usuario['nome'];?></td>
            <td><?= $usuario['email'];?></td>
            <td>
                <a href="<?= $base;?>/usuario/<?= $usuario['id'] ?>/editar">
                    <img width="20px" src="<?=$base;?>/assets/images/document.png" alt="">
                </a>
                <a href="<?= $base;?>/usuario/<?= $usuario['id'] ?>/excluir" onclick="return confirm('tem certeza que deseja excluir?')">
                    <img width="20px"  src="<?=$base;?>/assets/images/trash.png" alt="">
                </a>
            </td>
        </tr>

    <?php endforeach ; ?>


</table>

<?php $render('footer'); ?> 

