<?php

function addRoute(Route $route)	{
	return exec("sudo ip route add " . $route->getDestination() . " via " . $route->getGateway() . " dev " . $route->getInterface());
}

function delRoute(Route $route)	{
	return exec("sudo ip route del " . $route->getDestination() . " via " . $route->getGateway() . " dev " . $route->getInterface());
}

function getRoutes()	{
	$rawOutput = array();
	$routesArray = array();
	exec("ip route show",$rawOutput);

	foreach($rawOutput as $route)	{
		$route = explode(" ",$route);
		if($route[1] == "via")	{ 	// Real route (distant network with gw)
			array_push($routesArray, new Route($route[0],$route[2],$route[4],false));
		}
		elseif ($route[1] == "dev") { // Directly connected network
			array_push($routesArray, new Route($route[0],"-",$route[2],true));
		}
	}

	return $routesArray;
}

function deleteAllRoutes()	{
	$currentRoutes = getRoutes();
	foreach($currentRoutes as $route)	{
		if (!$route->getDirect())	{
			delRoute($route);
		}
	}
}

function defaultTo(int $router)	{
	global $interface,$routerA,$routerB;
	if($router == ROUTERA)	{
		addRoute(new Route("default",$routerA,$interface));
	}
	elseif($router == ROUTERB)	{
		addRoute(new Route("default",$routerB,$interface));
	}
}

 ?>
