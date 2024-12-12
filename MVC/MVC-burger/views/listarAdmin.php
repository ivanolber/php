<?php include('header.php'); ?>
<h1 class="text-center">Lista de Items</h1>
<a class="btn btn-primary" href="index.php?action=create" style="position:absolute; top: 10px; left: 15px;">Agregar Item</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th class="text-center">ID</th>
            <th class="text-center">Nombre</th>
            <th class="text-center">Descripción</th>
            <th class="text-center">Precio</th>
            <th class="text-center">Imagen</th>
            <th class="text-center">Categoría</th>
            <th class="text-center">Acciones</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($burger as $tableBurger): ?>
        <tr>
            <td class="text-center"><?= $tableBurger["id"] ?></td>
            <td class="text-center"><?= $tableBurger["name"] ?></td>
            <td class="text-center"><?= $tableBurger["description"] ?></td>
            <td class="text-center"><?= $tableBurger["price"] ?>€</td>
            <td class="text-center"><img src="img/<?= $tableBurger["image"] ?>" style="width: 150px"></td>
            <td class="text-center"><?= $tableBurger["category"] ?></td>
            <td class="text-center">
                <a class="btn btn-primary" href="index.php?action=edit&id=<?= $tableBurger['id'] ?>">Editar</a>
                <a class="btn btn-danger" href="index.php?action=delete&id=<?= $tableBurger['id'] ?>" onclick="return confirm('Estás seguro?')">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>
