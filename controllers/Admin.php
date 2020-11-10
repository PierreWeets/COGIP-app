<?php    
   session_start();

    class Admin extends Controller{
        public $admin;
        public $contactArray = [];
        

        // READ
        public function DashBoard(){
            $dash = $this->loadModel('AdminModel');
            $admin = $dash->GetAllContacts();
            echo $this->render('AdminView', compact('admin'));
        }

        // CREATE
        public function NewContact(){    
                $cont = $this->loadModel('AdminModel');
                $cont->AddContactToDb();
                $listcomp = $cont->GetAllCompanies();
                echo $this->render('newContact', compact('listcomp'));
                if(isset($_POST['submitNewContact'])){
                    echo '<meta http-equiv="refresh" content="0; url='.URL.'Contacts/index">';
                }
        }

        public function NewCompany(){
                $comp = $this->loadModel('AdminModel');
                $AddCompany = $comp->AddCompanyToDb();
                echo $this->render('newCompany', compact('AddCompany'));
                if(isset($_POST['submitNewCompany'])){
                    echo '<meta http-equiv="refresh" content="0; url='.URL.'Companies/index">';
                }
            
        }

        public function NewInvoice(){
                $inv = $this->loadModel('AdminModel');
                $inv->AddInvoiceToDb();
                $listContacts = $inv->GetAllContacts();
                echo $this->render('newInvoice', compact('listContacts'));
                if (isset($_POST['submitNewInvoice'])) {
                    echo "BLABLABLABALBALBA";
                    echo '<meta http-equiv="refresh" content="0; url='.URL.'Invoice/index">';
                    }
        }
        // DELETE FROM ID 

        public function DeleteInvoiceFromId($id){
            $delete = $this->loadModel('AdminModel');
            $delete->DeleteInvoiceInDbFromId($id);
            echo '<meta http-equiv="refresh" content="0; url='.URL.'Invoice/index">';
        }
        public function DeleteContactFromId($id){
            $delete = $this->loadModel('AdminModel');
            $delete->DeleteContactInDbFromId($id);
            echo '<meta http-equiv="refresh" content="0; url='.URL.'Contacts/index">';
        }
        public function DeleteCompanyFromId($id){
            $delete = $this->loadModel('AdminModel');
            $delete->DeleteCompanyInDbFromId($id);
            echo '<meta http-equiv="refresh" content="0; url='.URL.'Companies/index">';
        }

       
        // LOGIN
        public function login() {
            $log = $this->loadModel('AdminModel');
            $login = $log->GetUser();
            if(isset($_POST['sendLogin'])){
                if(empty($_POST['login']) || empty($_POST['password'])){
                    echo '<meta http-equiv="refresh" content="2; url='.URL.'Home/index">';
                }else{    
                    foreach($login as $log){                    
                       if($log['Name'] == $_POST['login'] && $log['Hash_Password'] == $_POST['password']){
                            session_unset();
                            session_start();
                            $_SESSION['TypeUser'] = $log['Profil']; 
                       }
                   }if($_SESSION['TypeUser'] === "Admin"){
                        $index = $this->loadModel('Mainpage');
                        $invoices = $index->GetInvoicesForMain();   
                        $contacts = $index->GetContactsForMain();
                        $companies = $index->GetCompanyForMain();
                        echo $this->render('AdminView' , compact('invoices', 'contacts' , 'companies'));
                   }else if($_SESSION['TypeUser'] === "Modérateur"){
                        echo '<meta http-equiv="refresh" content="2; url='.URL.'Admin/index">';
                   }else{
                           echo "<p class='text-center text-danger font-weight-bold mt-5'>Bad Login or Password !!!</p>";
                           echo '<meta http-equiv="refresh" content="2; url='.URL.'Home/index">';
                   }
                }
            }
        }    
        
        // LOG OUT
        public function Logout(){
            session_unset();
            session_destroy();
            echo "<meta http-equiv='refresh' content='0; url=https://delvauxrobby.yj.fr/delvauxrobby.yj.fr/blog/Assets/COGIP-app/Home/index'>";
            }
        
            
            
                
        
    }
