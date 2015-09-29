<?php

/**
 * Description of ControleurAffichePersonne
 *
 * @author Fabrice Missonnier
 */
class ControleurModifierPersonne implements ControleurInterface {
   
    public function dispatch($vue, $modele, $tabParametres) {
        try {
            //on va chercher les infos dans le modèle
            $result = $modele->getPersonne()->modifierPersonne($tabParametres["nomP"], $tabParametres["prenomP"], $tabParametres["sexeP"], $tabParametres["newNomP"], $tabParametres["newPrenomP"], $tabParametres["newSexeP"]);
            //on les affiche à la vue
            $vue->getPersonne()->afficheLesPersonnes($result);
        }
        catch(ModeleExceptions $ex){
            $vue->getGeneral()->afficheException($ex->getMessageErreur());
        }       
    }
}

