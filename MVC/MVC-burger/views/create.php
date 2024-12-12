<?php include('header.php'); ?>
<h1 class="text-center">Agregar Producto</h1>
<form class="container" method="POST" action="index.php?action=create">
    <div class="mb-3">
        <label for="name" class="form-label">Nombre</label>
        <input type="text" name="name" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descripción</label>
        <input type="text" name="description" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Precio</label>
        <input type="number" name="price" step="0.01" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Imagen</label>
        <input type="text" name="image" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="category" class="form-label">Categoría</label>
        <input type="number" name="category" step="1" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
</body>
</html>
