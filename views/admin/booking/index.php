<div class="container-custom">

    <div class="container-title row">
        RESERVATIONS
    </div>
    
    <div class="datatable filter row">
        <div class="input-field col s1">
            <input id="id" type="text" class="validate">
            <label for="last_name">ID</label>
        </div>
        <div class="input-field col s1">
            <input id="nb_client" type="text" class="validate">
            <label for="name">N° Client</label>
        </div>
        <div class="input-field col s1">
            <input id="nb_room" type="text" class="validate">
            <label for="name">N° Room</label>
        </div>
        <div class="input-field col s1">
            <input id="type" type="text" class="validate">
            <label for="name">Type</label>
        </div>  
        <div class="input-field col s1">
            <input id="nights" type="text" class="validate">
            <label for="name">Nuits</label>
        </div>  
        <div class="input-field col s1">
            <input id="price" type="text" class="validate">
            <label for="name">Prix</label>
        </div>  
        <div class="input-field col s2">
            <input id="start_date" type="text" class="validate">
            <label for="name">Date de Debut</label>
        </div>
        <div class="input-field col s2">
            <input id="end_date" type="text" class="validate">
            <label for="name">Date de Fin</label>
        </div>     
    </div>

    <tbody>

    </tbody>

    <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>N° Client</th>
                <th>N° Room</th>
                <th>Date Debut</th>
                <th>Date Fin</th>
                <th>Type</th>
                <th>Nuits</th>
                <th>Prix</th>
                <th style="display:none"></th>
            </tr>
        </thead>
        <tbody>
            
            <?php foreach ($bookings['bookings'] as &$value) { ?>
           
            <tr>
                <td name="id"><?php echo $value['id'] ?></td>
                <td name="Nom"><?php echo $value['id_client'] ?></td>
                <td name="Grade"><?php echo $value['id_room'] ?></td>
                <td name="Pays"><?php echo $value['date_start'] ?></td>
                <td name="Société"><?php echo $value['date_end'] ?></td>
                <td name="Société"><?php echo $value['type'] ?></td>
                <td name="Société"><?php echo $value['nights'] ?></td>
                <td name="Société"><?php echo $value['price'].' '.$value['currency'] ?></td>
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