<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
<title> </title>
</head>



<body>

<div class="container">

    <div class="page-header">

        <a href="../dash"><i class="icon-chevron-left"></i> Tagasi</a>
    </div>

    <p class="text-left">
    <h4>
    <?=$employee= Model_User::employee($employee->username)?>,
    <?=$month = Model_User::month($month)?>
    <?=$year = Model_User::year($year)?>
    </h4>
    </p>

        <a class="btn btn-primary pull-right" data-toggle="collapse" data-target="#addtask">
            <i class="icon-plus-sign icon-white"></i>
            <small>Lisa töö</small>
        </a>

    <div class="clearfix"></div>
    <div id="addtask" class="collapse in">
        <fieldset>
            <legend>Uue töö lisamine</legend>
                <form class="form-horizontal" action=<?=URL::base()?>"/tasks/create_new" method="post">
                    <div class="control-group">
                        <label class="control-label" for="workerName">Töö tegija</label>
                        <div class="controls">
                            <input class="input-default" id="workerName" type="text" placeholder="Jaak Punapõld" disabled>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="workDate">Töö tehti</label>
                        <div class="controls">
                            <input class="input-default" id="workDate" type="text" placeholder="04.02.2013" disabled>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="workDescription">Töö kirjeldus</label>
                        <div class="controls">
                            <textarea name="task[name]" class="input-xxlarge" id="workDescription" type="text" placeholder="Sisesta tehtud töö kirjeldus..." rows="2"></textarea>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="workerName">Kulunud aeg</label>
                        <div class="controls">
                            <input name="task[time]" class="input-mini" id="workTime" type="text" placeholder="hh:mm" >
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="workDescription">Kommentaarid</label>
                        <div class="controls">
                            <textarea name="task[notes]" class="input-xxlarge" id="workComment" type="text" placeholder="Sisesta kommentaarid..." rows="2"></textarea>
                        </div>
                    </div>


                    <div class="control-group">
                        <div class="controls">
                            <button type="submit" class="btn btn-primary">Lisa töö</button>
                        </div>
                    </div>
                </form>
        </fieldset>
</div>


    <legend>Tehtud tööd</legend>

    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>Töö kirjeldus</th>
            <th>Kulunud aeg</th>
            <th>Kommentaarid</th>
            <th>Palk</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
            <?foreach ($tasks as $task): ?>
        <tr>
            <td><?=$task->name?></td>
            <td><?=$task->get_formatted_time($task->time)?></td>
            <td><?=$task->notes?></td>
            <td><?=$task->get_earned_money($task->time)?></td>
            <td><a href="<?=URL::base()?>tasks/edit/<?=$task->id?>">Muuda</a></td>
            <td><a href="<?=URL::base()?>tasks/delete/<?=$task->id?>">Kustuta</a></td>
        </tr>
            <?endforeach?>
        </tbody>
        <tfoot>
        <tr>
            <th></th>
            <th>&sum; 6h</th>
            <th></th>
            <th>&sum; 30€</th>
            <th colspan="2"></th>
        </tr>
        </tfoot>
    </table>




</div>

</body>

</html>