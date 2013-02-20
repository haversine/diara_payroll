<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">


<body>
<div class="container">

    <div class="page-header">
        <a href="#back"><i class="icon-chevron-left"></i> Tagasi</a>
    </div>

    <p class="text-left">
    <h4>Jaak Punapõld, Veebruar 2013</h4>
    </p>

    <div class="pull-right">
        <button class="btn btn-small btn-primary" type="button">
            <i class="icon-plus-sign"></i>
            <small>Lisa töö</small>
        </button>
    </div>

    </br>
    </br>
    <form class="form-horizontal">
        <fieldset>
            <legend>Uue töö lisamine</legend>
            <div class="control-group">
                <label class="control-label" for="workerName">Töö tegija</label>
                <div class="controls">
                    <input class="input-default" id="workerName" type="text" placeholder="Disabled input here..." disabled>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="workDate">Töö tehti</label>
                <div class="controls">
                    <input class="input-default" id="workDate" type="text" placeholder="Disabled input here..." disabled>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="workDescription">Töö kirjeldus</label>
                <div class="controls">

                    <textarea class="input-xxlarge" id="workDescription" type="text" placeholder="Sisesta tehtud töö kirjeldus..." rows="2"></textarea>
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <label class="checkbox">
                        <input type="checkbox"> Remember me
                    </label>
                    <button type="submit" class="btn">Sign in</button>
                </div>
            </div>
        </fieldset>
    </form>

</body>

</html>