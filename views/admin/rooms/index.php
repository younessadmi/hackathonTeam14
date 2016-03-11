<div class="container-custom">

    <div class="container-title row">
        CHAMBRES
    </div>
    
    <div class="datatable filter row">
        <div class="input-field col s1">
            <input id="id" type="text" class="validate">
            <label for="last_name">ID</label>
        </div>
        <div class="input-field col s2">
            <input id="name" type="text" class="validate">
            <label for="name">Name</label>
        </div>
        <div class="input-field col s2">
            <input id="grade" type="text" class="validate">
            <label for="name">Grade</label>
        </div>
        <div class="input-field col s2">
            <input id="pays" type="text" class="validate">
            <label for="name">Pays</label>
        </div>
        <div class="input-field col s2">
            <input id="societe" type="text" class="validate">
            <label for="name">Société</label>
        </div>        
        <div class="input-field col s2">
            <select>
              <option value="" disabled selected>Présent</option>
              <option value="1">Oui</option>
              <option value="2">Non</option>
              <option value="3">Tous</option>
            </select>
        </div>
    </div>

    <tbody>

    </tbody>

    <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Grade</th>
                <th>Pays</th>
                <th>Société</th>
                <th>Présent</th>
            </tr>
        </thead>
        <tbody>
            
            <?php foreach ($rooms as &$value) { ?>
            <tr>
                <td name="id"><?php echo $value['id'] ?></td>
                <td name="Nom"><?php echo $value['name'].' '.$value['firstname'] ?></td>
                <td name="Grade"><?php echo $value['rank'] ?></td>
                <td name="Pays"><?php echo $value['country'] ?></td>
                <td name="Société"><?php echo $value['company'] ?></td>
                <td name="Présent">
                    <?php if($value['present']){ ?>
                        OUI
                    <?php }else{ ?>
                        NON
                    <?php }?>
                </td>
                <td style="display:none">
                    <p name="id"><?php echo $value['id'] ?></p>
                    <p name="Nom"><?php echo $value['name'].' '.$value['firstname'] ?></p>
                    <p name="Grade"><?php echo $value['rank'] ?></p>
                    <p name="Pays"><?php echo $value['country'] ?></p>
                    <p name="Société"><?php echo $value['company'] ?></p>
                    <p name="Email"><?php echo $value['email'] ?></p>
                    <p name="Téléphone"><?php echo $value['phone'] ?></p>
                    <p name="Addresse"><?php echo $value['address'] ?></p>
                    <p name="Présent">
                        <?php if($value['present']){ ?>
                            OUI
                        <?php }else{ ?>
                            NON
                        <?php }?>
                    </p>
                </td>
            </tr>
            <?php } ?>
            
        </tbody>
    </table>
</div>