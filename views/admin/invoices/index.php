<div class="container-custom">

    <div class="container-title row">
        FACTURES
    </div>
    
    <div class="datatable filter row">
        <div class="input-field col s1">
            <input id="id" type="text" class="validate">
            <label for="last_name">ID</label>
        </div>
        <div class="input-field col s2">
            <input id="customer" type="text" class="validate">
            <label for="name">N° Client</label>
        </div>
        <div class="input-field col s2">
            <input id="grade" type="text" class="validate">
            <label for="name">N° Reservation</label>
        </div>     
        <div class="input-field col s4">
            <select>
              <option value="" disabled selected>Status</option>
              <option value="1">Payé</option>
              <option value="2">En attente de Paiement</option>
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
                <th>N° Client</th>
                <th>N° Reservation</th>
                <th class="status">Status</th>
                <th class="status">Action</th>
                <th style="display:none"></th>
            </tr>
        </thead>
        <tbody>        
            <?php foreach ($invoices['invoices'] as &$value) { ?>
            <tr>
                <td name="id"><?php echo $value['id'] ?></td>
                <td name="Customer"><?php echo $value['id_client'] ?></td>
                <td name="Reservation"><?php echo $value['id_reservation'] ?></td>
                <td name="Paid" class="status">
                    <?php if($value['is_paid']){ ?>
                        <i class="fa fa-check-circle fa-2x paid"></i>
                    <?php }else{ ?>
                        <i class="fa fa-clock-o fa-2x waiting-for-payment"></i>
                    <?php }?>
                </td>
                <td name="Reservation">
                    <a href="<?php echo BASE_URL;?>admin/invoices/<?php echo $value['id'] ?>" class="waves-effect waves-light btn btn-action"><i class="fa fa-share-square-o"></i></a>
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