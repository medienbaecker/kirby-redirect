<?php

Kirby::plugin('medienbaecker/redirect', [
  'fields' => [
    'redirect' => [
      'computed' => [
        'redirect' => function () {
          if($this->model()->parent()) {
            return $this->model()->parent()->panel()->url();	
          }
          return $this->model()->site()->panel()->url();	
        }
      ]
    ]
  ]
]);
