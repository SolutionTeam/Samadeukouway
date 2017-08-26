<?php

namespace PageBundle\Repository;

/**
 * PagesRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PagesRepository extends \Doctrine\ORM\EntityRepository
{
    function menuAction() {
        $em = $this->getDoctrine()->getManager();
        $pages=$em->getRepository('PageBundle:Pages')->findAll();
        return $this->render('PageBundle:Default:Pages/modulesUed/menu.html.twig',array('pages'=>$pages));
    }
}
