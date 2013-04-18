<?php

/**
 * evento1 actions.
 *
 * @package    proyecto1
 * @subpackage evento1
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class evento1Actions extends sfActions
{
	public function executeIndex(sfWebRequest $request)
	{
		$this->gramaticas = Doctrine_Core::getTable('gramatica')
			->createQuery('a')
			->execute();
	}

	public function executeGramatica ()
    {
		$gramatica=Doctrine::getTable('Gramatica')->getAll(); //lo obtengo de la base datos
		$this->gramatica=$gramatica;
	}
	
	public function executePornivel(sfWebRequest $request)
	{
		$nivel=$request->getParameter('nivel');
		$gramatica=Doctrine::getTable('Gramatica')->getPorNivel($nivel); //lo obtengo de la base datos
		$this->gramatica=$gramatica;
	}
  public function executeNew(sfWebRequest $request)
  {
    $this->form = new gramaticaForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new gramaticaForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($gramatica = Doctrine_Core::getTable('gramatica')->find(array($request->getParameter('id'))), sprintf('Object gramatica does not exist (%s).', $request->getParameter('id')));
    $this->form = new gramaticaForm($gramatica);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($gramatica = Doctrine_Core::getTable('gramatica')->find(array($request->getParameter('id'))), sprintf('Object gramatica does not exist (%s).', $request->getParameter('id')));
    $this->form = new gramaticaForm($gramatica);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($gramatica = Doctrine_Core::getTable('gramatica')->find(array($request->getParameter('id'))), sprintf('Object gramatica does not exist (%s).', $request->getParameter('id')));
    $gramatica->delete();

    $this->redirect('evento1/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $gramatica = $form->save();

      $this->redirect('evento1/edit?id='.$gramatica->getId());
    }
  }
  
  
}
