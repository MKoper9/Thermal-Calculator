<html lang="pl">

<head>
    <title>Lista</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
    <link href="/public/style.css" rel="stylesheet">
</head>

<body class="body">
    <div class="list">
        <div class="tbl-header">
            <table cellpadding="0" cellspacing="0" border="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Materiał</th>
                        <th>Gęstość</th>
                        <th>Ciepło właściwe</th>
                        <th>Współczynnik przewodzenia ciepła</th>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="tbl-content">
            <table cellpadding="0" cellspacing="0" border="0">
                <tbody>
                    <?php foreach ($params['materials'] ?? [] as $material) : ?>
                        <tr>
                            <td><?php echo $material['id'] ?></td>
                            <td><?php echo $material['material'] ?></td>
                            <td><?php echo $material['density'] ?></td>
                            <td><?php echo $material['specific_heat'] ?></td>
                            <td><?php echo $material['heat_conduction_coefficiennt'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    </div>
</body>

</html>