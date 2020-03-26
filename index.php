<?php


    include_once 'Model/BoomPortal.model.php';

    $boomportal = new BoomPortal();

    $boomportal->setClient('Jaymard Menor');
    $boomportal->setProjectManager('Jino Lacson');
    $boomportal->setYearDeployed(2020);
    $boomportal->setBuiltVersion(1);
    $boomportal->setTechnologyStack(array('PHP7','CodeIgniter','Wordpress'));
    $boomportal->setDevelopers(array('Jaymard Menor','Jeffrey Molleno','Vanessa Dulva'));


    echo 'Project Name: '.$boomportal->getProjectName().'<br>'; 
    echo 'Client: ' . $boomportal->isClient() . '<br>';
    echo 'Project Manager: ' . $boomportal->myProjectManager() . '<br>';
    echo 'Year Deployed: ' . $boomportal->YearDeployed() . '<br>';
    echo 'Built Version: ' . $boomportal->BuiltVersion() . '<br><br>';
    echo 'Technology Stack: <br>';
        foreach($boomportal->TechnologyStack() as $tstack){
            echo '&nbsp&nbsp&nbsp&nbsp'. $tstack. '<br>';
        }
    echo '<br>Developers: <br>';
        foreach($boomportal->Developers() as $devs){
            echo '&nbsp&nbsp&nbsp&nbsp'.$devs. '<br>';
        }    
