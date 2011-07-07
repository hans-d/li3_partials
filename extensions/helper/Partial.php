<?php
/**
 * Li3_partials - Partial templates in Lithium.
 *
 * @package       li3_partials
 * @copyright     Copyright 2011, Ali B. (http://awhitebox.com)
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */

namespace li3_partials\extensions\helper;

use lithium\template\TemplateException;

class Partial extends \lithium\template\Helper {
  public function __call($method, $args) {
    $context = $this->_context;
    $vars = isset($args[0])? $args[0]:array();
    $render = function ($type, $context, $method, $vars) {
      return $context->view()->render(array($type => "{$method}_partial"), $vars, $context->request()->params);
    };

    try {
      return $render('template', $context, $method, $vars);
    } catch(TemplateException $e) {
      return $render('element', $context, $method, $vars);
    }
  }
}

?>
