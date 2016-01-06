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
 * Profile Controller
 *
 * The controller which load user detain on members page.
 * @package   SubelProject
 * @subpackage Controllers
 */
 namespace Controllers;

class Profile extends CI_Controller
{

    /**
     * Class constructor
     *
     * Determines Profile class is enabled.
     *
     * @return  void
     */
    function __construct()
    {
        parent::__construct();
        $this->load->library(array('form_validation'));
        $this->load->helper(array('html', 'form', 'url'));
        $this->load->database();
    }

    /**
     * Show Detais method for showing and editing information of the user.
     *
     * @param $edit when true Change user personal information's.
     *
     * @return void
     */
    function showDetails($edit = '', $change_email_pass = '')
    {

        //Get current session user email data.
        $myVar = $this->session->userdata('email');
        $query = $this->db->query("SELECT * FROM `user` WHERE `email`='" . $myVar . "'");
        $ret = '';
        if ($edit == 'edit') {

            if ($_POST) {
                $ret = '';
                $input_data_key = array();
                $input_data_value = array();

                foreach ($_POST as $key => $value) {
                    //If information's able to edit by user.
                    if ($key == 'edit') {
                        continue;
                    } elseif ($key == 'email') {
                    //Validation rules for email parameter.
                        $this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[3]|max_length[50]|valid_email');
                    } elseif ($key == 'password') {
                        //Validation rules for password.
                        $this->form_validation->set_rules('password', 'Password', 'trim|required| min_length[3]|max_length[20]');
                    } elseif ($key == 'adsoyad') {
                        //Validation rules for Ad Soyad.
                        $this->form_validation->set_rules('adsoyad', 'adsoyad', 'trim|required|min_length[3]|max_length[50]');
                        $value = ucwords($value);
                    } else {
                        $this->form_validation->set_rules($key, ucfirst($key), 'trim|required|min_length[3]|max_length[500]');
                    }
                    //If form validation returns false exit.
                    if ($this->form_validation->run() == false) {
                        echo '<div class="error">' . validation_errors() . '</div>';
                        exit;
                    }
                    array_push($input_data_key, $key);
                    array_push($input_data_value, $value);
                }

                $input_data = array_combine($input_data_key, $input_data_value);

                if ($this->db->where('email', $myVar)->update('user', $input_data)) {
                    $ret .= '<script type="text/javascript">$(".error").remove();</script> <div class="done">Başarılı.</div>';
                } else {
                    $ret .= 'Error on query, try again later<br/>';
                }

                echo $ret;
            } else {
                $form = '';
                $form .= anchor('#', '&lt;&ltGeri', 'title="Cancel Edit" onclick="back();;return false;"');

                foreach ($query->result_array() as $row) {
                    foreach ($row as $key => $value) {
                        if ($change_email_pass != '') {
                            if ($key != 'email' && $key != 'password') {
                                continue;
                            }
                        } elseif ($change_email_pass == '') {
                            if ($key == 'ID' || $key == 'email' || $key == 'password' || $key == 'salt' || $key == 'edit') {
                                continue;
                            }
                        }

                        //
                        if ($key == 'password') {
                            $data_password = array(
                                'name' => $key,
                                'value' => '********',
                                'id' => $key
                            );
                            $value = form_input($data_password);
                        } elseif ($key == 'cinsiyet') {
                            $options = array(
                                'Bay' => 'Bay',
                                'Bayan' => 'Bayan'
                            );
                            $selected = $value;
                            $id = 'id="' . $key . '"';
                            $value = form_dropdown('cinsiyet', $options, $selected, $id);
                        } elseif ($key == 'adres') {
                            $data_textarea = array(
                                'name' => $key,
                                'value' => $value,
                                'rows' => 6,
                                'cols' => 20,
                                'id' => $key
                            );
                            $value = form_textarea($data_textarea);
                        } else {
                            $data_input = array(
                                'name' => $key,
                                'value' => $value,
                                'id' => $key
                            );
                            $value = form_input($data_input);
                        }

                        //
                        $form .= '<tr><td>' . ucfirst($key) . '</td><td>' . $value . '</td></tr>';
                    }
                }
                $what = ($change_email_pass == '') ? 'common' : 'pass';
                $data_submit = array(
                    'name' => 'submit',
                    'value' => 'Değiştir',
                    'onclick' => 'submit_edit(\'' . $what . '\');return false;'
                );
                $form .= '<tr><td></td><td>' . form_submit($data_submit) . '<span id="submit_loading"></span></td></tr>';
                //
                $data_table = array(
                    'tr_td' => $form
                );
                $data = array(
                    'action_url' => base_url() . 'profile/show_details/edit/',
                    'table_form' => $this->load->view('_simple_table', $data_table, true)
                );
                $this->load->view('_simple_form', $data);
            }
        } else {
            $ret .= anchor('#', 'Değiştir', 'title="Edit Detail" onclick="edit_detail();return false;"');
            foreach ($query->result_array() as $row) {
                foreach ($row as $key => $value) {
                    if ($key == 'ID' || $key == 'email' || $key == 'password' || $key == 'salt' || $key == 'edit') {
                        continue;
                    }
                    $ret .= '<tr><td>' . ucfirst($key) . '</td><td>"' . $value . '"</td></tr>';
                }
            }
            $data['tr_td'] = $ret;
            $this->load->view('_simple_table', $data);
        }
    }
}//end class.
