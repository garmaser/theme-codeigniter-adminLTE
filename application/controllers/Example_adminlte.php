<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Example_adminlte extends CI_Controller {
    private $titulo = '';
            function __construct() {
        parent::__construct();

        $this->load->helper('url');
        $this->load->config('menu_sistema');
        $this->output->set_template('adminLTE', $this->config->item('menu_adminlte'));
    }

    public function index() {
        /* -- Archivos css -- */
        $this->load->css(base_url('assets/themes/adminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css'));
        $this->load->css(base_url('assets/themes/adminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css'));
        $this->load->css(base_url('assets/themes/adminLTE/plugins/jqvmap/jqvmap.min.css'));        
        $this->load->css(base_url('assets/themes/adminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css'));
        $this->load->css(base_url('assets/themes/adminLTE/plugins/daterangepicker/daterangepicker.css'));
         $this->load->css(base_url('assets/themes/adminLTE/plugins/summernote/summernote-bs4.css'));
//        /* -- Archivos js -- */
         $this->load->js(base_url('assets/themes/adminLTE/plugins/jquery-ui/jquery-ui.min.js'));
        $this->load->js(base_url('assets/themes/adminLTE/plugins/chart.js/Chart.min.js'));
        $this->load->js(base_url('assets/themes/adminLTE/plugins/sparklines/sparkline.js'));
        $this->load->js(base_url('assets/themes/adminLTE/plugins/jqvmap/jquery.vmap.min.js'));
        $this->load->js(base_url('assets/themes/adminLTE/plugins/jqvmap/maps/jquery.vmap.world.js'));
        $this->load->js(base_url('assets/themes/adminLTE/plugins/jquery-knob/jquery.knob.min.js'));
        $this->load->js(base_url('assets/themes/adminLTE/plugins/moment/moment.min.js'));
        $this->load->js(base_url('assets/themes/adminLTE/plugins/daterangepicker/daterangepicker.js'));
        $this->load->js(base_url('assets/themes/adminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'));
        $this->load->js(base_url('assets/themes/adminLTE/plugins/summernote/summernote-bs4.min.js'));
        $this->load->js(base_url('assets/themes/adminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'));
        $this->load->js(base_url('assets/themes/adminLTE/dist/js/pages/dashboard.js'));

        $this->output->set_titulo('Dashboard','Control panel');
        $this->load->view('adminlte/index');
    }

    public function index_dos() {
        /* -- Archivos css -- */
        $this->load->css(base_url('assets/themes/adminLTE/bower_components/jvectormap/jquery-jvectormap.css'));
        /* -- Archivos js -- */
        $this->load->js(base_url('assets/themes/adminLTE/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js'));
        $this->load->js(base_url('assets/themes/adminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'));
        $this->load->js(base_url('assets/themes/adminLTE/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'));
        $this->load->js(base_url('assets/themes/adminLTE/bower_components/chart.js/Chart.js'));
        $this->load->js(base_url('assets/themes/adminLTE/dist/js/pages/dashboard2.js'));

        $this->output->set_titulo('Dashboard','Version 2.0');
        $this->load->view('adminlte/index2');
    }

    public function layout_top_nav() {        
        $this->load->view('adminlte/layout/top_nav');
    }

    public function layout_boxed() {
        $this->output->set_titulo('Boxed Layout', 'Blank example to the boxed layout');
        $this->output->set_output_data('layout', 'boxed');        
        $this->load->view('adminlte/layout/boxed');
    }

    public function layout_fixed() {
        $this->output->set_titulo('Fixed Layout', 'Blank example to the fixed layout');
        $this->output->set_output_data('layout', 'fixed');
        $this->load->view('adminlte/layout/fixed');
    }

    public function layout_collapsed_sidebar() {
        $this->output->set_titulo('Sidebar Collapsed', 'Layout with collapsed sidebar on load');
        $this->output->set_output_data('layout', 'collapse');
        $this->load->view('adminlte/layout/collapsed_sidebar');
    }

    public function widgets() {
        /* -- Archivos css -- */
        $this->load->css(base_url('assets/themes/adminLTE/'));
        $this->load->css(base_url('assets/themes/adminLTE/'));
        $this->load->css(base_url('assets/themes/adminLTE/'));
        $this->load->css(base_url('assets/themes/adminLTE/'));
        $this->load->css(base_url('assets/themes/adminLTE/'));
        $this->load->css(base_url('assets/themes/adminLTE/'));
        $this->load->css(base_url('assets/themes/adminLTE/'));
        $this->load->css(base_url('assets/themes/adminLTE/'));
        $this->load->css(base_url('assets/themes/adminLTE/'));
        $this->load->css(base_url('assets/themes/adminLTE/'));
        $this->load->css(base_url('assets/themes/adminLTE/'));
        /* -- Archivos js -- */
        $this->load->js(base_url('assets/themes/adminLTE/'));
        $this->load->js(base_url('assets/themes/adminLTE/'));
        $this->load->js(base_url('assets/themes/adminLTE/'));
        $this->load->js(base_url('assets/themes/adminLTE/'));
        $this->load->js(base_url('assets/themes/adminLTE/'));
        $this->load->js(base_url('assets/themes/adminLTE/'));
        $this->load->js(base_url('assets/themes/adminLTE/'));
        $this->load->js(base_url('assets/themes/adminLTE/'));
        $this->load->js(base_url('assets/themes/adminLTE/'));
        $this->load->js(base_url('assets/themes/adminLTE/'));
        $this->load->js(base_url('assets/themes/adminLTE/'));

        $this->output->set_titulo('Widgets','Preview page');
        $this->load->view('adminlte/widgets');
    }

    public function charts_chartjs() {
        /* -- Archivos js -- */
        $this->load->js(base_url('assets/themes/adminLTE/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js'));
        $this->load->js(base_url('assets/themes/adminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'));
        $this->load->js(base_url('assets/themes/adminLTE/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'));
        $this->load->js(base_url('assets/themes/adminLTE/bower_components/jquery-slimscroll/jquery.slimscroll.min.js'));
        $this->load->js(base_url('assets/themes/adminLTE/bower_components/chart.js/Chart.js'));
        $this->load->js(base_url('assets/themes/adminLTE/dist/js/pages/dashboard2.js'));

        $this->output->set_titulo('ChartJS','Preview sample');
        $this->load->view('adminlte/charts/chartjs');
    }

    public function charts_morris() {
        $this->load->css(base_url('assets/themes/adminLTE/bower_components/morris.js/morris.css'));
        $this->load->js(base_url('assets/themes/adminLTE/bower_components/raphael/raphael.min.js'));
        $this->load->js(base_url('assets/themes/adminLTE/bower_components/morris.js/morris.min.js'));
        
        $this->output->set_titulo('Morris Charts','Preview sample');
        $this->load->view('adminlte/charts/morris');
    }

    public function charts_flot() {
        /* -- Archivos js -- */
        $this->load->js(base_url('assets/themes/adminLTE/bower_components/Flot/jquery.flot.js'));
        $this->load->js(base_url('assets/themes/adminLTE/bower_components/Flot/jquery.flot.resize.js'));
        $this->load->js(base_url('assets/themes/adminLTE/bower_components/Flot/jquery.flot.pie.js'));
        $this->load->js(base_url('assets/themes/adminLTE/bower_components/Flot/jquery.flot.categories.js'));
        
        $this->output->set_titulo('Flot Charts','preview sample');
        $this->load->view('adminlte/charts/flot');
    }

    public function charts_inline() {
        /* -- Archivos js -- */
        $this->load->js(base_url('assets/themes/adminLTE/bower_components/jquery-knob/js/jquery.knob.js'));
        $this->load->js(base_url('assets/themes/adminLTE/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js'));
        
        $this->output->set_titulo('Inline Charts','multiple types of charts');
        $this->load->view('adminlte/charts/inline');
    }

    public function ui_general() {   
        $this->output->set_titulo('General UI','Preview of UI elements');
        $this->load->view('adminlte/ui/general');
    }

    public function ui_icons() {  
        $this->output->set_titulo('Icons','a set of beautiful icons');
        $this->load->view('adminlte/ui/icons');
    }

    public function ui_buttons() {    
        $this->output->set_titulo('Buttons','Control panel');
        $this->load->view('adminlte/ui/buttons');
    }

    public function ui_sliders() {
        /* -- Archivos css -- */
        $this->load->css(base_url('assets/themes/adminLTE/plugins/bootstrap-slider/slider.css'));
        /* -- Archivos js -- */
        $this->load->js(base_url('assets/themes/adminLTE/plugins/bootstrap-slider/bootstrap-slider.js'));     
        
        $this->output->set_titulo('Sliders','range sliders');
        $this->load->view('adminlte/ui/sliders');
    }

    public function ui_timeline() {
        $this->output->set_titulo('Timeline','example');
        $this->load->view('adminlte/ui/timeline');
    }

    public function ui_modals() {
        $this->output->set_titulo('Modals','new');
        $this->load->view('adminlte/ui/modals');
    }

    public function forms_general() {
        $this->output->set_titulo('General Form Elements','Preview');
        $this->load->view('adminlte/forms/general');
    }

    public function forms_advanced() {
        /* -- Archivos css -- */
        $this->load->css(base_url('assets/themes/adminLTE/bower_components/bootstrap-daterangepicker/daterangepicker.css'));
        $this->load->css(base_url('assets/themes/adminLTE/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css'));
        $this->load->css(base_url('assets/themes/adminLTE/plugins/iCheck/all.css'));
        $this->load->css(base_url('assets/themes/adminLTE/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css'));
        $this->load->css(base_url('assets/themes/adminLTE/plugins/timepicker/bootstrap-timepicker.min.css'));
        $this->load->css(base_url('assets/themes/adminLTE/bower_components/select2/dist/css/select2.min.css'));
        /* -- Archivos js -- */
        $this->load->js(base_url('assets/themes/adminLTE/bower_components/select2/dist/js/select2.full.min.js'));
        $this->load->js(base_url('assets/themes/adminLTE/plugins/input-mask/jquery.inputmask.js'));
        $this->load->js(base_url('assets/themes/adminLTE/plugins/input-mask/jquery.inputmask.date.extensions.js'));
        $this->load->js(base_url('assets/themes/adminLTE/plugins/input-mask/jquery.inputmask.extensions.js'));
        $this->load->js(base_url('assets/themes/adminLTE/bower_components/moment/min/moment.min.js'));
        $this->load->js(base_url('assets/themes/adminLTE/bower_components/bootstrap-daterangepicker/daterangepicker.js'));
        $this->load->js(base_url('assets/themes/adminLTE/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js'));
        $this->load->js(base_url('assets/themes/adminLTE/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js'));
        $this->load->js(base_url('assets/themes/adminLTE/plugins/timepicker/bootstrap-timepicker.min.js'));
        $this->load->js(base_url('assets/themes/adminLTE/plugins/iCheck/icheck.min.js'));
        
        $this->output->set_titulo('Advanced Form Elements','Preview');
        $this->load->view('adminlte/forms/advanced');
    }

    public function forms_editors() {
        /* -- Archivos css -- */
        $this->load->css(base_url('assets/themes/adminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css'));
        /* -- Archivos js -- */
        $this->load->js(base_url('assets/themes/adminLTE/bower_components/ckeditor/ckeditor.js'));
        $this->load->js(base_url('assets/themes/adminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js'));
        
        $this->output->set_titulo('Text Editors','Advanced form element');
        $this->load->view('adminlte/forms/editors');
    }

    public function tables_simple() {
        $this->output->set_titulo('Simple Tables','preview of simple tables');
        $this->load->view('adminlte/tables/simple');
    }

    public function tables_data() {
        /* -- Archivos css -- */
        $this->load->css(base_url('assets/themes/adminLTE/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css'));
        /* -- Archivos js -- */
        $this->load->js(base_url('assets/themes/adminLTE/bower_components/datatables.net/js/jquery.dataTables.min.js'));
        $this->load->js(base_url('assets/themes/adminLTE/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js'));

        $this->output->set_titulo('Data Tables','advanced tables');
        $this->load->view('adminlte/tables/data');
    }

    public function calendar() {
        /* -- Archivos css -- */
        $this->load->css(base_url('assets/themes/adminLTE/bower_components/fullcalendar/dist/fullcalendar.min.css'));
        $this->load->css(base_url('assets/themes/adminLTE/bower_components/fullcalendar/dist/fullcalendar.print.min.css" media="print'));
        /* -- Archivos js -- */
        $this->load->js(base_url('assets/themes/adminLTE/bower_components/jquery-ui/jquery-ui.min.js'));
        $this->load->js(base_url('assets/themes/adminLTE/bower_components/moment/moment.js'));
        $this->load->js(base_url('assets/themes/adminLTE/bower_components/fullcalendar/dist/fullcalendar.min.js'));
        
        $this->output->set_titulo('Calendar','Control panel');
        $this->load->view('adminlte/calendar');
    }

    public function mailbox_mailbox() {
        /* -- Archivos css -- */
        $this->load->css(base_url('assets/themes/adminLTE/plugins/iCheck/flat/blue.css'));
        /* -- Archivos js -- */
        $this->load->js(base_url('assets/themes/adminLTE/plugins/iCheck/icheck.min.js'));
        
        $this->output->set_titulo('Mailbox','13 new messages');
        $this->load->view('adminlte/mailbox/mailbox');
    }

    public function mailbox_compose() {
        /* -- Archivos css -- */
        $this->load->css(base_url('assets/themes/adminLTE/plugins/iCheck/flat/blue.css'));
        $this->load->css(base_url('assets/themes/adminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css'));
        /* -- Archivos js -- */
        $this->load->js(base_url('assets/themes/adminLTE/plugins/iCheck/icheck.min.js'));
        $this->load->js(base_url('assets/themes/adminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js'));
        
        $this->output->set_titulo('Mailbox','13 new messages');
        $this->load->view('adminlte/mailbox/compose');
    }

    public function mailbox_read_mail() {
         /* -- Archivos css -- */
        $this->load->css(base_url('assets/themes/adminLTE/plugins/iCheck/flat/blue.css'));
        
        $this->output->set_titulo('Read Mail');        
        $this->load->view('adminlte/mailbox/read_mail');
    }

    public function examples_invoice() {
        $this->output->set_titulo('Invoice','#007612'); 
        $this->load->view('adminlte/examples/invoice');
    }

    public function examples_profile() {
        $this->output->set_titulo('User Profile');
        $this->load->view('adminlte/examples/profile');
    }

    public function examples_login() {
        $this->output->set_template('login_adminLTE');
        $this->load->view('adminlte/examples/login');
    }

    public function examples_register() {
        $this->output->set_template('login_adminLTE');
        $this->load->view('adminlte/examples/register');
    }

    public function examples_lockscreen() {
        $this->output->set_template('login_adminLTE');
        $this->load->view('adminlte/examples/lockscreen');
    }

    public function examples_404() {
        $this->output->set_titulo('404 Error Page');
        $this->load->view('adminlte/examples/404');
    }

    public function examples_500() {
        $this->output->set_titulo('500 Error Page');
        $this->load->view('adminlte/examples/500');
    }

    public function examples_blank() {
        $this->output->set_titulo('Blank page','it all starts here');
        $this->load->view('adminlte/examples/blank');
    }

    public function examples_pace() {
        /* -- Archivos css -- */
        $this->load->css(base_url('assets/themes/adminLTE/dist/css/skins/_all-skins.min.css'));
        $this->load->css(base_url('assets/themes/adminLTE/plugins/pace/pace.min.css'));
        /* -- Archivos js -- */
        $this->load->js(base_url('assets/themes/adminLTE/bower_components/PACE/pace.min.js'));
        $this->load->js(base_url('assets/themes/adminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js'));
        
        $this->output->set_titulo('Pace page','Loading example');
        $this->load->view('adminlte/examples/pace');
    }

}
