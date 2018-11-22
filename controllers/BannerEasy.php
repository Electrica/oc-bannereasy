<?php namespace Electrica\BannerEasy\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Banner Easy Back-end Controller
 */
class BannerEasy extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Electrica.BannerEasy', 'bannereasy', 'bannereasy');
    }

}
