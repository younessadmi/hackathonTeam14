
<section class="list-bill">
	<a class="back-to-main" href="<?php echo BASE_URL;?>"> 
		<button>
		<i class="fa fa-chevron-left" style="font-size:25px"></i>
		</button>
	</a>
	<h2>Mes factures</h2>

	<ul class="collapsible popout" data-collapsible="accordion">
	    <li class="active">
	      <div class="collapsible-header active">Du 09/03/2016 au 14/03/2016 <i class="fa fa-history" style="color:orange;font-size:30px"></i></div>
	      <div class="collapsible-body active">
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
			            <td>Chambre double (5 nuits)</td>
			            <td>445€</td>
			            <td></td>
			          </tr>
			          <tr>
			            <td>Champagne (x1)</td>
			            <td>40€</td>
			            <td></td>
			          </tr>
			          <tr>
			            <td>Cacahuete (x2)</td>
			            <td>6€</td>
			            <td></td>
			          </tr>
			          <tr>
			            <td>Total provisoire</td>
			            <td>491€</td>
			            <td></td>
			          </tr>
			        </tbody>
			    </table>
			    <a href="<?php echo BASE_URL;?>mesFactures/exportPDF/3" target="_blank"><button class="waves-effect waves-light btn btn-cta-pdf" style=""><i class="fa fa-file-pdf-o" style="margin-right:10px"></i>Générer PDF</button></a>
	      </div>
	    </li>
	    <li>
	      <div class="collapsible-header">Du 04/03/2016 au 07/03/2016 <i class="fa fa-check" style="color:green;font-size:30px"></i></div>
	      <div class="collapsible-body">
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
			            <td>Chambre double (3 nuits)</td>
			            <td>327€</td>
			            <td><i class="fa fa-check"></i></td>
			          </tr>
			          <tr>
			            <td>Total</td>
			            <td>327€</td>
			            <td></td>
			          </tr>
			        </tbody>
			    </table>
			    <a href="<?php echo BASE_URL;?>mesFactures/exportPDF/2" target="_blank"><button class="waves-effect waves-light btn btn-cta-pdf" style=""><i class="fa fa-file-pdf-o" style="margin-right:10px"></i>Générer PDF</button></a>
	      </div>
	    </li>
  </ul>
</section>