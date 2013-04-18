<?php

/**
 * BaseLibro
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $nombre
 * @property string $titulo
 * @property string $autor
 * @property string $contenido
 * @property string $idioma
 * @property integer $nivel
 * @property integer $vocabulario_id
 * @property Vocabulario $Vocabulario
 * 
 * @method string      getNombre()         Returns the current record's "nombre" value
 * @method string      getTitulo()         Returns the current record's "titulo" value
 * @method string      getAutor()          Returns the current record's "autor" value
 * @method string      getContenido()      Returns the current record's "contenido" value
 * @method string      getIdioma()         Returns the current record's "idioma" value
 * @method integer     getNivel()          Returns the current record's "nivel" value
 * @method integer     getVocabularioId()  Returns the current record's "vocabulario_id" value
 * @method Vocabulario getVocabulario()    Returns the current record's "Vocabulario" value
 * @method Libro       setNombre()         Sets the current record's "nombre" value
 * @method Libro       setTitulo()         Sets the current record's "titulo" value
 * @method Libro       setAutor()          Sets the current record's "autor" value
 * @method Libro       setContenido()      Sets the current record's "contenido" value
 * @method Libro       setIdioma()         Sets the current record's "idioma" value
 * @method Libro       setNivel()          Sets the current record's "nivel" value
 * @method Libro       setVocabularioId()  Sets the current record's "vocabulario_id" value
 * @method Libro       setVocabulario()    Sets the current record's "Vocabulario" value
 * 
 * @package    proyecto1
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseLibro extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('libro');
        $this->hasColumn('nombre', 'string', 100, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 100,
             ));
        $this->hasColumn('titulo', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('autor', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('contenido', 'string', 1000, array(
             'type' => 'string',
             'length' => 1000,
             ));
        $this->hasColumn('idioma', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('nivel', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('vocabulario_id', 'integer', null, array(
             'type' => 'integer',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Vocabulario', array(
             'local' => 'vocabulario_id',
             'foreign' => 'id'));
    }
}