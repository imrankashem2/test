<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Symfony\Component\Console\Helper\Helper;
use Illuminate\Http\Response;
class Poll extends Model
{
  protected $guarded= [];

    //add poll
    public function add()
    {
        $data = $this->input_values();
		$data["created_at"] = date('Y-m-d H:i:s');

        return $this->db->insert('polls', $data);
    }

    //update poll
    public function update($id)
    {
        //set values
        $data = $this->input_values();
        $this->db->where('id', $id);
        return $this->db->update('polls', $data);
    }

    //get polls
    public function get_polls()
    {
        $this->db->where('polls.lang_id', $this->selected_lang->id);
        $this->db->order_by('polls.id', 'DESC');
        $query = $this->db->get('polls');
        return $query->result();
    }

    //get all polls
    public function get_all_polls()
    {
        $this->db->order_by('polls.id', 'DESC');
        $query = $this->db->get('polls');
        return $query->result();
    }

    //get total vote count
    public function get_total_vote_count($poll_id)
    {
        $this->db->where('poll_votes.poll_id', $poll_id);
        $query = $this->db->get('poll_votes');
        return $query->num_rows();
    }

    //get option vote count
    public function get_option_vote_count($poll_id, $option)
    {
        $this->db->where('poll_votes.poll_id', $poll_id);
        $this->db->where('poll_votes.vote', $option);
        $query = $this->db->get('poll_votes');
        return $query->num_rows();
    }

    //get total votes
    public function get_total_votes($poll_id)
    {
        $this->db->where('poll_votes.poll_id', $poll_id);
        $query = $this->db->get('poll_votes');
        return $query->num_rows();
    }

    //get poll
    public function get_poll($id)
    {
        $this->db->where('polls.id', $id);
        $query = $this->db->get('polls');
        return $query->row();
    }

    //get user vote
    public function get_user_vote($poll_id, $user_id)
    {
        $this->db->where('poll_votes.poll_id', $poll_id);
        $this->db->where('poll_votes.user_id', $user_id);
        $query = $this->db->get('poll_votes');
        return $query->row();
    }

    //add registered vote
    public function add_registered_vote($poll_id, $user_id, $option)
    {
        if (empty($this->poll_model->get_user_vote($poll_id, $user_id))) {

            $data = array(
                'poll_id' => $poll_id,
                'user_id' => $user_id,
                'vote' => $option
            );

            $this->db->insert('poll_votes', $data);
            return "success";
        } else {
            return "voted";
        }
    }

    //add unregistered vote
    public function add_unregistered_vote($poll_id, $option)
    {
        if (isset($_COOKIE["vr_cookie_poll_" . $poll_id])) {
            return "voted";
        } else {
            $data = array(
                'poll_id' => $poll_id,
                'user_id' => 0,
                'vote' => $option
            );
            $this->db->insert('poll_votes', $data);
            Coo('vr_cookie_poll_' . $poll_id, '1');
            return "success";
        }
    }


    //delete poll
    public function delete($id)
    {
        $poll = $this->get_poll($id);
        if (!empty($poll)) {

            //delete poll votes
            $this->db->where('poll_id', $id);
            $this->db->delete('poll_votes');

            $this->db->where('id', $id);
            return $this->db->delete('polls');
        } else {
            return false;
        }
}
