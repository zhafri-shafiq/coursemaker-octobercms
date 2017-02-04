<?php namespace Zhafri\Coursemaker\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Quizzes extends Controller
{
    public $implement = ['Backend\Behaviors\ListController','Backend\Behaviors\FormController','Backend\Behaviors\ReorderController'];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public $requiredPermissions = [
        'user' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Zhafri.Coursemaker', 'main-menu-item');
    }
}