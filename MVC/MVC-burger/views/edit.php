<?php include('header.php'); ?>
<h1 class="text-center">Editar Burger</h1>
<form class="container" method="POST" action="index.php?action=edit&id=<?= $videojuego['id'] ?>">
    <div class="mb-3">
        <label for="name" class="form-label">Nombre</label>
        <input type="text" name="name" value="<?= $burger['name'] ?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descripción</label>
        <input type="text" name="description" value="<?= $burger['description'] ?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Precio</label>
        <input type="number" name="price" value="<?= $burger['price'] ?>" step="0.01" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Imagen</label>
        <input type="text" name="image" value="<?= $burger['image'] ?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="category" class="form-label">Categoría</label>
        <input type="number" name="category" value="<?= $burger['category'] ?>" step="1" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Actualizar</button>
</form>
</body>
</html>
