<?php

namespace TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use TestBundle;
use APY\DataGridBundle\Grid\Source\Entity;

class XMLController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        $url = $this->container->getParameter('url_orders');
        return $this->render('TestBundle:Default:index.html.twig', array('url' => $url));
    }
    /**
     * @Route("/xml")
     */
    public function recupAction()
    {
        // identifiants de connexion
        $logger = $this->get('logger');
        $logger->info('Connexion au XML');
        // récupération de l'url du fichier xml
        $url = $this->container->getParameter('url_orders');
        $flux = new \SimpleXMLElement($url, NULL, TRUE);
        // récupérer le nombre de commandes
        $nbCommande = $flux->orders_count->count_total;
        // parcourir les commandes
        for ($i = 0; $i < $nbCommande; $i++) {
            // récupérer les attributs de chaque commande
            $marketPlace = $flux->orders->order[$i]->marketplace;
            $idFlux = $flux->orders->order[$i]->idFlux;
            $order_amount = $flux->orders->order[$i]->order_amount;
            $order_currency = $flux->orders->order[$i]->order_currency;
            $em = $this->getDoctrine()->getManager();
            // créer la commande dans la BDD
            TestBundle\TestBundle::createCommande($em, $marketPlace, $idFlux, $order_amount, $order_currency);
        }
        
        $source = new Entity('TestBundle:Commande');
        $grid = $this->get('grid');
        $grid->setSource($source);
        $grid->isReadyForRedirect();
        return $this->render('TestBundle:Default::xml.html.twig', array('grid' => $grid));
       
    }
    

}