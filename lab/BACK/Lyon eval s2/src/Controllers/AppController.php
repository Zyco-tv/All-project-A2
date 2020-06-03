<?php 
    namespace App\Controllers; 
    use App\Models\AppManager;
    use App\Models\UserManager;
    use App\Validator;
    use App\UserController;

    class AppController extends Controllers {
            private $manager;
            function __construct()
            {
                $this->manager = new AppManager();
                $this->userManager = new UserManager(); 
                parent::__construct();

                // if (!isset($_SESSION['user'])) {
                //     $this->redirect('/');
                // }
            }

            public function home() {
                $textmois = $this->manager->allmoi();
                $textcontenus = $this->manager->alldeventure();
                $textprojets = $this->manager->allprojet();
                $textcompetences = $this->manager->allcompetence();
                require VIEW .'index.php';
            }

            public function create()
            {
                $this->redirect('/');
            }

            public function storeApp() {

                $this->validator->validate([
                    'name' => ['required', 'alphaNumDash'],
                    'mail' => ['required', 'alphaNumDash'],
                    'message' => ['required', 'alphaNumDash']
                ]);
                if ($this->validator->errors()) {
                    $_SESSION["errors"] = $this->validator->errors();
                    $_SESSION["old"] = $_POST;

                    $this->redirect('/dashboard/candidature');
                    
                }
                $this->manager->storeApp();
                $this->redirect('/valide');
                exit();
            }

            public function show($firstname)
            {
                $candidature = $this->manager->find($firstname);
                require VIEW.'show.php';
            }
        
            public function showProfil($user) {
                $profil = $this->manager->find($user);
                require VIEW.'profile.php';
            }
        
            public function profil($pseudo) {
                $this->validator->validate([
                    'firstname' => ['required', 'alpha'],
                    'email' => ['required', 'email'],
                    'discord' => ['required', 'alphaNumDash'],
                    'birthday' => ['required', 'alphaNum'],
                ]);

                if ($this->validator->errors()) {
                    $_SESSION["errors"] = $this->validator->errors();
                    $this->redirect('/dashboard/'. $pseudo.'/profile');
                }

                $pseudo = $this->manager->find($_POST["pseudo"]);

                if ($_SESSION["errors"]) {
                    $this->redirect('/dashboard/'. $pseudo.'/profile');
                }
                
                $this->manager->store();
                $this->redirect('/dashboard/'. $_POST["pseudo"]);
            }

        public function homeDash() {
            require VIEW.'homedash.php';
        }

        public function editePage() {
            require VIEW.'AdminProfile.php';
        }

        public function storeEditepage() {

            $this->validator->validate([
                'name' => ['required', 'alphaNumDash'],
                'mail' => ['required', 'alphaNumDash'],
                'message' => ['required', 'alphaNumDash']
            ]);
            if ($this->validator->errors()) {
                $_SESSION["errors"] = $this->validator->errors();
                $_SESSION["old"] = $_POST;

                $this->redirect('/dashboard/candidature');
                
            }
            $this->manager->storeEditepage();
            $this->redirect('/valide');
            exit();
        }
        public function showEdite() {
            $textmois = $this->manager->allmoi();
            $textcontenus = $this->manager->alldeventure();
            $textprojets = $this->manager->allprojet();
            $textcompetences = $this->manager->allcompetence();
            require VIEW .'edite.php';
        }

        public function editeHeader()
        {
            $this->validator->validate([
                'prenom' => ['required'],
                'job' => ['required']
            ]);
            $_SESSION["old"] = $_POST;

            if ($this->validator->errors()) {
                $_SESSION["errors"] = $this->validator->errors();
                $this->redirect('/edite');
            } else {
                $this->manager->updateHeader();
                $this->redirect('/edite');
            }
        }

        public function editeMoi()
        {
            $this->validator->validate([
                'contenue' => ['required'],
                'img' => ['required']
            ]);
            $_SESSION["old"] = $_POST;
            if ($this->validator->errors()) {
                $_SESSION["errors"] = $this->validator->errors();

                $this->redirect('/edite');
            } else {
                $this->manager->updateMoi();
                $this->redirect('/edite');
            }
        }

        public function editeCompetence($id)
        {
            $this->validator->validate([
                'titre' => ['required'],
                'description' => ['required'],
                'img' => ['required']
            ]);
            $_SESSION["old"] = $_POST;
            if ($this->validator->errors()) {
                $_SESSION["errors"] = $this->validator->errors();

                $this->redirect('/edite');
            } else {
                $this->manager->updateCompetence($id);
                $this->redirect('/edite');
            }
        }

        public function editeProjet($id)
        {
            $this->validator->validate([
                'titre' => ['required'],
                'contenue' => ['required'],
                'url' => ['required']
            ]);
            $_SESSION["old"] = $_POST;
            if ($this->validator->errors()) {
                $_SESSION["errors"] = $this->validator->errors();
                
                $this->redirect('/edite');
            } else {
                $this->manager->updateProjet($id);
                $this->redirect('/edite');
            }
        }

        public function ajoutProjet()
        {
            $this->validator->validate([
                'titre' => ['required'],
                'contenue' => ['required'],
                'url' => ['required']
            ]);
            $_SESSION["old"] = $_POST;
            if ($this->validator->errors()) {
                $_SESSION["errors"] = $this->validator->errors();
                $this->redirect('/edite');
            } else {
                $this->manager->addProjet();
                $this->redirect('/edite');
            }
        }

        public function ajoutCompetence()
        {
            $this->validator->validate([
                'titre' => ['required'],
                'description' => ['required'],
                'img' => ['required']
            ]);
            $_SESSION["old"] = $_POST;
            if ($this->validator->errors()) {
                $_SESSION["errors"] = $this->validator->errors();

                $this->redirect('/edite');
            } else {
                $this->manager->addCompetence();
                $this->redirect('/edite');
            }
        }

        public function deleteCompetence($id) {
            $this->manager->deleteCompetence($id);
            $this->redirect('/edite');
        }
        public function deleteProjet($id) {
            $this->manager->deleteProjet($id);
            $this->redirect('/edite');
        }
        
        
        // public function pageror() {
        //     require VIEW .'404.php';
        // }

    }
