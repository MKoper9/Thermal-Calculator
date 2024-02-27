<!DOCTYPE html>
<html lang="pl">

<head>
    <title>Table</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
    <link href="public/style.css" rel="stylesheet">
</head>

<body>
        <div id="main_menu">
			<ul id="top_menu">
				<li><a href="#"><span class="link">Tabela materiałów</span></a></li>
				<li><a href="#"><span class="link"></span>Obliczenia</span></a></li>
				<li><a href="#"><span class="link"></span>O mnie</span></a></li>
				<li><a href="#"><span class="link"></span>Kontakt</span></a></li>
			</ul>
		</div>
        <br/>
        <br/>
    <table>
        <thead>
            <tr class="name">
                <th>Id</th>
                <th>Materiał</th>
                <th>Gęstość</th>
                <th>Ciepło właściwe</th>
                <th>Współczynnik przewodzenia ciepła</th>
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
    <br>
</body>

</html>