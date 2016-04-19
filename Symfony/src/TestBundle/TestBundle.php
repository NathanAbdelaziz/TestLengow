<?php

namespace TestBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use TestBundle\Entity\Commande;

class TestBundle extends Bundle
{
    public static function createCommande($em, $marketPlace, $idFlux, $order_amount, $order_currency){
        // création del a commande
        $com = new Commande();
        // récupération des données transmises par le controlleur
        $com->setMarketplace($marketPlace)
            ->setIdFlux($idFlux)
            ->setOrderAmount($order_amount)
            ->setOrderCurrency($order_currency);
        try{
            // persister la commande
            $em->persist($com);
            // soummettre à la base de donnée
            $em->flush();
        } catch (\Exception $ex) {
            echo ("Cette commande est un doublon : \n".$idFlux);
        }
    }
}
