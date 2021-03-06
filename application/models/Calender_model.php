<?php


class Calender_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->db->db_debug = FALSE;
	}

	public function get_meetings_by_guide_email($guide_email)
	{
		$sql = 'SELECT * FROM meeting INNER JOIN users ON meeting.booker_email=users.email WHERE guide_email= ? ORDER BY date DESC';
		$error = null;
		$query = $this->db->query($sql, array($guide_email));
		if ($query) {
			return $query->result();
		}
		$error = $this->db->error();
		return $error;
	}

	public function get_top3_meetings_by_guide_email($guide_email)
	{
		$sql = 'SELECT * FROM meeting INNER JOIN users ON meeting.booker_email=users.email WHERE guide_email= ? AND date >= CURRENT_DATE ORDER BY date ASC LIMIT 3';
		$error = null;
		$query = $this->db->query($sql, array($guide_email));
		if ($query) {
			return $query->result();
		}
		$error = $this->db->error();
		return $error;
	}

	public function get_meetings_by_booker_email($booker_email, $all)
	{
		$limit=$all!='true'? "AND date >= CURRENT_DATE ORDER BY date ASC LIMIT 3": "ORDER BY date DESC";
		$sql = 'SELECT * FROM meeting INNER JOIN users ON meeting.guide_email=users.email WHERE booker_email= ? ';
		$error = null;
		$query = $this->db->query($sql, array($booker_email));
		if ($query) {
			return $query->result();
		}
		$error = $this->db->error();
		return $error;
	}

	public function get_meetings_by_id($id)
	{
		$sql = 'SELECT * FROM meeting WHERE id= ?';
		$error = null;
		$query = $this->db->query($sql, array($id));
		if ($query) {
			return $query->result();
		}
		$error = $this->db->error();
		return $error;
	}

	public function add_time_slot($data)
	{
		$error = null;

		if (!$this->db->insert('meeting', $data)) {
			$error = $this->db->error();
		}
		return $error;
	}

	public function update_meeting($data)
	{
		$this->db->update('meeting', $data);
	}
        

        
        //By Mor
        public function update($id, $data)
        {
            $error = null;

            if ($data['booked']==1)
            {
				$this->db->set($data)->where('id', $id)->update('meeting');
            }
            else
            {
                $this->db->delete('meeting', array('id' => $id));
            }
        }
        
         //By Mor
	public function save_meeting($data)
	{

		$error = null;

		if (!$this->db->insert('meeting', $data)) {
			$error = $this->db->error();
		}
		return $error;
	}
}