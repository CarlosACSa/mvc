<?php

namespace App\Controller\Pages;

// VIEW
use \App\Utils\View;

// MODEL
use \App\Model\Entity\Organization;

class About extends Page
{


    /**
     * Método responsável por retornar o conteúdo (view) da nossa About
     *
     * @return string
     */
    public static function getAbout()
    {
        

        $obOrganization = new Organization;

        // echo '<pre>';
        // print_r( $obOrganization );
        // echo '</pre>';
        // exit;
        

        // View da About
        $content = View::render('pages/about', [
            'name' => $obOrganization->name,
            'description' => $obOrganization->descricao ,
            'site'=> $obOrganization->site
        ]);

        // Retorna a view da página
        return parent::getPage('SOBRE - Canal - About',$content);
    }
}
