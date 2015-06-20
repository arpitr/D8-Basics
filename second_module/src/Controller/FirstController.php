<?php
/**
  * @file
  * Contains \Drupal\second_module\Controller\FirstController
  */

namespace \Drupal\second_module\Controller;
/**
  * 
  */
class FirstController {

  public function FrstCallBack() {
  	return array(
  	  '#type' => 'markup',
  	  '#markup' => t('Here goes my First Custom page in drupal.')
  	);
  }
}