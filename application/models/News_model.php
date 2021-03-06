<?php
//application/models/News_models.php
class News_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_news($slug = FALSE)
    {
        if ($slug === FALSE)
        {
	    $query = $this->db->get('sm_18_news');
            return $query->result_array();
	}

        $query = $this->db->get_where('sm_18_news', array('slug' => $slug));
        return $query->row_array();
	}
	
	public function set_news()
	{
		$this->load->helper('url');

		$slug = url_title($this->input->post('title'), 'dash', TRUE);

		$data = array(
			'title' => $this->input->post('title'),
			'slug' => $slug,
			'text' => $this->input->post('text')
		);

		if($this->db->insert('sm_18_news', $data)) {
			//looks good, pass back slug
			return $slug;
		}
		else {
			//failure, pass back false
			return false;
		}

		//return $this->db->insert('sm_18_news', $data);
	}
}
