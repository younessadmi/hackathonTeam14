<div class="container-custom">
    <!-- Header -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#e1e1e1">
    <tr>
        <td height="20"></td>
    </tr>
    <tr>
        <td>
            <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#ffffff" style="border-radius: 10px 10px 0 0;">
                <tr>
                    <td>
                        <table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
                            <tbody>
                                <tr>
                                    <td>
                                        <table width="220" border="0" cellpadding="0" cellspacing="0" align="left" class="col">
                                            <tbody>
                                                <tr>
                                                    <td align="left"> <img src="<?php echo BASE_URL;?>img/numerique BW_Master_Brand_Logo_RGB_300_DPI.jpg" style="width:100%" alt="logo" border="0" /></td>
                                                </tr>
                                                <tr class="hiddenMobile">
                                                    <td height="40"></td>
                                                </tr>
                                                <tr class="visibleMobile">
                                                    <td height="20"></td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size: 12px; color: #5b5b5b; font-family: 'Open Sans', sans-serif; line-height: 18px; vertical-align: top; text-align: left;">
                                                        Bonjour, <?php echo $bill['client']['firstname'], ' ', $bill['client']['name'];?>.
                                                        <br> Nous vous remercions d'avoir choisi Best Western pour votre séjour.
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size: 12px; color: #5b5b5b; font-family: 'Open Sans', sans-serif; line-height: 18px; vertical-align: top; text-align: left;">Du <b><?php echo date('d F Y', strtotime($bill['resa']['date_start']));?></b> au <b><?php echo date('d F Y', strtotime($bill['resa']['date_end']));?></b></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <table width="220" border="0" cellpadding="0" cellspacing="0" align="right" class="col">
                                            <tbody>
                                                <tr class="visibleMobile">
                                                    <td height="20"></td>
                                                </tr>
                                                <tr>
                                                    <td height="5"></td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size: 21px; color: #013E88; letter-spacing: -1px; font-family: 'Open Sans', sans-serif; line-height: 1; vertical-align: top; text-align: right;">
                                                        Facture
                                                    </td>
                                                </tr>
                                                <tr>
                                                <tr class="hiddenMobile">
                                                    <td height="50"></td>
                                                </tr>
                                                <tr class="visibleMobile">
                                                    <td height="20"></td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size: 12px; color: #5b5b5b; font-family: 'Open Sans', sans-serif; line-height: 18px; vertical-align: top; text-align: right;">
                                                        <small>FACTURE</small> #<?php echo $bill['bill']['id'];?><br />
                                                        <small><?php echo date('d F Y');?></small>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<!-- /Header -->
