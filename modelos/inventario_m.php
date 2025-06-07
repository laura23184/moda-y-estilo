
<?php
function obtenerNotas($conn) {
    $result = mysqli_query($conn, "SELECT * FROM producto");
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}
function crearProducto($conn, $data) {
    $sql = "INSERT INTO producto (titulo, contenido) VALUES ('{$data['titulo']}', '{$data['contenido']}')";
    mysqli_query($conn, $sql);
}
function actualizarProducto($conn, $data) {
    $sql = "UPDATE inventario SET titulo='{$data['titulo']}', contenido='{$data['contenido']}' WHERE id={$data['id']}";
    mysqli_query($conn, $sql);
}
function eliminarProducto($conn, $id) {
    mysqli_query($conn, "DELETE FROM producto WHERE id=$id");
}
?>