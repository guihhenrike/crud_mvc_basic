<?php $render('header'); ?>

<h2>Editar Usuario</h2>

<form method="POST" action="<?= $base;?>/usuario/<?= $usuario['id']; ?>/editar" >
    <label for="">Nome: <br>
        <input type="text" name="name" value="<?= $usuario['nome']; ?>">
    </label> <br><br>

    <label for="">Email: <br>
        <input type="email" name="email" value="<?= $usuario['email']; ?>">
    </label> <br> <br>

    <input type="submit" value="Atualizar">
</form>

<?php $render('footer'); ?> 
