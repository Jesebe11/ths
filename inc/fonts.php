<?php
    add_action("wp_enqueue_scripts", "ths_insertar_google_fonts");

    function ths_insertar_google_fonts(){
        $url = "https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400;500;600;700;800&display=swap";
        wp_enqueue_style('google_fonts', $url);
    }
?>