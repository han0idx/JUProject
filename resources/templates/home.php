<!-- Homepage content -->
<h2>Home Page</h2>





    
<?php if(isset($_GET["test"])): ?>
    <div id="contentlist">
        <?php echo 'your inside get page'; ?>
    </div>
<?php else: ?>

    <div id="listbox">
        <?php echo $testList;?> 
    </div>

<?php endif; ?>