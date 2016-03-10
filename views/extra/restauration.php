<a class="back-to-main" href="<?php echo BASE_URL;?>extra"> 
    <button>
        <i class="fa fa-chevron-left" style="font-size:25px"></i>
    </button>
</a>
<div id="extras-restauration">
    <ul class="collection with-header">
        <li class="collection-header"><h4>Restauration</h4></li>
        <li class="collection-item avatar">
            <img src="http://salembier.fr/8936/une-bouteille-de-champagne-offerte-.jpg" alt="Bouteille-de-champagne" class="circle">
            <span class="title">Bouteille de champagne</span>
            <p style="font-style: italic">Information:</p>
            <p class="prix">40€</p>
            <p>...</p>
            <p>...</p>
            <a href="#champagne" class="modal-trigger secondary-content"><i class="fa fa-angle-right fa-3x"></i></a>
        </li>
        <li class="collection-item avatar">
            <img src="https://www.allomania.fr/wp-content/uploads/2014/05/sodas-1-5l.jpg" alt="Bouteille-de-soda" class="circle">
            <span class="title">Bouteille de soda</span>
            <p style="font-style: italic">Information:</p>
            <p class="prix">8€</p>
            <p>...</p>
            <p>...</p>
            <a href="#soda" class="modal-trigger secondary-content"><i class="fa fa-angle-right fa-3x"></i></a>
        </li>
        <li class="collection-item avatar">
            <img src="http://www.maisontaillefer.fr/35-32-thickbox/cornet-chouchou-220g-cacahuete-caramelisee.jpg" alt="Cacahuete" class="circle">
            <span class="title">Cacahuete</span>
            <p style="font-style: italic">Information:</p>
            <p class="prix">3€</p>
            <p>...</p>
            <p>...</p>
            <a href="#cacahuete" class="modal-trigger secondary-content"><i class="fa fa-angle-right fa-3x"></i></a>
        </li>
    </ul>
</div>

<!-- Modals -->
<div id="champagne" class="modal modal-fixed-footer">
    <div class="modal-content">
        <h4>Bouteille de champagne</h4>
        <img src="http://salembier.fr/8936/une-bouteille-de-champagne-offerte-.jpg" alt="Bouteille-de-champagne" class="circle">
        <p>La bouteille de champagne est à <b>40€</b></p>
        <div class="input-field col s12">
            <select>
                <option value="1" selected>1</option>
                <option value="2" >2</option>
                <option value="3" >3</option>
                <option value="4" >4</option>
                <option value="5" >5</option>
                <option value="6" >6</option>
                <option value="7" >7</option>
                <option value="8" >8</option>
                <option value="9" >9</option>
                <option value="10" >10</option>
            </select>
            <label>Materialize Select</label>
        </div>
        <input type="date" name="order-date" value="<?php echo date('Y-m-d');?>">
        <input type="time" name="order-time" value="<?php echo date('H:i');?>">
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-light btn-flat cancel"><i class="fa fa-ban"></i></a>
        <a href="#!" class="modal-action waves-effect waves-light btn-flat buy"><i class="fa fa-cart-plus"></i></a>
    </div>
</div>
<div id="soda" class="modal modal-fixed-footer">
    <div class="modal-content">
        <h4>Bouteille de soda</h4>
        <img src="https://www.allomania.fr/wp-content/uploads/2014/05/sodas-1-5l.jpg" alt="Bouteille-de-soda" class="circle">
        <p>La bouteille de soda est à <b>8€</b></p>
        <div class="input-field col s12">
            <select>
                <option value="1" selected>1</option>
                <option value="2" >2</option>
                <option value="3" >3</option>
                <option value="4" >4</option>
                <option value="5" >5</option>
                <option value="6" >6</option>
                <option value="7" >7</option>
                <option value="8" >8</option>
                <option value="9" >9</option>
                <option value="10" >10</option>
            </select>
            <label>Materialize Select</label>
        </div>
        <input type="date" name="order-date" value="<?php echo date('Y-m-d');?>">
        <input type="time" name="order-time" value="<?php echo date('H:i');?>">
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-light btn-flat cancel"><i class="fa fa-ban"></i></a>
        <a href="#!" class="modal-action waves-effect waves-light btn-flat buy"><i class="fa fa-cart-plus"></i></a>
    </div>
</div>
<div id="cacahuete" class="modal modal-fixed-footer">
    <div class="modal-content">
        <h4>Bouteille de champagne</h4>
        <img src="http://www.maisontaillefer.fr/35-32-thickbox/cornet-chouchou-220g-cacahuete-caramelisee.jpg" alt="Cacahuete" class="circle">
        <p>Le paquet de 250 g est à <b>3€</b></p>
        <div class="input-field col s12">
            <select>
                <option value="1" selected>1</option>
                <option value="2" >2</option>
                <option value="3" >3</option>
                <option value="4" >4</option>
                <option value="5" >5</option>
                <option value="6" >6</option>
                <option value="7" >7</option>
                <option value="8" >8</option>
                <option value="9" >9</option>
                <option value="10" >10</option>
            </select>
            <label>Materialize Select</label>
        </div>
        <input type="date" name="order-date" value="<?php echo date('Y-m-d');?>">
        <input type="time" name="order-time" value="<?php echo date('H:i');?>">
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-light btn-flat cancel"><i class="fa fa-ban"></i></a>
        <a href="#!" class="modal-action waves-effect waves-light btn-flat buy"><i class="fa fa-cart-plus"></i></a>
    </div>
</div>
<input type="hidden" value="543" id="idclient">