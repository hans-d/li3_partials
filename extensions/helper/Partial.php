<?php

namespace li3_partials\extensions\helper;

class Partial extends \lithium\template\Helper {
  public function __call($method, $args) {
    $params = empty($args)? array() : $args[0];
    return $this->_context->view()->render(array('element'=> "{$method}_partial"), $params);
  }
}

?>
