<!-- Homepage content -->
<div class="rectangle"><h2>Home page</h2></div>
<div class="triangle-l"></div>
<div class="triangle-r"></div>
 
<?php 
//Si le GET["test"] est defini alors afficher son contenu
        if(isset($_GET["test"])): 
?>
    <div id="contentlist">
        <?php   
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
//                        $(this).next().bPopup({
                        var popup = $(this).attr('value');
                        $('#'+popup).bPopup({
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