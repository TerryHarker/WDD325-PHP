<?php
// Funktion definieren

/**
 * wrap_html - packt einen Text in ein HTML Element
 * @param string $text - text, um den ein HTML Element gepackt wird
 * @param string $tag - HTML Tag, den ich um den Text packen soll
 * @return string $html - Der Text mit dem HTML Element
 */
function wrap_html( $text, $tag, $class='' ){
    $classAttr = '';
    if(!empty($class)){
        $classAttr = ' class="'.$class.'"';
    }

    // Konstante mit konfiguriertem Standard Tag, falls der Tag leer ist
    if(empty($tag)){
        $tag = DEFAULT_TAG;
    }

    $html = '<'.$tag.$classAttr.'>'.$text.'</'.$tag.'>';

    return $html;
}
?>