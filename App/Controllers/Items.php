<?php

namespace App\Controllers;

use \Core\View;

/**
 * Items controller
 */
class Items extends Authenticated {
    /**
     * Items index
     * 
     * @return void
     */
    public function indexAction() {
        View::renderTemplate('Items/index.html');
    }

    /**
     * Add a new item
     * 
     * @return void
     */
    public function newAction() {
        echo "new action";
    }

    /**
     * Show item
     * 
     * @return void
     */
    public function showAction() {
        echo "show action";
    }
}