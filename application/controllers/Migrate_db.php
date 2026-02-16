<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migrate_db extends CI_Controller {

    public function index() {
        $this->load->database();
        $this->load->dbforge();

        // Define table fields
        $fields = array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'email' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'file_name' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'uploaded_at' => array(
                'type' => 'DATETIME'
            ),
        );

        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('id', TRUE);
        
        if ($this->dbforge->create_table('upload_files', TRUE)) {
            echo "Table 'upload_files' created successfully!";
        } else {
            echo "Failed to create table.";
        }
    }
}