<!-- Order Details -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#e1e1e1">
    <tbody>
        <tr>
            <td>
                <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#ffffff">
                    <tbody>
                        <tr>
                        <tr class="hiddenMobile">
                            <td height="60"></td>
                        </tr>
                        <tr class="visibleMobile">
                            <td height="40"></td>
                        </tr>
                    </tr>
                <tr>
                    <td>
                        <table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
                            <tbody>
                                <tr>
                                    <th style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; font-weight: normal; line-height: 1; vertical-align: top; padding: 0 10px 7px 0;" width="52%" align="left">
                                        Item
                                    </th>
                                    <th style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; font-weight: normal; line-height: 1; vertical-align: top; padding: 0 0 7px;" align="left">
                                        <small>Quantité</small>
                                    </th>
                                    <th style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; font-weight: normal; line-height: 1; vertical-align: top; padding: 0 0 7px;" align="center">
                                        HT
                                    </th>
                                    <th style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #1e2b33; font-weight: normal; line-height: 1; vertical-align: top; padding: 0 0 7px;" align="right">
                                        TTC
                                    </th>
                                </tr>
                                <tr>
                                    <td height="1" style="background: #bebebe;" colspan="4"></td>
                                </tr>
                                <tr>
                                    <td height="10" colspan="4"></td>
                                </tr>
                                <?php $sommeHT = (($bill['resa']['price']*$bill['resa']['nights'])-((($bill['resa']['price']*$bill['resa']['nights'])*20)/100));?>
                                <?php $sommeTTC = $bill['resa']['price']*$bill['resa']['nights'];?>
                                <tr>
                                    <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #013E88;  line-height: 18px;  vertical-align: top; padding:10px 0;" class="article">
                                    CHAMBRE: <?php echo strtoupper($bill['resa']['type']);?>
                                    </td>
                                    <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #646a6e;  line-height: 18px;  vertical-align: top; padding:10px 0;"><small> <?php echo $bill['resa']['nights'];?> nuité(s) </small></td>
                                    <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #646a6e;  line-height: 18px;  vertical-align: top; padding:10px 0;" align="center"><?php echo $sommeHT, $bill['resa']['currency']; ?></td>
                                    <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #1e2b33;  line-height: 18px;  vertical-align: top; padding:10px 0;" align="right"><?php echo $sommeTTC, $bill['resa']['currency']; ?></td>
                                </tr>
                                <tr>
                                    <td height="1" colspan="4" style="border-bottom:1px solid #e4e4e4"></td>
                                </tr>
                                <?php foreach($bill['orders'] as $order){?>
                                <?php $sommeHT += (($bill['products'][$order['id_product']]['price']*$order['quantity_ordered'])-((($bill['products'][$order['id_product']]['price']*$order['quantity_ordered'])*5.5)/100));?>
                                <?php $sommeTTC += $bill['products'][$order['id_product']]['price']*$order['quantity_ordered'];?>
                                <tr>
                                    <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #013E88;  line-height: 18px;  vertical-align: top; padding:10px 0;" class="article">
                                    <?php echo strtoupper($bill['products'][$order['id_product']]['name']);?>
                                    </td>
                                    <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #646a6e;  line-height: 18px;  vertical-align: top; padding:10px 0;"><small><?php echo $order['quantity_ordered'];?></small></td>
                                    <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #646a6e;  line-height: 18px;  vertical-align: top; padding:10px 0;" align="center"><?php echo (($bill['products'][$order['id_product']]['price']*$order['quantity_ordered'])-((($bill['products'][$order['id_product']]['price']*$order['quantity_ordered'])*5.5)/100)), $bill['products'][$order['id_product']]['currency'];?></td>
                                    <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #1e2b33;  line-height: 18px;  vertical-align: top; padding:10px 0;" align="right"><?php echo $bill['products'][$order['id_product']]['price']*$order['quantity_ordered'], $bill['products'][$order['id_product']]['currency'];?></td>
                                </tr>
                                <tr>
                                    <td height="1" colspan="4" style="border-bottom:1px solid #e4e4e4"></td>
                                </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td height="20"></td>
                </tr>
    </tbody>
</table>
</td>
</tr>
</tbody>
</table>
<!-- /Order Details -->
<!-- Total -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#e1e1e1">
    <tbody>
        <tr>
            <td>
                <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#ffffff">
                    <tbody>
                        <tr>
                            <td>

                                <!-- Table Total -->
                                <table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
                                    <tbody>
                                        <tr>
                                            <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #646a6e; line-height: 22px; vertical-align: top; text-align:right; ">
                                                Total HT
                                            </td>
                                            <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #646a6e; line-height: 22px; vertical-align: top; text-align:right; white-space:nowrap;" width="80">
                                                <?php echo $sommeHT, $bill['resa']['currency'];?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #000; line-height: 22px; vertical-align: top; text-align:right; ">
                                                <strong>Total TTC</strong>
                                            </td>
                                            <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #000; line-height: 22px; vertical-align: top; text-align:right; ">
                                                <strong><?php echo $sommeTTC, $bill['resa']['currency'];?></strong>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #b0b0b0; line-height: 22px; vertical-align: top; text-align:right; "><small>TAXE</small></td>
                                            <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #b0b0b0; line-height: 22px; vertical-align: top; text-align:right; ">
                                                <small><?php echo $sommeTTC-$sommeHT, $bill['resa']['currency'];?></small>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>
<!-- /Total -->
<!-- Information -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#e1e1e1">
    <tbody>
        <tr>
            <td>
                <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#ffffff">
                    <tbody>
                        <tr>
                        <tr class="hiddenMobile">
                            <td height="60"></td>
                        </tr>
                        <tr class="visibleMobile">
                            <td height="40"></td>
                        </tr>
                    </tr>
                <tr>
                    <td>
                        <table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
                            <tbody>
                                <tr>
                                    <td>
                                        <table width="220" border="0" cellpadding="0" cellspacing="0" align="right" class="col">
                                            <tbody>
                                                <tr class="visibleMobile">
                                                    <td height="20"></td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size: 11px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; line-height: 1; vertical-align: top; ">
                                                        <strong>PAYMENT METHOD</strong>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="100%" height="10"></td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; line-height: 20px; vertical-align: top; ">
                                                        Credit Card<br> Credit Card Type: Visa<br> Worldpay Transaction ID: <a href="#" style="color: #013E88; text-decoration:underline;">4185939336</a><br>
                                                        <a href="#" style="color:#b0b0b0;">Right of Withdrawal</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr class="hiddenMobile">
                    <td height="60"></td>
                </tr>
                <tr class="visibleMobile">
                    <td height="30"></td>
                </tr>
    </tbody>
</table>
</td>
</tr>
</tbody>
</table>
<!-- /Information -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#e1e1e1">

    <tr>
        <td>
            <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#ffffff" style="border-radius: 0 0 10px 10px;">
                <tr>
                    <td>
                        <table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
                            <tbody>
                                <tr>
                                    <td style="font-size: 12px; color: #5b5b5b; font-family: 'Open Sans', sans-serif; line-height: 18px; vertical-align: top; text-align: left;">
                                        Nous vous souhaitons une agréable journée.
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr class="spacer">
                    <td height="50"></td>
                </tr>

            </table>
        </td>
    </tr>
    <tr>
        <td height="20"></td>
    </tr>
</table>
</div>