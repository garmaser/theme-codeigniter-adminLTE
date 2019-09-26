<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
  | -------------------------------------------------------------------
  | MENUS DEL SISTEMA
  | -------------------------------------------------------------------
  | Este archivo contiene los menus del sistema
  |
  | -------------------------------------------------------------------
  | EXPLICACION DE COMO UTILIZAR
  | -------------------------------------------------------------------
  |llamar en el constructor de un controlador de la siguiente manera
  |$this->output->set_template('nombre_plantilla','nombre_menu');
 */


$config['menu_adminlte'] = array(
    array('principal' => TRUE, 'nombre' => 'Dashboard', 'url' => '', 'icono' => 'fa-dashboard'),
    array('principal' => FALSE, 'nombre' => 'Dashboard V1', 'url' => 'example_adminlte/index', 'icono' => ''),
    array('principal' => FALSE, 'nombre' => 'Dashboard V2', 'url' => 'example_adminlte/index_dos', 'icono' => ''),
    
    array('principal' => TRUE, 'nombre' => 'Layout Options', 'url' => '', 'icono' => 'fa-files-o'),
    array('principal' => FALSE, 'nombre' => 'Top navigation', 'url' => 'example_adminlte/layout_top_nav', 'icono' => ''),
    array('principal' => FALSE, 'nombre' => 'Boxed', 'url' => 'example_adminlte/layout_boxed', 'icono' => ''),
    array('principal' => FALSE, 'nombre' => 'Fixed', 'url' => 'example_adminlte/layout_fixed', 'icono' => ''),
    array('principal' => FALSE, 'nombre' => 'Collapsed sidebar', 'url' => 'example_adminlte/layout_collapsed_sidebar', 'icono' => ''),
    
    array('principal' => TRUE, 'nombre' => 'Widgets', 'url' => 'example_adminlte/widgets', 'icono' => 'fa-th'),
    
    array('principal' => TRUE, 'nombre' => 'Charts', 'url' => '', 'icono' => 'fa-pie-chart'),
    array('principal' => FALSE, 'nombre' => 'ChartJS', 'url' => 'example_adminlte/charts_chartjs', 'icono' => ''),
    array('principal' => FALSE, 'nombre' => 'Morris', 'url' => 'example_adminlte/charts_morris', 'icono' => ''),
    array('principal' => FALSE, 'nombre' => 'Flot', 'url' => 'example_adminlte/charts_flot', 'icono' => ''),
    array('principal' => FALSE, 'nombre' => 'Inline charts', 'url' => 'example_adminlte/charts_inline', 'icono' => ''),
    
    array('principal' => TRUE, 'nombre' => 'UI Elements', 'url' => '', 'icono' => 'fa-laptop'),
    array('principal' => FALSE, 'nombre' => 'General', 'url' => 'example_adminlte/ui_general', 'icono' => ''),
    array('principal' => FALSE, 'nombre' => 'Icons', 'url' => 'example_adminlte/ui_icons', 'icono' => ''),
    array('principal' => FALSE, 'nombre' => 'Buttons', 'url' => 'example_adminlte/ui_buttons', 'icono' => ''),
    array('principal' => FALSE, 'nombre' => 'Sliders', 'url' => 'example_adminlte/ui_sliders', 'icono' => ''),
    array('principal' => FALSE, 'nombre' => 'Timeline', 'url' => 'example_adminlte/ui_timeline', 'icono' => ''),
    array('principal' => FALSE, 'nombre' => 'Modals', 'url' => 'example_adminlte/ui_modals', 'icono' => ''),
    
    array('principal' => TRUE, 'nombre' => 'Forms', 'url' => '', 'icono' => 'fa-edit'),
    array('principal' => FALSE, 'nombre' => 'General Elements', 'url' => 'example_adminlte/forms_general', 'icono' => ''),
    array('principal' => FALSE, 'nombre' => 'Advanced Elements', 'url' => 'example_adminlte/forms_advanced', 'icono' => ''),
    array('principal' => FALSE, 'nombre' => 'Editors', 'url' => 'example_adminlte/forms_editors', 'icono' => ''),
    
    array('principal' => TRUE, 'nombre' => 'Tables', 'url' => '', 'icono' => 'fa-table'),
    array('principal' => FALSE, 'nombre' => 'Simple tables', 'url' => 'example_adminlte/tables_simple', 'icono' => ''),
    array('principal' => FALSE, 'nombre' => 'Data tables', 'url' => 'example_adminlte/tables_data', 'icono' => ''),
    
    array('principal' => TRUE, 'nombre' => 'Calendar', 'url' => 'example_adminlte/calendar', 'icono' => 'fa-calendar'),
    
    array('principal' => TRUE, 'nombre' => 'Mailbox', 'url' => '', 'icono' => 'fa-envelope'),
    array('principal' => FALSE, 'nombre' => 'Inbox', 'url' => 'example_adminlte/mailbox_mailbox', 'icono' => ''),
    array('principal' => FALSE, 'nombre' => 'Compose', 'url' => 'example_adminlte/mailbox_compose', 'icono' => ''),
    array('principal' => FALSE, 'nombre' => 'Read', 'url' => 'example_adminlte/mailbox_read_mail', 'icono' => ''),
    
        
    array('principal' => TRUE, 'nombre' => 'Examples', 'url' => '', 'icono' => 'fa-user'),
    array('principal' => FALSE, 'nombre' => 'Invoice', 'url' => 'example_adminlte/examples_invoice', 'icono' => ''),
    array('principal' => FALSE, 'nombre' => 'Profile', 'url' => 'example_adminlte/examples_profile', 'icono' => ''),
    array('principal' => FALSE, 'nombre' => 'Login', 'url' => 'example_adminlte/examples_login', 'icono' => ''),
    array('principal' => FALSE, 'nombre' => 'Register', 'url' => 'example_adminlte/examples_register', 'icono' => ''),
    array('principal' => FALSE, 'nombre' => 'Lockscreen', 'url' => 'example_adminlte/examples_lockscreen', 'icono' => ''),
    array('principal' => FALSE, 'nombre' => '404 Error', 'url' => 'example_adminlte/examples_404', 'icono' => ''),
    array('principal' => FALSE, 'nombre' => '500 Error', 'url' => 'example_adminlte/examples_500', 'icono' => ''),
    array('principal' => FALSE, 'nombre' => 'Blank page', 'url' => 'example_adminlte/examples_blank', 'icono' => ''),
    array('principal' => FALSE, 'nombre' => 'Pace page', 'url' => 'example_adminlte/examples_pace', 'icono' => ''),
    
    array('principal' => TRUE, 'nombre' => 'Salir del sistema', 'url' => 'controlador/metodo', 'icono' => 'fa-sign-out')
);

