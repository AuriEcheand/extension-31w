<?php

/**
 * Plugin Name: Short_2
 * Description: Structure d'extension utilisant plusieurs dossier et permettant d'afficher
 * Author: Auristela Echeverria
 * Plugin URI: https://github.com/AuriEcheand/extension-31w
 */

function sh2_31W_enqueue()
{
    $version_css = filemtime(plugin_dir_path(__FILE__) . "style.css");
    $version_js = filemtime(plugin_dir_path(__FILE__) . "script/message.js");
    //var_dump(__FILE__); die()
    wp_enqueue_style(   'sh2_31W_css', 
                         plugin_dir_url(__FILE__) . "style.css", 
                         array(), 
                         $version_css);

    wp_enqueue_script(   'sh2_31W_js', 
                        plugin_dir_url(__FILE__) . "script/message.js", 
                        array(), 
                        $version_js, 
                        true);
}
add_action('wp_enqueue_scripts', 'sh2_31W_enqueue');

function genere_adresse(){
///////////////////////////HTML
$contenu = '<code class="code__adresse" style="display:none;">';
$contenu .= get_the_content();//"3800, rue Sherbrooke Est
//Montréal (Québec) H1X 2A2 | 514 254-7131 ";
$contenu .= '</code>';
$contenu .= '<button id="mon_bouton">OK</button>';
return $contenu;

}
add_shortcode('adr', 'genere_adresse');  