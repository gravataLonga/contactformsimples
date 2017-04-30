<?php namespace Gravatalonga\ContactFormSimples\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class ContactList extends Controller
{
    public $implement = ['Backend\Behaviors\ListController'];
    
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Gravatalonga.ContactFormSimples', 'main-menu-item');
    }
}