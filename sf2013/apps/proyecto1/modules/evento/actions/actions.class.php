<?php

/**
 * evento actions.
 *
 * @package    proyecto1
 * @subpackage evento
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class eventoActions extends sfActions
{
	public function executeIndex(sfWebRequest $request)
	{
		$this->libros = Doctrine_Core::getTable('Libro')
		  ->createQuery('a')
		  ->execute();
	}
	
	/*-- Partes del libro --*/
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
	
	public function executeNew(sfWebRequest $request)
	{
		$this->form = new LibroForm();
	}

	public function executeCreate(sfWebRequest $request)
	{
		$this->forward404Unless($request->isMethod(sfRequest::POST));

		$this->form = new LibroForm();

		$this->processForm($request, $this->form);

		$this->setTemplate('new');
	}

	public function executeEdit(sfWebRequest $request)
	{
		$this->forward404Unless($libro = Doctrine_Core::getTable('Libro')->find(array($request->getParameter('id'))), sprintf('Object libro does not exist (%s).', $request->getParameter('id')));
		$this->form = new LibroForm($libro);
	}

	public function executeUpdate(sfWebRequest $request)
	{
		$this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
		$this->forward404Unless($libro = Doctrine_Core::getTable('Libro')->find(array($request->getParameter('id'))), sprintf('Object libro does not exist (%s).', $request->getParameter('id')));
		$this->form = new LibroForm($libro);

		$this->processForm($request, $this->form);

		$this->setTemplate('edit');
	}

	public function executeDelete(sfWebRequest $request)
	{
		$request->checkCSRFProtection();

		$this->forward404Unless($libro = Doctrine_Core::getTable('Libro')->find(array($request->getParameter('id'))), sprintf('Object libro does not exist (%s).', $request->getParameter('id')));
		$libro->delete();

		$this->redirect('evento/index');
	}

	protected function processForm(sfWebRequest $request, sfForm $form)
	{
		$form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
		if ($form->isValid())
		{
		  $libro = $form->save();

		  $this->redirect('evento/edit?id='.$libro->getId());
		}
	}
	
			
	/*--- Cerrar sesion ---*/
	public function executeLogout(sfWebRequest $request)
	{
		$this->getUser()->setAuthenticated(false);
		$this->getUser()->getAttributeHolder()->clear();
		$this->redirect("@homepage");
	}
	
	/*-- Login --*/
	public function executeLogin()
	{
		$this->getUser()->setAuthenticated(true);
		//$this->redirect('home/prueba');
	}	
		
	
}
