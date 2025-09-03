<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model {

    protected $table = 'products';
    protected $primaryKey = 'productID';

    public function __construct()
    {
        parent::__construct();
        $this->load->database(); // Load database
    }

    // Insert product
    public function insert_product($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id(); // Return inserted ID
    }

    // Update product
    public function update_product($id, $data)
    {
        $this->db->where($this->primaryKey, $id);
        return $this->db->update($this->table, $data);
    }

    // Get all products (with optional filters)
    public function get_products($filters = [])
    {
        $this->db->from($this->table);

        if (!empty($filters)) {
            $this->db->where($filters);
        }

        $this->db->order_by($this->primaryKey, 'DESC');
        $query = $this->db->get();
        return $query->result(); // Return as array of objects
    }

    // Get paginated/listing products with keyword
    public function get_products_listing($filters = [])
    {
        $offset  = isset($filters['offset']) ? $filters['offset'] : 0;
        $length  = isset($filters['length']) ? $filters['length'] : 10;
        $keyword = isset($filters['keyword']) ? $filters['keyword'] : '';

        $this->db->from($this->table);

        if (!empty($keyword)) {
            $this->db->like('names', $keyword);
        }

        $this->db->limit($length, $offset);
        $this->db->order_by($this->primaryKey, 'DESC');

        $query = $this->db->get();
        return $query->result();
    }

    // Delete product
    public function delete_product($id)
    {
        $this->db->where($this->primaryKey, $id);
        return $this->db->delete($this->table);
    }
}
