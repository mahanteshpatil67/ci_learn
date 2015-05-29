 <?php
 	class Sample extends CI_Model
 	{
 		
		function get_posts($num=20,$start=0)
 		{
 			// $sql = "SELECT * FROM posts_zzw WHERE active=1 ORDER BY date_added DESC LIMIT 0,20;";
 			// $query=mysql_query($sql);
 			$this->db->select()->from('posts_zzw')->where('active',1)->order_by('date_added','desc')->limit($num,$start);
 			$query=$this->db->get();
 			return $query->result_array();
 		}
 	}
 ?>