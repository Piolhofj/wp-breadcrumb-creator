<?php
    // CREATE BREADCRUMB
    function createBreadcrumb(){
        if(is_home()||is_front_page()){
            return '<a href="'.site_url().'">Home</a>';
        }elseif(is_page()){
            return '<a href="'.site_url().'">Home</a><div>'.get_queried_object()->post_title.'</div>';
        }elseif(is_tax('categorias')){
            return '<a href="'.site_url().'">Home</a><a href="'.site_url('fun_e_tips').'">FUN & TIPS</a>';
        }elseif(is_archive()){
            return '<a href="'.site_url().'">Home</a><a href="'.site_url(get_queried_object()->name).'">'.get_queried_object()->label.'</a>';
        }elseif(is_single()){
            return '<a href="'.site_url().'">Home</a><a href="'.site_url(get_queried_object()->post_type).'" class="tupp"><strong>'.ucfirst(get_queried_object()->post_type).'</strong></a><div>'.get_the_title().'</div>';
        }
    }
?>