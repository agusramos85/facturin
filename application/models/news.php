<?php
class News extends CI_Model {

    var $title   = '';
    var $text = '';
    var $date    = '';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }
    
    function get_last_four_entries()
    {
        $query = $this->db->get('news', 4);
        return $query->result();
    }

    function insert_entry($_POST)
    {
        $this->title   = $_POST['title']; // please read the below note
        $this->content = $_POST['content'];
        $this->date    = time();

        $this->db->insert('news', $this);
    }

    function update_entry()
    {
        $this->title   = $_POST['title'];
        $this->content = $_POST['content'];
        $this->date    = time();

        $this->db->update('news', $this, array('id' => $_POST['id']));
    }

}