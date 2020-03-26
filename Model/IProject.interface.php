<?php

interface IProject {
    const projectName = "Boom.Camp Portal V1.0.0";
    
    public function setClient(string $name);
    // public function getClient() :? string;
    public function isClient() :?string;

    public function setProjectManager(string $name);
    // public function getProjectManager() :? string;
    public function myProjectManager() :? string;


    public function setYearDeployed(int $year);
    public function YearDeployed() :? int;

    public function setBuiltVersion(int $built_version);
    public function BuiltVersion() :? int;

    public function setTechnologyStack(array $t_stack);
    public function TechnologyStack() :? array;

    public function setDevelopers(array $developers);
    public function Developers() :? array;

}