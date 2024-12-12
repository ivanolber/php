<?php include('header.php'); ?>
<h1 class="text-center">Lista de Categorías</h1>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col" class="text-center">Nombre</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($categories as $tableCategories): ?>
        <tr>
            <td class="text-center">
                <a href="index.php?action=listarProductos&id=<?= $tableCategories['id'] ?>" style="text-decoration:none; color: black;">
                    <?= $tableCategories["name"] ?>
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>
