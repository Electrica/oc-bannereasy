<?php namespace Electrica\BannerEasy\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Banner Easy Category Back-end Controller
 */
class BannerEasyCategory extends Controller
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

        BackendMenu::setContext('Electrica.BannerEasy', 'bannereasy', 'bannereasycategory');
    }
}
