<?php

    declare(strict_types=1);
    include_once 'IProject.interface.php';

    class BoomPortal implements IProject{
    
        private $clientName, $projectManager, $yearDeployed, $built_version, $developers = array(), $t_stack = array();

        
        public function __construct(){

        }

        public function getProjectName(){
           return self::projectName; 
        }

        public function setClient(string $name = 'name undefined'){
            $this->clientName = $name;
        }

        public function isClient() :? string {
            return $this->clientName;
        }

        public function setProjectManager(string $name = 'name undefined'){
            $this->projectManager = $name;
        }

        public function myProjectManager() :? string{
            return $this->projectManager;
        }

        public function setYearDeployed(int $year){
            $this->yearDeployed = $year;
        }

        public function YearDeployed() :? int {
            return $this->yearDeployed;
        }

        public function setBuiltVersion(int $built_version){
            $this->built_version = $built_version;
        }

        public function BuiltVersion() :? int{
            return $this->built_version;
        }

        public function setTechnologyStack(array $t_stack){
            $this->t_stack = $t_stack;
        }

        public function TechnologyStack() :? array{
            return $this->t_stack;
        }

        public function setDevelopers(array $developers){
            $this->developers = $developers;
        }

        public function Developers() :? array{
            return $this->developers;
        }
        
    }
