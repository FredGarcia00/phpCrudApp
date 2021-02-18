<?php 
include ('functions.php');
include ('header.php');
?>

    <div class="container">
        <div class="row">
        <!-- below is the individual posts stored in the db -->
        <?php get_all_data();?>
        </div>
    </div>


<?php 
include ('footer.php');
?>
