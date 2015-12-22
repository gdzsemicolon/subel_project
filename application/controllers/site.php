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
 * Site Class
 *
 * Provides index page and starting controller.
 *
 * @package SubelProject
 * @subpackage controllers
 * @author Semi Colon Team
 */
namespace Controllers;
class Site extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *      http://example.com/index.php/site
     *  - or -
     *      http://example.com/index.php/site/index
     *  - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/site/<method_name>
     * @author Semi Colon Team
     */
    public function index()
    {
        $this->home();
    }

    /**
     * Loading a view home and passing data to view.
     *
     */

    public function home()
    {
        $this->load->view("view_home");
    }

    /**
     * Loading a view about us and passing data to view.
     *
     */

    public function aboutus()
    {
        $this->load->view("aboutus");
    }

    /**
     * Loading a view login and passing data to view.
     *
     */

    public function login()
    {
        $this->load->view("login");
    }

    /**
     * Loading a view signup and passing data to view.
     *
     */

    public function signup()
    {
        $this->load->view('signup');
    }

    /**
     * Loading a view ourwork and passing data to view.
     *
     */

    public function ourwork()
    {
        $this->load->view('ourwork');
    }

    /**
     * Loading a view contact and passing data to view.
     *
     */

    public function contact()
    {
        $this->load->view('contact');
    }

    /**
     * Loading a view contactMessage and passing data to view.
     *
     */

    public function contactMessage()
    {
        $this->load->view('contact_message');
    }

    /**
     * Loading a view contactSuccess and passing data to view.
     *
     */

    public function contactSuccess()
    {
        $this->load->view('contact_success');
    }

    /**
     * Loading a view members and passing data to view.
     * If user data from session true  load a view output page otherwise
     * redirect user.
     *
     * @return void
     */

    public function members()
    {
        if ($this->session->userdata['is_logged_in']) {
            $this->load->model(array('member_account'));
            $this->load->helper(array('html', 'url'));
            $data['title'] = 'Kişisel Sayfa';
            $sub_data = array(
                'extra_script' => $this->member_account->extra_script(),
                'column_1' => $this->member_account->update_status(),
                'column_2' => $this->member_account->profile_detail()
            );
            $data['body'] = $this->load->view('_member_area', $sub_data, true);
            $this->load->view('_output_html', $data);
        } else {
            redirect('site/restricted');
        }
    }

    /**
     * Loading a view restricted and passing data to view.
     *
     */

    public function restricted()
    {
        $this->load->view("restricted");
    }

    /**
     * Validate login page.
     *
     * @return void
     */

    public function loginValidation()
    {
        //Load library for form validation.
        $this->load->library('form_validation');
        //Setting rules for form inputs.
        $this->form_validation->set_rules('email', 'Email', 'required|trim|xss_clean|callback_validateCredentials');
        $this->form_validation->set_rules('password', 'Password', 'required|md5|trim');

        if ($this->form_validation->run()) {
            // If input values passes from validation, set email and logged_in value.
            $email = $this->input->post('email');
            $is_logged_in = 1;
            //Set userdatas for this session.
            $this->session->set_userdata('email', $email);
            $this->session->set_userdata('is_logged_in', $is_logged_in);
            redirect('site/members');
        } else {
            $this->load->view('login');
        }
    }

    /**
     * If the Form validation lib is loaded, email library load to sending an email
     * to the user.
     *
     * @return void
     */

    public function signupValidation()
    {
        //Load library for form validation.
        $this->load->library('form_validation');
        //Setting rules for form inputs.
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        $this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|trim|matches[password]');
        //Setting validation error messages.
        $this->form_validation->set_message('is_unique', "Bu email adresi sistemimizde kayıtlıdır.");
        $this->form_validation->set_message('required', "Lütfen bütün alanları doldurunuz.");
        $this->form_validation->set_message('matches', "Girdiğiniz şifreler birbiri ile eşleşmemektedir.");


        if ($this->form_validation->run()) {

            $key = md5(uniqid());

            $this->load->library('email', array('mailtype' => 'html'));
            $this->load->model('model_users');

            $this->email->set_newline("\r\n");
            $this->email->from('subeltestemail@gmail.com', 'SUBEL Ltd �?ti.');
            $this->email->to($this->input->post('email'));
            $this->email->subject("Hesap Aktivasyonu");

            $message = "<p> Kayıt olduğunuz için teşekkürler! </p>";
            $message .="<p>Kaydınızı tamamlamak için <a href='" . base_url() . "site/registerUser/$key'>buraya </a>tıklayınız.</p>";

            $this->email->message($message);
            if ($this->model_users->add_temp_user($key)) {
                if ($this->email->send()) {
                    echo "E-Posta adresinize aktivasyon maili gönderilmiştir. Sisteme giriş yapabilmek için lütfen aktivasyon linkine tıklayınız.";
                } else {
                    echo "could not send the email.";
                }
            } else {
                echo "problem adding to database.";
            }
        } else {

            $this->load->view('signup');
        }
    }

    /**
     * Validate credentials for login method.
     *
     * @return true|false
     */

    public function validateCredentials()
    {
        $this->load->model('model_users');
        if ($this->model_users->can_log_in()) {
            return true;
        } else {
            $this->form_validation->set_message('validateCredentials', 'Hatalı giriş yaptınız..');
            return false;
        }
    }

    /**
     * Logout redirect users login.
     *
     */

    public function logout()
    {

        //Destroy current session.
        $this->session->sess_destroy();
        redirect('site/login');
    }

    /**
     * Register user.
     *
     * @param boolean $key when true redirect Login.
     * @return void
     */

    public function registerUser($key)
    {
        $this->load->model('model_users');

        if ($this->model_users->is_key_valid($key)) {

            if ($newemail = $this->model_users->add_user($key)) {

                $newemail = $this->input->post('email');
                $is_logged_in = 1;

                $this->session->set_userdata('email2', $newemail);
                $this->session->set_userdata('is_logged_in', $is_logged_in);
                redirect('site/login');
            } else {
                echo "failed to add user";
            }
        } else {
            echo "invalid key";
        }
    }

    /**
     * Validate signup validation.
     *
     * @return void
     */

    public function contactMessageSending()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('name', 'Ad Soyad', 'trim|required');
        $this->form_validation->set_rules('email', 'EPosta', 'trim|required|valid_email');
        $this->form_validation->set_message('valid_email', "Geçerli bir EPosta giriniz.");


        if ($this->form_validation->run()) {

            $this->load->model('model_users');
            $result = $this->model_users->fill_contact();
            if ($result) {
                $this->load->view('contact_success');
            } else {
                echo 'Lütfen site yöneticisi ile iletişime geçiniz. hakanozerden@yahoo.com';
            }
        } else {
            $this->load->view('contact_message');
        }
    }

    /**
     * Sending form.
     *
     * @return void
     */

    public function formSending()
    {
        //Form validation library.
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Ad Soyad', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[form.email]');

        //If validation run, model class method Fill Form will work.
        if ($this->form_validation->run()) {
            $this->load->model('model_users');
            $result = $this->model_users->fill_form();
            if ($result) {
                redirect('site/members');
            } else {
                $message = "Lütfen Bilgilerinizi Kontrol Ediniz.";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }
        } else {
            $message = "Lütfen Bilgilerinizi Kontrol Ediniz.";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
    }
}

//end class
