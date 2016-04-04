<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

add_filter( 'show_admin_bar', '__return_false' );


add_filter( 'ssp_episode_download_link', 'ssp_use_raw_audio_file_url', 10, 3 );
function ssp_use_raw_audio_file_url ( $url, $episode_id, $file ) {
  return $file;
}

?>
