<style>
    table {
        width: 100%;
    }

    th,
    td {
        border: 1px solid black;
    }
</style>
<table>
    <thead>
        <tr>
            <th style="background-color: blue; color: #fff; text-align: center;" colspan="5">LOGBOOK</th>
        </tr>
        <tr>
            <th style="background-color: blue; color: #fff; text-align: center;" scope="col">DATETIME</th>
            <th style="background-color: blue; color: #fff; text-align: center;" scope="col">ACTIVITY</th>
            <th style="background-color: blue; color: #fff; text-align: center;" scope="col">SOLUTION</th>
            <th style="background-color: blue; color: #fff; text-align: center;" scope="col">DEPARTEMENT</th>
            <th style="background-color: blue; color: #fff; text-align: center;" scope="col">AREA</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach (Database::FindAll('logbook') as $log) : ?>
            <tr>
                <td style="text-align: center;"><?= $log['datetime']; ?></td>
                <td style="text-align: center;"><?= $log['activity']; ?></td>
                <td style="text-align: center;"><?= $log['solution']; ?></td>
                <td style="text-align: center;"><?= Database::find('users', 'id', $log['user_id'])->departement; ?></td>
                <td style="text-align: center;">
                    <?php foreach (Database::find('area', 'id', $log['id']) as $key => $val) : ?>
                        <?php if ($key == 'id' || $val == 'off') continue; ?>
                        <?= $key; ?>
                    <?php endforeach; ?></td>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>