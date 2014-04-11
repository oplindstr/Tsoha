<h1>Pokemon-tietokanta</h1>

<div class="container">
    <h1>Kirjautuminen</h1>
    <form class="form-horizontal" role="form" action="loginControl.php" method="POST">
        <div class="form-group">
            <label for="inputTunnus" class="col-md-2 control-label">Käyttäjätunnus</label>
            <div class="col-md-10">
                <input type="text" class="form-control" id="inputEmail1" name="tunnus" value="<?php echo $data->kayttaja; ?>" placeholder="Tunnus">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword1" class="col-md-2 control-label">Salasana</label>
            <div class="col-md-10">
                <input type="password" class="form-control" id="inputPassword1" name="salasana" placeholder="Salasana">
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-offset-2 col-md-10">
                <button type="submit" class="btn btn-default">Kirjaudu sisään</button>
            </div>
        </div>
    </form>
    <form class="form-horizontal" role="form" action="rekisteroityminen.php" method="POST">
        <div class="form-group">
            <div class="col-md-offset-2 col-md-10">
                <button type="submit" class="btn btn-default">Rekisteröidy</button>
            </div>
        </div>
    </form>
</div>

<div class="container">
    <h1>Yleistä tietoa</h1>

    <form class="form-horizontal" role="form" action="lajiHakulomake.php" method="POST">
        <div class="form-group">
            <div class="col-md-offset-5 col-md-10">
                <button type="submit" class="btn btn-primary">Haku</button>
            </div>
        </div>
    </form>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Nimi</th>
                <th>Tyyppi1</th>
                <th>Tyyppi2</th>
                <th>Base HP</th>
                <th>Base Attack</th>
                <th>Base Defense</th>
                <th>Base Sp. Attack</th>
                <th>Base Sp. Defense</th>
                <th>Base Speed</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($data->pokemonit as $pokemon): ?>

                <tr>
                    <td><?php echo $pokemon->getId() ?></td>
                    <td><?php echo $pokemon->getName() ?></td>
                    <td><?php echo $pokemon->getType1() ?></td>
                    <td><?php echo $pokemon->getType2() ?></td>
                    <td><?php echo $pokemon->getHP() ?></td>
                    <td><?php echo $pokemon->getAtk() ?></td>
                    <td><?php echo $pokemon->getDef() ?></td>
                    <td><?php echo $pokemon->getSpAtk() ?></td>
                    <td><?php echo $pokemon->getSpDef() ?></td>
                    <td><?php echo $pokemon->getSpd() ?></td>
                </tr>

            <?php endforeach; ?>
        </tbody>
    </table>
</div>


