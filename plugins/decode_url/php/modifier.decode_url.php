<?php
function smarty_modifier_decode_url($text) {
    return htmlspecialchars(urldecode($text));
}
?>
