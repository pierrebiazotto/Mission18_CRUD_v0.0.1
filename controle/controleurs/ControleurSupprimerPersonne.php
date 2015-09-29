<?php
require_once 'ControleurInterface.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class ControleurSupprimerPersonne implements ControleurInterface {
   
    public function dispatch($vue, $modele, $tabParametres) {
        
        try {
            $ok = $modele->getPersonne()->supprimerPersonne($tabParametres["nomP"], $tabParametres["prenomP"]);
            $vue->getPersonne()->afficheLesPersonnes();
        }
        catch(ModeleExceptions $ex){
            $vue->getPersonne()->afficheInsertPersonneNonOK();
        }
    }
}

?>