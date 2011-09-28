<?php

/**
 * @file Revolver.php
 *
 * Sets up the Revolver component and adds applicable variables
 * to the template.
 */
class Revolver extends ComponentHandler {
  /**
   * Revolver constructor
   */
  public function __construct() {
    parent::__construct();
  }

  /**
   * Abstract method used to set the variables that are sent to
   * the template.
   */
  public function set_component() {
    $this->add_var('title', $this->data->title);
    $this->add_var('list', $this->data->list);
    $this->add_var('nid', $this->data->nid);
  }
}
