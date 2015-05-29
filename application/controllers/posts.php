 <?php
	 class Posts extends CI_Controller
	 {
	 	
	 	function index()
	 	{
	 		$this->load->model('sample');
	 		$data['post']=$this->sample->get_posts();
	 		// echo "<pre>";print_r($data['post']);echo "</pre>";
	 		$this->load->view('welcome',$data);
	 	}
	 }
 ?>