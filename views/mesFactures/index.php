
<section class="list-bill">
	<a class="back-to-main" href="<?php echo BASE_URL;?>"> 
		<button>
		<i class="fa fa-chevron-left" style="font-size:25px"></i>
		</button>
	</a>
	<h2>Mes factures</h2>

	<div class="collection historic-bill">
	    <a href="#!" class="collection-item active show-actual-bill-detail">Facture 6 <i class="fa fa-history pull-right" style="color:orange;font-size:30px"></i></a>
	    <a href="#!" class="collection-item show-historic-bill-detail">Facture 5 <i class="fa fa-check pull-right" style="color:green;font-size:30px"></i></a>
	    <a href="#!" class="collection-item show-historic-bill-detail">Facture 4 <i class="fa fa-check pull-right" style="color:green;font-size:30px"></i></a>
	    <a href="#!" class="collection-item show-historic-bill-detail">Facture 3 <i class="fa fa-check pull-right" style="color:green;font-size:30px"></i></a>
	    <a href="#!" class="collection-item show-historic-bill-detail">Facture 2 <i class="fa fa-check pull-right" style="color:green;font-size:30px"></i></a>
	    <a href="#!" class="collection-item show-historic-bill-detail">Facture 1 <i class="fa fa-check pull-right" style="color:green;font-size:30px"></i></a>
	</div>
</section>

<section class="actual-bill-detail" style="display:none">
	<button class="btn-back-list-bill-actual">
		<i class="fa fa-chevron-left" style="font-size:25px"></i>
	</button>
	<h2>Détail Facture actuelle</h2>
	<table>
        <thead>
          <tr>
              <th data-field="name">Produit</th>
              <th data-field="price">Price</th>
              <th>Status</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Chambre simple deluxe</td>
            <td>120€</td>
            <td></td>
          </tr>
          <tr>
            <td>Champagne</td>
            <td>60€</td>
            <td></td>
          </tr>
          <tr>
            <td>Durex</td>
            <td>10€</td>
            <td></td>
          </tr>
        </tbody>
    </table>
</section>


<section class="historic-bill-detail" style="display:none">
	<button class="btn-back-list-bill-historic">
		<i class="fa fa-chevron-left" style="font-size:25px"></i>
	</button>
	<h2>Détail historique</h2>
	<table>
        <thead>
          <tr>
              <th data-field="name">Produit</th>
              <th data-field="price">Price</th>
              <th>Status</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Chambre double deluxe (3nuits)</td>
            <td>320€</td>
            <td><i class="fa fa-check"></i></td>
          </tr>
          <tr>
            <td>Champagne</td>
            <td>80€</td>
            <td><i class="fa fa-check"></i></td>
          </tr>
          <tr>
            <td>Durex</td>
            <td>30€</td>
            <td><i class="fa fa-check"></i></td>
          </tr>
          <tr>
            <td>Session de Golf</td>
            <td>50€</td>
            <td><i class="fa fa-check"></i></td>
          </tr>
          <tr>
            <td>Total</td>
            <td>480€</td>
            <td></td>
          </tr>
        </tbody>
    </table>

    <button class="waves-effect waves-light btn btn-cta-pdf" style=""><i class="fa fa-file-pdf-o" style="margin-right:10px"></i>Générer PDF</button>
</section>