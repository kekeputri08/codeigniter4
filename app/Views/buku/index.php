<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            font-family: Arial, sans-serif;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #e6e6e6;
        }
    </style>
</head>
<body>
    <table border="1" cellspacing= "0" cellspacing= "5" >
        <tr>
            <th> No </th>
            <th> Nama </th>
            <th> Genre </th>
            <th> Tahun Terbit </th>
            <th> Penulis </th>
        </tr>

        <?php $i = 1;
        foreach ($buku as $book) : ?>

         <tr>
            <td style="text-align: center;"><?= $i++; ?> </td>
            <td><?= $book['Judul_Buku']?> </td>
            <td><?=$book['Genre']?> </td>
            <td><?=$book['Tahun_Terbit']?> </td>
            <td><?=$book['Penulis']?> </td>
        </tr>

        <?php endforeach;?>
    </table>
</body>
</html>