<footer>

</footer>
<?php if(isset($admin) && $admin){?>
<script>
    var date = "<?php echo $_SESSION['last_order']['order_date'] ;?>";
    
    $(document).ready(function(){
        setTimeout(function(){
            checkOrder();
        }, 1000);
    });

    function checkOrder(){
        $.ajax({
            url: '<?php echo BASE_URL;?>admin/checkOrder',
            method: 'POST',
            data: { date: date },
            dataType: 'JSON'
        }).done(function(data, textStatus, jqXHR){
            if(data.newOrders.length > 0){
                console.log(data);
                data.newOrders.forEach(function(e){
                    Materialize.toast(e.client_firstname+' '+e.client_name+' a commandé '+e.quantity_ordered+'x '+e.name, 10000);
                });
                
                date = data.last_order.order_date;
            }

            setTimeout(function(){
                checkOrder();
            }, 1000);
        }).fail(function(jqXHR, textStatus, errorThrown){
            console.error(jqXHR);
        });
    }

</script>
<?php }?>
</body>
</html>