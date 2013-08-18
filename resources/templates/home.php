<!-- Homepage content -->
<h2>Home Page</h2>

 
<?php 
//Si le GET["test"] est defini alors afficher son contenu
        if(isset($_GET["test"])): 
?>
    <div id="contentlist">
        <?php   echo 'your inside get page';
                echo $fullList;
        ?>
    </div>
<?php else: 
//Sinon afficher la liste de tout les tests dans la Home page    
?>

    <div id="listbox">
        <?php echo $testList;?> 
    </div>

<?php endif; ?>

<script>
    ;(function($) {
            $(function() {
                    $('.mrfull').bind('click', function(e) {
                            e.preventDefault();
                            $('#element_to_pop_up').bPopup({
                            speed: 650,
                            transition: 'slideIn'
                    });
                    
                    });
                    
                    $('.checkin').click(function(){
                        if($(this).is(':checked')){
                           $(this).next().css("text-decoration","line-through");
                        }else{
                           $(this).next().css("text-decoration","none");  
                        }
                       
                    });
                    


             });
     })(jQuery);
</script>