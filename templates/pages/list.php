<div class="list">

    <div class="tbl-header">
        <table cellpadding="0" cellspacing="0" border="0">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Materiał</th>
                    <th>Gęstość</th>
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