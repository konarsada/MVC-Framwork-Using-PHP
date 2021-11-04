<?php

namespace Core;

/**
 * View
 */
class View {
    /**
     * Render a view file
     *
     * @param string $view  The view file
     *
     * @return void
     */
    public static function render($view, $args = []) {
        // converting the associative array into individual variables
        extract($args, EXTR_SKIP);

        $file = "../App/Views/$view";  // relative to Core directory

        if (is_readable($file)) {
            require $file;
        }
        else {
            echo "$file not found";
        }
    }
}
