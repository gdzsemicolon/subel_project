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
 * Model Users model class.
 * @author Semi Colon Team.
 * Description : Modified Members based on user functions and check system validates.
 *
 */
class Model_users extends CI_Model
{
    /**
     *  Check user able to login or not.
     * @return true|false
     */

    public function canLogIn()
    {

        $this->db->where('email', $this->input->post('email'));
        $this->db->where('password', md5($this->input->post('password')));

        $query = $this->db->get('user');

        if ($query->num_rows() == 1) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * This method adding users informations and key value to the database table
     * @param $key Automatically created.
     * @return true|false
     */

    public function addTempUser($key)
    {

        $data = array(
            'email' => $this->input->post('email'),
            'password' => md5($this->input->post('password')),
            'key' => $key
        );
        //Database query for insert data to the Temp Users table.
        $query = $this->db->insert('temp_users', $data);
        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * This method checks key is valid or not.
     * @param $key when true return true.
     * @return true|false
     */

    public function isKeyValid($key)
    {
        $this->db->where('key', $key);
        $query = $this->db->get('temp_users');

        if ($query->num_rows() == 1) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * This method adding user to the User table
     * @param $key when true add user to the table
     * @return true|false
     */

    public function addUser($key)
    {

        $this->db->where('key', $key);
        $temp_user = $this->db->get('temp_users');

        if ($temp_user) {
            $row = $temp_user->row();

            $data = array(
                'email' => $row->email,
                'password' => $row->password
            );

            $did_add_user = $this->db->insert('user', $data);
        }
        if ($did_add_user) {
            $this->db->where('key', $key);
            $this->db->delete('temp_users');
            return $data['email'];
        } return false;
    }
    /**
     * Fill Contact Message in the database.
     * @return true|false
     */
    public function fillContact()
    {

        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'text' => $this->input->post('text')
        );
        //Database query for inserting message.
        $query = $this->db->insert('contact_message', $data);
        if ($query) {
            return true;
        } else {
            return false;
        }
    }
    /**
     * Fill the form which is coming from user.
     * @return true|false
     */

    public function fillForm()
    {

        $data = array(
            'adsoyad' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'yer' => $this->input->post('yer'),
            'tc' => $this->input->post('tc'),
            'tel' => $this->input->post('tel'),
            'evlilik' => $this->input->post('evlilik'),
            'tahsil' => $this->input->post('tahsil'),
            'bilgisayar' => $this->input->post('pc'),
            'dil' => $this->input->post('dil')
        );

        $query = $this->db->insert('form', $data);
        if ($query) {
            return true;
        } else {
            return false;
        }
    }
	/**
     * Count users to fill table pages.
     * @return count number.
     */
	 
	public function count_user(){
        return $this->db->count_all('form');
    }	
	/**
     * Fetch user.
     * @return query result.
     */
    public function fetchUser($limit,$offset){
        $this->db->limit($limit,$offset);
        $query = $this->db->get('form');
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return $query->result();
        }
    }
    /**
     * Search user with selection criteria.
     * @return query result.
     */
    public function searchUser($search,$select){
        $this->db->select('*');
        $this->db->from('form');
        $this->db->like($select,$search);
        $query = $this->db->get();
        if($query->num_rows() > 0){
            return $query->result();
        }else {
            return $query->result();
        }
        
    }
    /**
     * Get edit user with ID.
     * @return row values.
     */
    public function getEdit($id){
        $query = $this->db->get_where('form', array('id' => $id));
        return $query->row();
    }
    /**
     * Update user with ID.
     * @return true|false
     */
    public function updateUser($id){            
        $data = array(
            'adsoyad' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'yer' => $this->input->post('yer'),
            'tc' => $this->input->post('tc'),
            'tel' => $this->input->post('tel'),
            'evlilik' => $this->input->post('evlilik'),
            'tahsil' => $this->input->post('tahsil'),
            'bilgisayar' => $this->input->post('pc'),
            'dil' => $this->input->post('dil')
        );
        $this->db->where('id',$id);
        $query = $this->db->update('form',$data);
        if($query){
            return true;
        }else{
            return false;
        }
    }
    /**
     * Delete user with ID.
     * @return true|false
     */
    public function delete($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('form');
        if($this->db->affected_rows()>0)
        {
            redirect('site/admin');
        }
        
    }
}
//end class
