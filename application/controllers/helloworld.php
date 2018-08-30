<?php 
	class Helloworld extends CI_Controller{

		function __construct()
		{
			parent::__construct();
			$this->load->model('mymodel');
		}
	public function index(){ 
        $this->load->model('mymodel'); 
        $data = $this->mymodel->GetMahasiswa('mahasiswa'); 
        $data = array('data' => $data); 
        $this->load->view('data_mahasiswa', $data);
 	}

 	public function add_data(){
      	$this->load->view('form_add'); 
    }
    public function insert(){ 
      	$this->load->model('mymodel'); 
  				$data = array( 
  							'no_induk' => $this->input->post('nama'), 
  							'nama' => $this->input->post('nama'), 
  							'alamat' => $this->input->post('alamat') 
  				            );
  		$data = $this->mymodel->Insert('mahasiswa', $data); 
  		redirect(base_url(),'refresh'); 
  	}

  	function hapus($noinduk){
  		$noinduk = array('no_induk' => $noinduk);
  		$this->load->model('mymodel');
  		$this->mymodel->Delete('mahasiswa', $noinduk);
  		redirect(base_url(),'refresh');
  	} 

  	function edit($noinduk) {
  		    $this->load->model('mymodel');
 	    	$data['mhs'] = $this->db->get_where('mahasiswa', array('no_induk' => $noinduk))->result();    
 	 	    $this->load->view('form_edit', $data);
 	 }

 	 function update_data() {
 	 	    $no_induk     = $this->input->post('ni');
 	 	    $nama         = $this->input->post('nama');
 	 	    $alamat       = $this->input->post('alamat');

 	 	    if(isset($_POST['submit'])) {
 	 		    $data = [
 	 					        'nama' => $nama,
 	 					        'alamat' => $alamat
 	 				         ];
 	 		     $this->db->where('no_induk',$no_induk);
 	 		     $this->db->update('mahasiswa',$data);
 	 		     redirect(base_url(),'refresh');
 	  	 }
 	  }
}
?>  