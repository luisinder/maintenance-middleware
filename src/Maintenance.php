<?php
namespace Luisinder\Middleware;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;

Class Maintenance
{
	protected $maintenanceMode;
	protected $errorObject;

	public function __construct($maintenanceMode, $errorObject)
	{
		$this->maintenanceMode = $maintenanceMode;
		$this->errorObject = $errorObject;
	}

	public function __invoke(ServerRequestInterface $request, ResponseInterface $response, $next)
	{
		if($this->maintenanceMode)
		{
			$response
			->withHeader('Content-type', 'application/json')
			->getBody()
			->write(json_encode($this->errorObject));
			return $response;
		}
		return $response = $next($request, $response);
	}
}