$config['menu_ejemplo_dos'] = array(
    array('principal' => TRUE, 'nombre' => 'Menu 1', 'url' => '', 'icono' => 'fa-user'),
    array('principal' => FALSE, 'nombre' => 'Sub menu 1', 'url' => 'controlador/metodo', 'icono' => ''),
    array('principal' => FALSE, 'nombre' => 'Sub menu 2', 'url' => 'controlador/metodo', 'icono' => ''),
    
    array('principal' => TRUE, 'nombre' => 'Menu 2', 'url' => '', 'icono' => 'fa-user'),
    array('principal' => FALSE, 'nombre' => 'Sub menu 1', 'url' => 'controlador/metodo', 'icono' => ''),
    array('principal' => FALSE, 'nombre' => 'Sub menu 2', 'url' => 'controlador/metodo', 'icono' => ''),
    array('principal' => FALSE, 'nombre' => 'Sub menu 2', 'url' => 'controlador/metodo', 'icono' => ''),
    
    array('principal' => TRUE, 'nombre' => 'Menu 3', 'url' => '', 'icono' => 'fa-user'),
    array('principal' => FALSE, 'nombre' => 'Sub menu 1', 'url' => 'controlador/metodo', 'icono' => ''),
    array('principal' => FALSE, 'nombre' => 'Sub menu 2', 'url' => 'controlador/metodo', 'icono' => ''),
    array('principal' => FALSE, 'nombre' => 'Sub menu 2', 'url' => 'controlador/metodo', 'icono' => ''),
    
    array('principal' => TRUE, 'nombre' => 'Salir del sistema', 'url' => 'controlador/metodo', 'icono' => 'fa-sign-out')
);

$config['menu_admin'] = array(
    array('principal' => TRUE, 'nombre' => 'Usuarios', 'url' => '', 'icono' => 'fa-user'),
    array('principal' => FALSE, 'nombre' => 'Socios', 'url' => 'admin/index_admin/index', 'icono' => ''),
    
    array('principal' => TRUE, 'nombre' => 'Salir del sistema', 'url' => 'controlador/metodo', 'icono' => 'fa-sign-out')
);



