<?php
function load_styles() {
    wp_enqueue_style("theme", get_stylesheet_directory_uri() . "/style.css");
    wp_enqueue_style("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"); 
    /*Bootstrap skal linkes til, i stedet for indlæses fra server/PC, for hastighedsoptimering*/ 
    
}
