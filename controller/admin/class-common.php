<?php
namespace company_plugin\controller\admin;


use company_plugin\App;
use company_plugin\controller\Base;

class Common extends Base {


    protected function init(){


        register_activation_hook( App::$file_path, array($this,'cb_register_activation_hook') );
        register_deactivation_hook( App::$file_path , array($this,'cb_register_deactivation_hook') );




    }



    function cb_register_activation_hook(){



    }

    function cb_register_deactivation_hook(){


    }





}