<?php

add_action( 'wp_enqueue_scripts', 'powen_lite_child_enqueue' );
function powen_lite_child_enqueue() {
    wp_enqueue_style( 'powen-lite-style', get_template_directory_uri() . '/style.css');
}

add_filter( 'woothemes_our_team_item_template', 'new_team_member_template' );

function new_team_member_template( $tpl ) {
    $tpl = '<div itemscope itemtype="http://schema.org/Person" class="%%CLASS%%">%%TITLE%% %%AVATAR%% <div id="team-member-%%ID%%" class="team-member-text" itemprop="description">%%TEXT%% %%AUTHOR%%</div></div>';
    return $tpl;
}

?>