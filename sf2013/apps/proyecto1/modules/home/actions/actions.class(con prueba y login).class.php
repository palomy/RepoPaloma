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
		//$this->forward('default', 'module');

		$libros=Doctrine::getTable('Libro')->getALl();
		$this->libros=$libros;//lo que paso es el libro de $this
		
		$this->form=new LibroForm();//para crear el formulario
			
	} 
	
	public	function executePrueba(sfWebRequest $request)//es para cuando doy a enviar me salga otro archivo
	{
		$this->form=new LibroForm();
		$this->form->bind($request->getParameter($this->form->getName()));//dame los parametro de tal campo, y con $this->form->getName() los obtengo
		
		if (!$this->form->isValid()) //comprobacion de si es valido o no el formulario
		{
	      $this->form->errorSchema;
	    }
		
		$this->form->save();//lo guardo en la base de datos
		
		$libros=Doctrine::getTable('Libro')->getAll(); //lo obtengo de la base datos
		$this->libros=$libros;
		
	}
	
	public function executeLogin()
	{
		$this->getUser()->setAuthenticated(true);
		$this->redirect('home/prueba');
	}
}
