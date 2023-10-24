<?php
include('data.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    form {
        display: inline;
    }
</style>

<body>
    <h1>Lista de peliculas: Ejercicios de DWES</h1>
    <form action="Pelis.php" method="post">
        <input type="text" name="titulo" placeholder="Título de pelicula">
        <select name="valoracion">
            <option value="0">No la he visto</option>
            <option value="1">1-3</option>
            <option value="2">4-6</option>
            <option value="3">7-9</option>
            <option value="4">10</option>
        </select>
        <br>
        <input type="submit" value="Añadir">
    </form>
    <h1>Peliculas vistas:</h1>
    <table>    
        <tr>
            <th>Titulo</th>
            <th>valoracion</th>
        </tr>

        <?php
        foreach ($vistas as $k => $e) { ?>
            <tr>
                <td>
                    <?= $e['Titulo'] ?>
                </td>
                <td>
                    <?= $e['Valoracion'] ?>
                </td>
            </tr>
        <?php } ?>
    </table>
    
    <h1>Peliculas sin ver</h1>
    <table>
        <tr>
            <th>Titulo</th>
        </tr>

        <?php
        foreach ($sinver as $k => $e) { ?>
            <tr>
                <td>
                    <?= $e['Titulo'] ?>
                </td>
            </tr>
        <?php } ?>
    </table>

</body>

</html>