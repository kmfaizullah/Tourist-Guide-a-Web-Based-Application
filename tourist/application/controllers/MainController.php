<?php
class MainController extends CI_Controller{

	function home(){
		
		$this->load->view('home');
	

	}
	function header(){
		$this->load->view('header');
	}

	function footer(){
		$this->load->view('footer');
	}


	function historic(){
		$this->load->view('header');
		$this->showHistoric();
		$this->load->view('footer');
	}

	function popular(){
		$this->load->view('header');
		$this->showPopular();
		$this->load->view('footer');
	}

	function picnic(){
		$this->load->view('header');
		$this->showPicnic();
		$this->load->view('footer');
	}

	function adventure(){
		$this->load->view('header');
		$this->showAdventure();
		$this->load->view('footer');
	}

	function extras(){
		$this->load->view('header');
		$this->showNews();
		$this->load->view('footer');

	}

	function about(){
		$this->load->view('header');
		$this->showAbout();
		$this->load->view('footer');
	}

	function contact(){
		$this->load->view('header');
		$this->load->view('contact');
		$this->load->view('footer');
	} 

	function login(){
		$this->load->view('login');
	}

	function signup(){
		$this->load->view('signup');
	}

	function adminpicnic(){
		$this->load->view('profileheader');
		$this->load->view('adminpicnic');
	}

	function adminplace(){
		$this->load->view('profileheader');
		$this->load->view('placeadmin');
	}

	function adminacco(){
		$this->load->view('profileheader');
		$this->load->view('adminacco');
	} 

	function adminhistoric(){
		$this->load->view('profileheader');
		$this->load->view('adminhistoric');
	}

	function adminadventure(){
		$this->load->view('profileheader');
		$this->load->view('adminadventure');
	}

	function admingiven(){
		$this->load->view('profileheader');
		$this->load->view('admingiven');
	}

	function adminpopular(){
		$this->load->view('profileheader');

		$this->load->view('adminpopular');
	}


	function adminnews(){
		$this->load->view('profileheader');
		$this->load->view('adminnews');
	}

	function profile(){
		$this->load->view('profileheader');
	}  

	function userprofile(){
		$this->load->view('profileheader');
		$this->showProfile();
	}  



	function index(){

		$this->load->model('MainModel');		
		$this->MainModel->createUsersTable();
		$this->load->view('home');
	}

	
	function signupprocess(){
		$this->load->model('MainModel');

		if($this->MainModel->storeDataToDB()){
			//$this->load->view('profile');
		}else {
			$this->load->view('profileheader');
			$this->showProfile();
		}
	
	}

	function contactprocess(){
		$this->load->model('MainModel');

		if($this->MainModel->storeContact()){
			//$this->load->view('profile');
		}else {
			//$this->load->view('profileheader');
			$this->load->view('contact');
		}
	
	}

	function picnicprocess(){
		$this->load->model('MainModel');

		if($this->MainModel->storePicnic()==true){
		}else {
			$this->load->view('profileheader');
			$this->load->view('success');
		}
	
	}

	function historicprocess(){
		$this->load->model('MainModel');

		if($this->MainModel->storeHistoric()==true){
		}else {
			$this->load->view('profileheader');
			$this->load->view('success');
		}
	
	}

	function adventureprocess(){
		$this->load->model('MainModel');

		if($this->MainModel->storeAdventure()==true){
		}else {
			$this->load->view('profileheader');
			$this->load->view('success');
		}
	
	}

	function givenprocess(){
		$this->load->model('MainModel');

		if($this->MainModel->storeGiven()==true){
		}else {
			$this->load->view('profileheader');
			$this->load->view('success');
		}
	
	}

	function newsprocess(){
		$this->load->model('MainModel');

		if($this->MainModel->storeNews()==true){
		}else {
			$this->load->view('profileheader');
			$this->load->view('success');
		}
	
	}

		function popularprocess(){
		$this->load->model('MainModel');

		if($this->MainModel->storePopular()==true){
		}else {
			$this->load->view('profileheader');
			$this->load->view('success');
		}
	
	}


	function accoprocess(){
		$this->load->model('MainModel');

		if($this->MainModel->storeAccomodation()==true){
		}else {
			$this->load->view('profileheader');
			$this->load->view('success');
		}
	
	}

	function placeprocess(){
		$this->load->model('MainModel');

		if($this->MainModel->storePlace()==true){
	
		}else {
			$this->load->view('profileheader');
			$this->load->view('success');
		}
	
	}

	function loginprocess(){
		$this->load->model('MainModel');
		if($this->MainModel->checkLogin()){
			$this->load->view('profileheader');
			$this->showProfile();
		}else {
			$this->load->view('incorrectlogin');
		}
	}


	 public function getAdmin(){
	 	$this->load->model('MainModel');
		  $query = $this->MainModel->getAdmin();
		  $data['users'] = null;
		  if($query){
		   $data['users'] =  $query;
		  }

		  $this->load->view('userprofile', $data);
		 }


		 function showHistoric(){
		 	$this->load->model('MainModel');
		$data['userdata'] = $this->MainModel->getHistoric();
		$this->load->view('historic', $data);	
	}

		 function showPopular(){
		 	$this->load->model('MainModel');
		$data['userdata'] = $this->MainModel->getPopular();
		$this->load->view('popular', $data);	
	}


		 function showPicnic(){
		 	$this->load->model('MainModel');
		$data['userdata'] = $this->MainModel->getPicnic();
		$this->load->view('picnic', $data);	
	}


		 function showAdventure(){
		 	$this->load->model('MainModel');
		$data['userdata'] = $this->MainModel->getAdventure();
		$this->load->view('adventurios', $data);	
	}

		 function showNews(){
		 	$this->load->model('MainModel');
		$data1['userdata1'] = $this->MainModel->getNews();
		$data2['userdata2'] = $this->MainModel->getGiven();
		$data = $data1+$data2;
		$this->load->view('extras',$data);	

			


	}

	function showAbout(){
		$this->load->model('MainModel');
		$data['userdata'] = $this->MainModel->getAbout();
		$this->load->view('about', $data);
	}

	function showProfile(){
		$data1['userdata1'] = $this->MainModel->getProfile();
		$data2['userdata2'] = $this->MainModel->getAdminprofile();
		$data= $data1+ $data2;
		$this->load->view('profile', $data);	
	}


	function searchprocess(){
		$this->load->model('MainModel');
		if($this->MainModel->search()=='extras'){
			$this->extras();
		}

		if($this->MainModel->search()=='home'){
			$this->home();
		}

		if($this->MainModel->search()=='historic'){
			$this->historic();
		}

		if($this->MainModel->search()=='popular'){
			$this->popular();
		}

		if($this->MainModel->search()=='picnic'){
			$this->picnic();
		}

		if($this->MainModel->search()=='adventure'){
			$this->adventure();
		}

		if($this->MainModel->search()=='about'){
			$this->about();
		}

		if($this->MainModel->search()=='contact'){
			$this->contact();
		}

		else {
			$this->load->view('header');
			$this->load->view('error');
			$this->load->view('footer');
			
		}
	}

}

?>

