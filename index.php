<?php

Kirby::plugin('medienbaecker/redirect', [
  'fields' => [
    'redirect' => [
      'computed' => [
        'redirect' => function () {
          if($this->model()->parent()) {
            return $this->model()->parent()->panelUrl();	
          }
          return $this->model()->site()->panelUrl();	
        }
      ]
    ]
  ]
]);