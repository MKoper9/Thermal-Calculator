<!DOCTYPE html>
<html lang="pl">

<head>
    <title>Table</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
    <link href="D:/Projekty/calculator/public/style.css" rel="stylesheet">
</head>
<style>
    body {
        color: #333;
        background-color: beige;
    }

    table,
    tr,
    td,
    th {
        border: 1px solid;
        border-collapse: collapse;
        padding: 15px;
        width: auto;
    }

    .material {
        text-align: left;
    }

    .standard {
        background-color: #98FB98;
    }

    .name {
        background-color: #00FF00;
        text-transform: uppercase;
    }
</style>

<body>
    <table>
        <thead>
            <tr class="name">
                <th>Id</th>
                <th>Material</th>
                <th>Density</th>
                <th>Specific Heat</th>
                <th>Heat Conduction Coefficient</th>
            </tr>
            <tr class="standard">
                <th>[-]</th>
                <th>[-]</th>
                <th>kg/m3</th>
                <th>kJ/(kgK)</th>
                <th>W/(mK)</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($params['materials'] as $material) : ?>
                <tr>
                    <th><?php echo $material['id']; ?></th>
                    <th class="material"><?php echo $material['material']; ?></th>
                    <th><?php echo $material['density']; ?></th>
                    <th><?php echo $material['specific_heat']; ?></th>
                    <th><?php echo $material['heat_conduction_coefficient']; ?></th>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>