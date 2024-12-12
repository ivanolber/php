<?php include('header.php'); ?>
<h1 class="text-center">Lista de Items</h1>
<table class="table table-striped">
    <thead>
        <tr>
            <th class="text-center">Nombre</th>
            <th class="text-center">Descripción</th>
            <th class="text-center">Precio</th>
            <th class="text-center">Imagen</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($burger as $tableBurger): if($tableBurger["category"] == $idCategory): ?>
        <tr>
            <td class="text-center"><?= $tableBurger["name"] ?></td>
            <td class="text-center"><?= $tableBurger["description"] ?></td>
            <td class="text-center"><?= $tableBurger["price"] ?>€</td>
            <td class="text-center"><img src="img/<?= $tableBurger["image"] ?>" style="width: 150px"></td>
        </tr>
    <?php endif; endforeach; ?>
    </tbody>
</table>
<a class="btn btn-primary" href="index.php" style="position: absolute; top:10px; right:15px;">Volver</a>
</body>
</html>
