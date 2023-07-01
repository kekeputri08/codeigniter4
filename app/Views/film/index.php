<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" cellspacing= "0" cellspacing= "5" >
        <tr>
            <th> No </th>
            <th> Nama </th>
            <th> Genre </th>
            <th> Duration </th>
        </tr>

        <?php $i = 1;
        foreach ($films as $film) : ?>

         <tr>
            <td style="text-align: center;"><?= $i++; ?> </td>
            <td><?= $film['nma_Film']?> </td>
            <td><?=$film['genre']?> </td>
            <td><?=$film['duration']?> </td>
        </tr>

        <?php endforeach;?>
    </table>
</body>
</html>