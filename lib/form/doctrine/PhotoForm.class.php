<?php

/**
 * Photo form.
 *
 * @package    simde
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class PhotoForm extends BasePhotoForm
{
  public function configure()
  {
  	$this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'galeriePhoto_id' => new sfWidgetFormInputHidden(),
      'title'           => new sfWidgetFormInputText(),
      'author'          => new sfWidgetFormInputText(),
      'is_public'       => new sfWidgetFormInputText(),
      'image'           => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'galeriePhoto_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('GaleriePhoto'))),
      'title'           => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'author'          => new sfValidatorInteger(),
      'is_public'       => new sfValidatorInteger(),
      'image'           => new sfValidatorString(),
    ));

    $this->widgetSchema->setLabel('title', 'Titre');
    $this->widgetSchema->setLabel('author', 'Photographe');
    $this->widgetSchema->setLabel('is_public', "Est publique");
    $this->widgetSchema->setNameFormat('photo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
    $this->useFields(array('galeriePhoto_id', 'title', 'author', 'is_public', 'image'));
  }
}
