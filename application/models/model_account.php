<?php

/**
 * SUBEL Business
 *
 * @package   SubelProject
 * @author    Semi Colon Team
 * @copyright Copyright (c) 2015, Semi Colon Team
 * @since     Version 1.0
 */

/**
 * Account model class.
 * @author Semi Colon Team.
 * Description : Modified Members based on user functions.
 *
 */
class model_account extends CI_Model
{

    /**
     * Construct of the class
     *
     */
    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('html', 'url'));
        //Load database library.
        $this->load->database();
    }

    /**
     * Extra Script function
     * This function takes parameters from database and passing them
     * to the Profile controller which is showing on views.
     * @return void
     */

    function extraScript()
    {
        $i = 0;
        $separator = '';
        $divider = 2;
        $datapost = 'var datapost =\'';
        $ret = '
            function submit_edit(what){
            if(what == \'pass\'){
                var email = $("#email").val();
                var password = $("#password").val();
                var url = base_url+\'profile/show_details/edit/pass/\';
                var datapost = \'email=\'+email+\'&password=\'+password;
            }
            if(what == \'common\'){
        ';
        //Get users values from database.
        $query = $this->db->get('user');
        foreach ($query->result_array() as $row) {
            foreach ($row as $key => $value) {
                $i++;
                if ($i % $divider == 0) {
                    $separator = '&';
                }
                if ($key == 'ID' || $key == 'email' || $key == 'password' || $key == 'salt') {
                    continue;
                }
                $ret .= 'var ' . $key . ' = $("#' . $key . '").val();';
                $datapost .= $key . '=\'+' . $key . '+\'' . $separator;
            }
        }
        $ret .='
                    var url = base_url+\'profile/show_details/edit/\';
                    ' . $datapost . 'edit=profile_edit\';
                    }
                var div_loading = \'submit_loading\';
                var div_result = \'profile_detail\';
                post_html_data(url, datapost, div_loading, div_result, \'append\');
            }
        ';

        return $ret;
    }

    /**
     * Showing current Status on member page. Passing parameter to the designbox view.
     * @return void
     */

    function updateStatus()
    {
        $data = array(
            'header' => 'Form',
            'content' => '<h1>Lütfen Formu Doldurunuz.</h1>'
        );
        return $this->load->view('_designbox', $data, true);
    }

    /**
     * Passing Profile Details Header and Content values to the designbox view.
     * @return void
     */

    function profileDetail()
    {
        $data = array(
            'header' => 'Profil Bilgileri',
            'content' => '<div id="profile_detail_loading"></div><div id="profile_detail"></div>'
        );
        return $this->load->view('_designbox', $data, true);
    }
}
//end class
