<?php
/**
 * @file
 * Contains \Drupal\sd8_base\Controller\Sd8PageAdminController.
 */

namespace Drupal\sd8_base\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Controller routines for page example routes.
 */
class Sd8PageAdminController extends ControllerBase {
  /**
   * Constructs a argument page.
   *
   * The router _controller callback, maps the path
   * 'sd8-page/admin/{type}' to this method.
   *
   * @param string $type
   *   A string to use.
   */
  public function argument($type) {
    return array(
      '#markup' => '<p>' . $this->t('The function received the argument %argument.',
        array('%argument' => $type)) . '</p>',
    );
  }
}
