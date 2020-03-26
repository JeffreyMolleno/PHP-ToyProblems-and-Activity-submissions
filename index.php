<?php


    include_once 'Model/BoomPortal.model.php';

    $boomportal = new BoomPortal();

    $boomportal->setClient('Jaymard Menor');
    $boomportal->setProjectManager('Jino Lacson');
    $boomportal->setYearDeployed(2020);
    $boomportal->setBuiltVersion(1);
    $boomportal->setTechnologyStack(array('PHP7','CodeIgniter','Wordpress'));
    $boomportal->setDevelopers(array('Jaymard Menor','Jeffrey Molleno','Vanessa Dulva'));


    echo 'Client: ' . $boomportal->isClient() . '<br>';
    echo 'Project Manager: ' . $boomportal->myProjectManager() . '<br>';
    echo 'Year Deployed: ' . $boomportal->YearDeployed() . '<br>';
    echo 'Built Version: ' . $boomportal->BuiltVersion() . '<br>';
    echo 'Technology Stack: <br>';
        print_r($boomportal->TechnologyStack());
    echo '<br>Developers: <br>';
        print_r($boomportal->Developers());
