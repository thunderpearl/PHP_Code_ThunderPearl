 	

<?php
	class Articlesmodel extends CI_Model
	{
		public function articles_list($limit, $offset)
		{
			$user_id = $this->session->userdata('user_id');  // session variables are available globaly.
			// this user_id is the id which is associated with our username nad password inside the database.

				$query = $this->db
								->select(['title','id'])  // If we won't give "id" here then when click "EDIT", it will through error.
								->from('articles')

								// Below user_id is the id inside the database articles table.
								->where('user_id', $user_id) 
								->limit($limit, $offset) // This offset will tell from where we have to start that page's article number. That is why we are getting it as segment(3) from $this->uri->segment(3).
								->get();
			
			return $query->result();	// This result() will give us an full array of results.				
		}


		public function all_articles_list($limit, $offset)
		{

				$query = $this->db
								->select(['title','id'])  // If we won't give "id" here then when click "EDIT", it will through error.
								->from('articles')
								->limit($limit, $offset)
								->get();
			
			return $query->result();					
		}


		public function count_all_articles()
		{
			$user_id = $this->session->userdata('user_id');  // session variables are available globaly.

				$query = $this->db
								->select(['title','id'])  // If we won't give "id" here then when click "EDIT", it will through error.
								->from('articles')
								->get();

			return $query->num_rows();
		}


		public function num_rows()
		{
						$user_id = $this->session->userdata('user_id');  // session variables are available globaly.

						$query = $this->db
								->select(['title','id'])  // If we won't give "id" here then when click "EDIT", it will through error.
								->from('articles')
								->where('user_id', $user_id)
								->get();
			
			return $query->num_rows();

		}


		public function add_article($array)
		{
			return $this->db->insert('articles', $array);
		}



		public function find_article($article_id)
		{
			$q = $this->db->select(['id','title','body'])
								->where('id', $article_id)
								->get('articles');  // "articles" is the name of table.;
			return $q->row();					
		}



		public function update_article($article_id, Array $article)
		{
			return $this->db->update('articles', $article, ['id'=>$article_id]);  // 3rd parameter is the where condition.
			// we can give the above query in two different lines also with "update" n "where" keywords in 2 lines.
		}

		public function delete_article($article_id)
		{
			return $this->db->delete('articles', ['id'=>$article_id]) ;
		}


		public function search($query, $limit, $offset)
		{
			$q = $this->db->from('articles')
							->like('title', $query)	
							->limit($limit, $offset)
							->get();

			return $q->result();				
		}


		public function count_search_results($query)
		{
			$q = $this->db->from('articles')
							->like('title', $query)
							->get();

			return $q->num_rows();				

		}
	}

?>