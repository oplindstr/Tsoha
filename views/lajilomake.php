<div class="container">
    <h1><?php echo $data->otsikko;?></h1>
    <form class = "form-horizontal" role = "form" action = "index.php" method = "POST">
        <div class = "form-group">
            <div class = "col-md-offset-8 col-md-10">
                <button type = "submit" class = "btn btn-link">Takaisin</button>
            </div>
        </div>
    </form>

    <form class = "form-horizontal" role = "form" action = "lajilomakeControl.php" method = "POST">
        <div class = "form-group">
            <label for = "inputEmail1" class = "col-md-2 control-label">ID</label>
            <div class = "col-md-10">
                <input type = "text" class = "form-control" id = "inputEmail1" name = "ID" value = <?php echo $data->id;?>>
            </div>
        </div>
        <div class = "form-group">
            <label for = "inputPassword1" class = "col-md-2 control-label">Nimi</label>
            <div class = "col-md-10">
                <input type = "text" class = "form-control" id = "inputPassword1" name = "Nimi" value = <?php echo $data->nimi;?>>
            </div>
        </div>
        <div class = "form-group">
            <label for = "inputPassword2" class = "col-md-2 control-label">Type1</label>
            <div class = "col-md-10">
                <select name = "type1">
                    <option selected ="<?php echo $data->type1;?>"><?php echo $data->type1;?></option>
                    <option value = "Normal">Normal</option>
                    <option value = "Fighting">Fighting</option>
                    <option value = "Flying">Flying</option>
                    <option value = "Poison">Poison</option>
                    <option value = "Ground">Ground</option>
                    <option value = "Rock">Rock</option>
                    <option value = "Bug">Bug</option>
                    <option value = "Ghost">Ghost</option>
                    <option value = "Steel">Steel</option>
                    <option value = "Fire">Fire</option>
                    <option value = "Water">Water</option>
                    <option value = "Grass">Grass</option>
                    <option value = "Electric">Electric</option>
                    <option value = "Psychic">Psychic</option>
                    <option value = "Ice">Ice</option>
                    <option value = "Dragon">Dragon</option>
                    <option value = "Dark">Dark</option>
                    <option value = "Fairy">Fairy</option>
                </select>
            </div>
        </div>

        <div class = "form-group">
            <label for = "inputPassword2" class = "col-md-2 control-label">Type2</label>
            <div class = "col-md-10">
                <select name = "type2">
                    <option selected ="<?php echo $data->type2;?>"><?php echo $data->type2;?></option>
                    <option value = "-">-</option>
                    <option value = "Normal">Normal</option>
                    <option value = "Fighting">Fighting</option>
                    <option value = "Flying">Flying</option>
                    <option value = "Poison">Poison</option>
                    <option value = "Ground">Ground</option>
                    <option value = "Rock">Rock</option>
                    <option value = "Bug">Bug</option>
                    <option value = "Ghost">Ghost</option>
                    <option value = "Steel">Steel</option>
                    <option value = "Fire">Fire</option>
                    <option value = "Water">Water</option>
                    <option value = "Grass">Grass</option>
                    <option value = "Electric">Electric</option>
                    <option value = "Psychic">Psychic</option>
                    <option value = "Ice">Ice</option>
                    <option value = "Dragon">Dragon</option>
                    <option value = "Dark">Dark</option>
                    <option value = "Fairy">Fairy</option>
                </select>
            </div>
        </div>

        <div class = "form-group">
            <label for = "inputPassword2" class = "col-md-2 control-label">Base HP</label>
            <div class = "col-md-10">
                <input type = "text" class = "form-control" id = "inputPassword2" name = "HP" value = <?php echo $data->hp;?>>
            </div>
        </div>

        <div class = "form-group">
            <label for = "inputPassword2" class = "col-md-2 control-label">Base Attack</label>
            <div class = "col-md-10">
                <input type = "text" class = "form-control" id = "inputPassword2" name = "Attack" value = <?php echo $data->atk;?>>
            </div>
        </div>

        <div class = "form-group">
            <label for = "inputPassword2" class = "col-md-2 control-label">Base Defense</label>
            <div class = "col-md-10">
                <input type = "text" class = "form-control" id = "inputPassword2" name = "Defense" value = <?php echo $data->def;?>>
            </div>
        </div>

        <div class = "form-group">
            <label for = "inputPassword2" class = "col-md-2 control-label">Base Sp. Attack</label>
            <div class = "col-md-10">
                <input type = "text" class = "form-control" id = "inputPassword2" name = "SpAttack" value = <?php echo $data->spatk;?>>
            </div>
        </div>

        <div class = "form-group">
            <label for = "inputPassword2" class = "col-md-2 control-label">Base Sp. Defense</label>
            <div class = "col-md-10">
                <input type = "text" class = "form-control" id = "inputPassword2" name = "SpDefense" value = <?php echo $data->spdef;?>>
            </div>
        </div>

        <div class = "form-group">
            <label for = "inputPassword2" class = "col-md-2 control-label">Base Speed</label>
            <div class = "col-md-10">
                <input type = "text" class = "form-control" id = "inputPassword2" name = "Speed" value = <?php echo $data->spd;?>>
            </div>
        </div>

        <div class = "form-group">
            <label for = "inputPassword2" class = "col-md-2 control-label"></label>
            <div class = "col-md-10">
                <input type = "hidden" class = "form-control" id = "inputPassword2" name = "toiminto" value = <?php echo $data->submit;?>>
            </div>
        </div>
        
        <div class = "form-group">
            <label for = "inputPassword2" class = "col-md-2 control-label"></label>
            <div class = "col-md-10">
                <input type = "hidden" class = "form-control" id = "inputPassword2" name = "vanhaid" value = <?php echo $data->id;?>>
            </div>
        </div>
        
        <div class = "form-group">
            <div class = "col-md-offset-2 col-md-10">
                <button type = "submit" class = "btn btn-default"><?php echo $data->submit;?></button>
            </div>
        </div>
    </form>
</div>
