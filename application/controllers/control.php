<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Control extends CI_Controller {
	public function index()
	{
		$this->data['position'] = "Home";
        $this->ngisi();
		$this->load->view('view_header',$this->data);
		$this->load->view('index',$this->data);
		$this->load->view('view_sidebar',$this->data);
		$this->load->view('view_footer',$this->data);
	}
	
	public function ngisi()
    {
        $this->data['menu'] = array("Home"=>"Control/index","About Me"=>"Control/about","Contact Me"=>"Control/contact");
		$this->data['news'] = $this->db->get('posting');
	}
	
	public function about(){
		$this->data['position'] = "About Me";
        $this->ngisi();
		$this->load->view('view_header',$this->data);
		$this->load->view('view_about');
		$this->load->view('view_sidebar',$this->data);
		$this->load->view('view_footer',$this->data);
	}
	
	public function contact(){
		$this->data['position'] = "Contact Me";
        $this->ngisi();
		$this->load->view('view_header',$this->data);
		//$this->load->view('index',$this->data);
		$this->load->view('view_sidebar',$this->data);
		$this->load->view('view_footer',$this->data);
	}
	
	public function losari(){
		$this->data['position'] = "Pesona Losari";
        $this->ngisi();
		$this->load->view('view_header',$this->data);
		
		$this->db->where('gambar', 'losari'); 
		$this->data['query'] = $this->db->get('posting');
		$this->load->view('view_more',$this->data);
		
		$this->load->view('view_sidebar',$this->data);
		$this->load->view('view_footer',$this->data);
	}
	
	public function bahari(){
		$this->data['position'] = "Festival Bahari";
        $this->ngisi();
		$this->load->view('view_header',$this->data);
		
		$this->db->where('gambar', 'bahari'); 
		$this->data['query'] = $this->db->get('posting');
		$this->load->view('view_more',$this->data);
		
		$this->load->view('view_sidebar',$this->data);
		$this->load->view('view_footer',$this->data);
	}
}

?>