    <?php
    class Comments_model extends CI_Model
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->database();
        }

        public function get_comments() {
            $this->db->select('comments.id, comments.product_id, comments.user_id, comments.comment, comments.rating, comments.created_at, 
                               users.full_name as user_name, products.name as product_name');
            $this->db->from('comments');
            $this->db->join('users', 'comments.user_id = users.id', 'left');
            $this->db->join('products', 'comments.product_id = products.id', 'left');
            $query = $this->db->get();
            return $query->result_array();
        }

        public function count_all_comments()
        {
            $this->db->from('comments');
            return $this->db->count_all_results();
        }

        public function get_comment_by_id($id) {
            $this->db->select('comments.*, products.name AS product_name, users.full_name AS user_name');
            $this->db->from('comments');
            $this->db->join('products', 'comments.product_id = products.id', 'left');
            $this->db->join('users', 'comments.user_id = users.id', 'left');
            $this->db->where('comments.id', $id);
            return $this->db->get();
        }       

        public function add_comment($data)
        {
            $this->db->insert('comments', $data);
        }

        public function update_comment($data, $id)
        {
            $this->db->where('id', $id);
            $this->db->update('comments', $data);
        }

        public function delete_comment($id)
        {
            $this->db->where('id', $id);
            $this->db->delete('comments');
        }
        public function get_comments_by_product_id($product_id)
        {
            $this->db->select('comments.*, users.full_name as user_name, users.profile_picture as user_profile');
            $this->db->from('comments');
            $this->db->join('users', 'comments.user_id = users.id', 'left');
            $this->db->where('comments.product_id', $product_id);
            $query = $this->db->get();
            return $query->result_array();
        }
    }
