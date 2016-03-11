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
                <td name="Nb"><?php echo $value['nb'].' '.$value['firstname'] ?></td>
                <td name="Type"><?php echo $value['type'] ?></td>
                <td name="Nettoyé">
                    <?php if($value['clean']){ ?>
                        OUI
                    <?php }else{ ?>
                        NON
                    <?php }?>
                </td>
                <td style="display:none">
                    
                </td>
            </tr>
            <?php } ?>
            
        </tbody>
    </table>
</div>