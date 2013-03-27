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


            <th>Kuu</th>
            <th>Tehtud töötunde</th>
            <th>Palk</th>
        </tr>
        </thead>
        <tbody>
            <?foreach ($summary as $summary_row): ?>
        <tr>
            <td rowspan="<?=count($summary_row)?>"><?=$summary_row[0]['username']?></td>

                <?foreach ($summary_row as $element): ?>
                <td><?=Model_User::month($element['month'])?></td>
            <td><a href="<?=URL::base()?>employees/view/<?=Model_Employee::name_to_id($element['username'])?>?month=<?=$element['month']?>&year=<?=$year?>"><?=Model_Employee::get_total_rounded_time($element['worktotal'])?></a></td>
            <td><?=Model_Employee::get_total_rounded_pay($element['worktotal'])?></td>
        </tr>
            <?endforeach?>
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