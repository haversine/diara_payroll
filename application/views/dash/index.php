<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <title> </title>
</head>



<body>

<div class="container">

    <p class="text-left">
    <h4>
    Kokkuvõte <?=$year = Model_User::year($year)?>

    </h4>
    </p>

    <legend>Tehtud tööd</legend>

    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>Töötaja nimi</th>
            <?foreach ($summary as $summary_row): ?>
            <th><?=$summary_row['month']?></th>
            <?endforeach?>
            <th>Kokku</th>
            <th>Palk</th>
        </tr>
        </thead>
        <tbody>
            <?foreach ($summary as $summary_row): ?>
        <tr>
            <td><?=$summary_row['username']?></td>
            <td><?=Model_Employee::get_total_rounded_time($summary_row['worktotal'])?></td>
            <td><?=Model_Employee::get_total_rounded_pay($summary_row['worktotal'])?></td>
        </tr>
            <?endforeach?>
        </tbody>
        <tfoot>
        <tr>
        </tr>
        </tfoot>
    </table>




</div>

</body>

</html>