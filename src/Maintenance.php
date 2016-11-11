<?php

namespace Luisinder\Middleware;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;

Class Maintenance
{
  protected $maintenanceMode;
  protected $errorClass;

  public function __construct(bool $maintenanceMode = false, string $errorClass ="")
  {
    $this->$maintenanceMode = $maintenanceMode;
    $this->errorClass = $errorClass;
  }

public function __invoke(ServerRequestInterface $request, ResponseInterface $response, $next)
{

}
}
