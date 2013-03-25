<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <title> </title>
</head>

<?=$task_edit->name?>

<body>

<div class="container">

    <div class="page-header">

        <a href="../dash"><i class="icon-chevron-left"></i> Tagasi</a>
    </div>

    <p class="text-left">
    <h4>

    </h4>
    </p>

    <a class="btn btn-primary pull-right" data-toggle="collapse" data-target="#addtask">
        <i class="icon-plus-sign icon-white"></i>
        <small>Lisa töö</small>
    </a>

    <div class="clearfix"></div>
    <div id="addtask" class="collapse in">
        <fieldset>
            <legend>Töö muutmine</legend>
            <form class="form-horizontal" action=<?=URL::base()?>tasks/update method="post">
                <div class="control-group">
                    <label class="control-label" for="workerName">Töö tegija</label>
                    <div class="controls">
                        <input name="edit[id]" class="input-default" id="workerName" type="text" value= <?=$task_edit->user_id?> readOnly>
                    </div>
                </div>

                <div class="control-group">

                    <label class="control-label" for="workDate">Töö tehti</label>
                    <div class="controls">
                        <input name="edit[date]" class="input-default" id="workDate" type="text" value=<?=$task_edit->created?> readOnly>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="workDescription">Töö kirjeldus</label>
                    <div class="controls">
                        <textarea name="edit[name]" class="input-xxlarge" id="workDescription" type="text"  rows="2"><?=$task_edit->name?></textarea>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="workTime">Kulunud aeg</label>
                    <div class="controls">
                        <input name="edit[time]" class="input-mini" id="workTime" type="text" value=<?=$task_edit->time?> >
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="workDescription">Kommentaarid</label>
                    <div class="controls">
                        <textarea name="edit[notes]" class="input-xxlarge" id="workComment" type="text" rows="2"><?=$task_edit->notes?></textarea>
                    </div>
                </div>

                <input style='display: none' name="edit[taskid]" class="input-mini" id="taskId" type="text" value=<?=$task_edit->id?> >


                <div class="control-group">
                    <div class="controls">
                        <button type="submit" class="btn btn-primary">Muuda tööd</button>
                    </div>
                </div>
            </form>
        </fieldset>
    </div>


</div>

</body>

</html>