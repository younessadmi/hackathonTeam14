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
            <input id="nb" type="text" class="validate">
            <label for="name">N°</label>
        </div>
        <div class="input-field col s2">
            <input id="type" type="text" class="validate">
            <label for="name">Type</label>
        </div>
        <div class="input-field col s2">
            <input id="clean" type="text" class="validate">
            <label for="name">Nettoyé</label>
        </div>
    </div>

    <tbody>

    </tbody>

    <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>N°</th>
                <th>Type</th>
                <th>Nettoyé</th>
                <th style="display:none"></th>
            </tr>
        </thead>
        <tbody>
                        
            <?php foreach ($rooms['rooms'] as &$value) { ?>
            <tr>
                <td name="id"><?php echo $value['id'] ?></td>
                <td name="Nb"><?php echo $value['nb'] ?></td>
                <td name="Type"><?php echo $value['type'] ?></td>
                <td name="Nettoyé">
                    <?php if($value['clean']){ ?>
                        OUI
                    <?php }else{ ?>
                        NON
                    <?php }?>
                </td>
                <td style="display:none">
                    <p name="id"><?php echo $value['id_client'] ?></p>
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