<?php

/**
 * home actions.
 *
 * @package    proyecto1
 * @subpackage home
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class homeActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
	public function executeIndex(sfWebRequest $request)
	{
		$this->libros = Doctrine_Core::getTable('Libro')
		  ->createQuery('a')
		  ->execute();
	}
		
	public function executeLibro ()
    {
		$libros=Doctrine::getTable('Libro')->getAll(); //lo obtengo de la base datos
		$this->libros=$libros;
	}
	
	public function executeContenido()
	{
		$libros=Doctrine::getTable('Libro')->getAll(); //lo obtengo de la base datos
		$this->libros=$libros;
	}
	
	
	public function executeEjer()
	{
		$ejer=Doctrine::getTable('Gramatica')->getAll();
		$this->ejer=$ejer;
	}
	
	
	public function executeLogout(sfWebRequest $request)
	{
		$this->getUser()->setAuthenticated(false);
		$this->getUser()->getAttributeHolder()->clear();
		$this->redirect("@homepage");
	}
	
	public function executeLogin()
	{
		$this->getUser()->setAuthenticated(true);
		//$this->redirect('home/prueba');
	}
}
