<?php
spl_autoload_register(
  function (string $class_namespace): void {
    $root_path = "src";
    $class_path =  str_replace("\\", DIRECTORY_SEPARATOR, $class_namespace);
    // Get current work directory  ex: c:\workspace\php ...
    // @ -> suprime os erros silenciosamente
    $absolut_path =  $root_path . DIRECTORY_SEPARATOR . $class_namespace . ".php";
    @include_once $absolut_path;
  }
);
