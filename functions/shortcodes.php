<?php

/**
* Small Margin Box (Start)
*/
function shortcodeSmallMarginBoxStart() {
    return '<div class="smallmarginbox">' . $content;
}
add_shortcode('SmallMarginBoxStart', 'shortcodeSmallMarginBoxStart');


/**
* Small Margin Box (End)
*/
function shortcodeSmallMarginBoxEnd() {
    return '</div>';
}
add_shortcode('SmallMarginBoxEnd', 'shortcodeSmallMarginBoxEnd');


/**
* Huge Margin Box (Start)
*/
function shortcodeHugeMarginBoxStart() {
    return '<div class="hugemarginbox">' . $content;
}
add_shortcode('HugeMarginBoxStart', 'shortcodeHugeMarginBoxStart');


/**
* Huge Margin Box (End)
*/
function shortcodeHugeMarginBoxEnd() {
    return '</div>';
}
add_shortcode('HugeMarginBoxEnd', 'shortcodeHugeMarginBoxEnd');


/**
* ShareBox
*/

function shortcodeShareBox() {
    $url = get_permalink();
    $o = '<div class="sharebox">';
        $o .= '<h2>/// SHARE</h2>';
        $o .= '<ul>';
            $o .= '<li><a href="http://www.facebook.com/share.php?u=' . $url . '">Facebook</a></li>';
            $o .= '<li><a href="http://twitter.com/home?status=' . $url . '">Twitter</a></li>';
            $o .= '<li><a href="https://plusone.google.com/_/+1/confirm?url=' . $url . '">Google+</a></li>';
        $o .= '</ul>';
    $o .= '</div>';
    return $o;
}
add_shortcode('ShareBox', 'shortcodeShareBox');
