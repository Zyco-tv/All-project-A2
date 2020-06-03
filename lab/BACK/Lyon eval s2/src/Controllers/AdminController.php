<?php
namespace App\Controllers; 
use App\Models\AppManager;
use App\Models\UserManager;


    class AdminController extends Controllers {
            private $manager;
            function __construct()
            {
                if (!isset($_SESSION['user']) || !$_SESSION['user']->getAdmin()) {
                    $this->redirect('/');
                }
                $this->manager = new AppManager();
                $this->userManager = new UserManager(); 
                parent::__construct();
            }
            

                public function adminDashboard()
            {
                $candidates = $this->manager->all();
                require VIEW.'dashboard.php';
            }

            public function showApplication($name)
            {
                $candidature = $this->manager->find($name);
                require VIEW.'show.php';
            }

            public function ArchiveApplication()
            {
                $archives = $this->manager->all();
                require VIEW.'archivedash.php';
            }

            public function DeleteApplication($name)
            {
                $this->manager->delete($name);
                $this->redirect('/admin/dashboard');
            }

            public function AdminShowProfil($user) {
                // $profil = $this->manager->find($user);
                require VIEW.'AdminProfile.php';
            }
            public function AdminProfil($pseudo) {
                $this->validator->validate([
                    'pseudo' => ['required', 'alpha'],
                    'email' => ['required', 'email'],
                    'discord' => ['required', 'discord'],
                ]);

                if ($this->validator->errors()) {
                    //var_dump($this->validator->errors());
                    $_SESSION["errors"] = $this->validator->errors();
                    $this->redirect('/dashboard/admin/'.$_SESSION["user"]->getPseudo().'/profile');
                }
                $pseudo = $this->userManager->findById($_POST["pseudo"]);
                $this->userManager->update($_SESSION['user']->getId());
                $this->redirect('/admin/dashboard');
            }
        }