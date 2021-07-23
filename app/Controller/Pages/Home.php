<?php

namespace App\Controller\Pages;

// VIEW
use \App\Utils\View;

// MODEL
use \App\Model\Entity\Organization;

class Home extends Page
{


    /**
     * Método responsável por retornar o conteúdo (view) da nossa home
     *
     * @return string
     */
    public static function getHome()
    {
        

        $obOrganization = new Organization;

        // echo '<pre>';
        // print_r( $obOrganization );
        // echo '</pre>';
        // exit;
        

        // View da home
        $content = View::render('pages/home', [
            'name' => $obOrganization->name
    
        ]);

        // Retorna a view da página
        return parent::getPage('HOME > WDEV',$content);
    }
}
