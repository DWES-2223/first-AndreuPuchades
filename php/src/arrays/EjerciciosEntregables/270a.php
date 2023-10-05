<table>
    <tr>
        <th>Prueba</th>
        <th>Marca</th>
        <th>Atleta</th>
        <th>Nacimiento</th>
        <th>Club</th>
        <th>Fecha</th>
        <th>Lugar</th>
    </tr>
    <?php
    foreach ($records as $prueba => $record){
        ?>
        <tr>
            <td><?= $prueba ?></td>
            <td><?= $record["marca"] ?></td>
            <td><?= $record["atleta"] ?></td>
            <td><?= $record["natalici"] ?></td>
            <td><?= $record["club"] ?></td>
            <td><?= $record["data"] ?></td>
            <td><?= $record["lloc"] ?></td>
        </tr>
        <?php
    }
    ?>
</table>