<?php

namespace App\DataFixtures;

use App\Entity\Situation;
use App\Entity\SituationDtl;
use App\Entity\SituationData;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
       
        $tab = array("Situation de caisse", "Charge de travail agent", "Situation de mandatement",
        "Ecritures", "Transfert", "Paiement", "Qualité des comptes", "Specl");

        $tab0 = array("Situation décadaire", "Solde principal", "Sous-caisse", "Encaissement", "Décaissement",
                "Dossier en cours de traitement", "Dossier traité", "Situation congé",
                "Mandats récupérés", "Mandats en cours de traitement", "Mandats visés", "Mandats validés",
                "En attente de validation", "Validée", "Dévalidée", "Supprimée",
                "En attente de couverture", "Couverture effectuée", "En attente de transfert", "Transfert envoyé", 
                "VB en attente de paiement", "BC à payer", "Virement effectué", "BC payé", "OV en attente de signature",
                "Anormal", "Non ventilé", "Non apuré",
                "Décision en attente de validation", "Carte Fanilo", "Transfert SIIGFP-SPECL"
        );

        
        

        for ($i=0; $i < 8; $i++) { 
            $situation = new situation();
            $situation->setLibelle($tab[$i]);
            $manager->persist($situation);
            
        };
        
        for ($u=0; $u < count($tab0); $u++) {
            $dtl = new situationDtl(); 
            $dtl->setLibelle($tab0[$u]);
            $manager->persist($dtl);            
        };

        for ($i = 0; $i < 3636; $i++) {
            $data = new SituationData();
            $timestamp = mt_rand(1 * 3600 * 24 * 365 * 30, time());
            $randomDate = new DateTime(date("Y/m/d", $timestamp));
            $tab1 = array(
                "Traité", "En cours", "Récupéré", "Visé", "Validé", "Supprimé", "En attente", "Dévalidé",
                "Envoyé", "Payé", "Effectué", "A payer", "Anormal", "Non ventilé", "Non apuré"
            );
            $res = array_rand($tab1, 1);
            $status = $tab1[$res];
            //$randomDate = date("Y/m/d", $timestamp);

            $data->setLibelle("Compte " . $i);
            $data->setMontant(mt_rand(1000000, 50000000));
            $data->setStatus($status);
            $data->setCreatedAt($randomDate);
            if ($status == "Traité") {
                $data->setIdParentData(6);
            } elseif ($status == "En cours") {
                $t = array(5, 9);
                $r = array_rand($t, 1);
                $data->setIdParentData($t[$r]);
            } elseif ($status == "Récupéré") {

                $data->setIdParentData(8);
            } elseif ($status == "Visé") {

                $data->setIdParentData(10);
            } elseif ($status == "Validé") {
                $t = array(11, 13);
                $r = array_rand($t, 1);
                $data->setIdParentData($t[$r]);
            } elseif ($status == "Supprimé") {

                $data->setIdParentData(15);
            } elseif ($status == "Dévalidé") {

                $data->setIdParentData(14);
            } elseif ($status == "Envoyé") {
                $data->setIdParentData(19);
            } elseif ($status == "Payé") {
                $data->setIdParentData(23);
            } elseif ($status == "Effectué") {
                $t = array(17, 22);
                $r = array_rand($t, 1);
                $data->setIdParentData($t[$r]);
            } elseif ($status == "A payer") {
                $data->setIdParentData(21);
            } elseif ($status == "Anormal") {
                $data->setIdParentData(25);
            } elseif ($status == "Non ventilé") {
                $data->setIdParentData(26);
            } elseif ($status == "Non apuré") {
                $data->setIdParentData(27);
            } elseif ($status == "En attente") {
                $t = array(12, 16, 17, 18, 22, 26);
                $r = array_rand($t, 1);
                $data->setIdParentData($t[$r]);
            }
            $manager->persist($data);
        }

        $manager->flush();
        // $ar = array(
        //     "Situation de caisse"=>array("Situation décadaire", "Solde principal", "Sous-caisse", "Encaissement", "Décaissement"),
        //     "Charge de travail agent"=>array("Dossier en cours de traitement", "Dossier traité", "Situation congé"),
        //     "Situation de mandatement"=>array("Mandats récupérés", "Mandats en cours de traitement", "Mandats visés", "Mandats validés"),
        //     "Ecritures"=>array("En attente de validation", "Validée", "Dévalidée", "Supprimée"),
        //     "Transfert"=>array("En attente de couverture", "Couverture effectuée", "En attente de transfert", "Transfert enfoyé"),
        //     "Paiement"=>array("VB en attente de paiement", "BC à payer", "Virement effectué", "BC payé", "OV en attente de signature"),
        //     "Qualité des comptes"=>array("Anormal", "Non ventilé", "Non apuré"),
        //     "Specl"=>array("Décision en attente de validation", "Carte Fanilo", "Transfert SIIGFP-SPECL")
        // );
        // foreach($my_array as $number => $number_array){
        //     foreach($number_array as $data = > $user_data){
        //         print "Array number: $number, contains $data with $user_data.  <br>";
        //     }
        // }
        // foreach ($ar as $key => $value) {
        //     $situation->setLibelle($key);
        //     $dtl->setLibelle($value);
        //     $manager->persist($situation);
        //     $manager->persist($dtl);
        // }
       


        

        
        // $product = new Product();
        // $manager->persist($product);

        
    }
}
