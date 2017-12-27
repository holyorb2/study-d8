<?php
/**
 * @file
 * Contains \Drupal\sd8_base\Controller\Sd8PageController.
 */

namespace Drupal\sd8_base\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Controller routines for page example routes.
 */
class Sd8PageController extends ControllerBase {
  /**
   * Constructs a simple page.
   *
   * The router _controller callback, maps the path
   * 'd8-page/page-example' to this method.
   */
  public function simple() {
    return [
      '#markup' => '<p>' . $this->t('Simple page: The quick brown fox jumps over the lazy dog.') . '</p>',
    ];
  }
}
