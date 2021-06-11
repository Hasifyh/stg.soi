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

        $tab = array(
            "Situation de caisse", "Charge de travail agent", "Situation de mandatement",
            "Ecritures", "Transfert", "Paiement", "Qualité des comptes", "Specl"
        );

        $tab0 = array(
            "Situation décadaire", "Solde principal", "Sous-caisse", "Encaissement", "Décaissement",
            "Dossier en cours de traitement", "Dossier traité", "Situation congé",
            "Mandats récupérés", "Mandats en cours de traitement", "Mandats visés", "Mandats validés",
            "En attente de validation", "Validée", "Dévalidée", "Supprimée",
            "En attente de couverture", "Couverture effectuée", "En attente de transfert", "Transfert envoyé",
            "VB en attente de paiement", "BC à payer", "Virement effectué", "BC payé", "OV en attente de signature",
            "Anormal", "Non ventilé", "Non apuré",
            "Décision en attente de validation", "Carte Fanilo", "Transfert SIIGFP-SPECL"
        );




        for ($i = 0; $i < 8; $i++) {
            $situation = new situation();
            $situation->setLibelle($tab[$i]);
            $manager->persist($situation);
        };

        for ($u = 0; $u < count($tab0); $u++) {
            $dtl = new situationDtl();
            $dtl->setLibelle($tab0[$u]);
            $manager->persist($dtl);
        };

        //Charge de travail agent 2
        for ($i = 0; $i < 1000; $i++) {
            $data = new SituationData();
            $timestamp = mt_rand(1 * 3600 * 24 * 365 * 30, time());
            $randomDate = new DateTime(date("Y/m/d", $timestamp));
            $tab1 = array(
                "Traité", "En cours"
            );
            $res = array_rand($tab1, 1);
            $status = $tab1[$res];
            $data->setLibelle("Compte " . $i);
            $data->setMontant(mt_rand(1000000, 50000000));
            $data->setStatus($status);
            $data->setCreatedAt($randomDate);
            $data->setIdParentData(2);
            $manager->persist($data);
        };
        //Situation de mandatement 3
        for ($i = 0; $i < 1000; $i++) {
            $data = new SituationData();
            $timestamp = mt_rand(1 * 3600 * 24 * 365 * 30, time());
            $randomDate = new DateTime(date("Y/m/d", $timestamp));
            $tab1 = array(
                "Récupéré", "En cours", "Visé", "Validé"
            );
            $res = array_rand($tab1, 1);
            $status = $tab1[$res];
            $data->setLibelle("Compte M" . $i);
            $data->setMontant(mt_rand(1000000, 50000000));
            $data->setStatus($status);
            $data->setCreatedAt($randomDate);
            $data->setIdParentData(3);
            $manager->persist($data);
        };

        //Ecritures 4
        for ($i = 0; $i < 1000; $i++) {
            $data = new SituationData();
            $timestamp = mt_rand(1 * 3600 * 24 * 365 * 30, time());
            $randomDate = new DateTime(date("Y/m/d", $timestamp));
            $tab1 = array(
                "En attente", "Dévalidée", "Validée", "Supprimée"
            );
            $res = array_rand($tab1, 1);
            $status = $tab1[$res];
            $data->setLibelle("Compte E" . $i);
            $data->setMontant(mt_rand(1000000, 50000000));
            $data->setStatus($status);
            $data->setCreatedAt($randomDate);
            $data->setIdParentData(4);
            $manager->persist($data);
        };

        //Transfert 5
        for ($i = 0; $i < 1000; $i++) {
            $data = new SituationData();
            $timestamp = mt_rand(1 * 3600 * 24 * 365 * 30, time());
            $randomDate = new DateTime(date("Y/m/d", $timestamp));
            $tab1 = array(
                "En attente de couverture", "En attente de transfert", "Couverture effectuée", "Envoyé"
            );
            $res = array_rand($tab1, 1);
            $status = $tab1[$res];
            $data->setLibelle("Compte T" . $i);
            $data->setMontant(mt_rand(1000000, 50000000));
            $data->setStatus($status);
            $data->setCreatedAt($randomDate);
            $data->setIdParentData(5);
            $manager->persist($data);
        };

        //Paiement 6
        for ($i = 0; $i < 1000; $i++) {
            $data = new SituationData();
            $timestamp = mt_rand(1 * 3600 * 24 * 365 * 30, time());
            $randomDate = new DateTime(date("Y/m/d", $timestamp));
            $tab1 = array(
                "En attente de paiement", "A payer", "Effectué", "Payé", "En attente de signature"
            );
            $res = array_rand($tab1, 1);
            $status = $tab1[$res];
            $data->setLibelle("Compte P" . $i);
            $data->setMontant(mt_rand(1000000, 50000000));
            $data->setStatus($status);
            $data->setCreatedAt($randomDate);
            $data->setIdParentData(6);
            $manager->persist($data);
        };

        //Qualité de compte 7
        for ($i = 0; $i < 1000; $i++) {
            $data = new SituationData();
            $timestamp = mt_rand(1 * 3600 * 24 * 365 * 30, time());
            $randomDate = new DateTime(date("Y/m/d", $timestamp));
            $tab1 = array(
                "Anormal", "Non ventilé", "Non apuré"
            );
            $res = array_rand($tab1, 1);
            $status = $tab1[$res];
            $data->setLibelle("Compte Q" . $i);
            $data->setMontant(mt_rand(1000000, 50000000));
            $data->setStatus($status);
            $data->setCreatedAt($randomDate);
            $data->setIdParentData(7);
            $manager->persist($data);
        };

        //SPECL 8
        for ($i = 0; $i < 1000; $i++) {
            $data = new SituationData();
            $timestamp = mt_rand(1 * 3600 * 24 * 365 * 30, time());
            $randomDate = new DateTime(date("Y/m/d", $timestamp));
            $tab1 = array(
                "En attente de validation", "Transfert"
            );
            $res = array_rand($tab1, 1);
            $status = $tab1[$res];
            $data->setLibelle("Compte Q" . $i);
            $data->setMontant(mt_rand(1000000, 50000000));
            $data->setStatus($status);
            $data->setCreatedAt($randomDate);
            $data->setIdParentData(7);
            $manager->persist($data);
        };

        $manager->flush();
    }
}
