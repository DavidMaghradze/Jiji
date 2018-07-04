<h1>  <?php single_term_title(); ?> </h1>
<?php 
$cat_id = get_queried_object_id();
?>

<ul>
<?php wp_list_categories( array(
        'orderby'            => 'id',
        'show_count'         => true,
        'use_desc_for_title' => false,
        'child_of'           => $cat_id,
        'title_li'            => ''
    ) ); 
    ?>
</ul>