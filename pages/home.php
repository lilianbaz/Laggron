<h2>Bascule</h2>

<p>Bascule vers :
<ul>
<li><a href="?page=routerA">Router xDSL</a></li>
<li><a href="?page=routerB">Router 4G</a></li>
</ul>
</p>

<hr/>

<h2>Liste des routes</h2>

<div class="table-responsive">
<table class="table table-striped">
	<thead class="thead-dark">
		<tr>
			<th>#</th>
			<th>Destination</th>
			<th>Passerelle</th>
			<th>Interface</th>
		</tr>
	</thead>
	<tbody>

<?php

$routes = getRoutes();
foreach($routes as $key => $route)	{ ?>
	<tr>
		<td><?= $key ?></td>
		<td><?= $route->getDestination() ?></td>
		<td><?php if($route->getGateway() == $routerA) { echo "Routeur xDSL"; } elseif($route->getGateway() == $routerB) { echo "Routeur 4G"; } else { echo $route->getGateway(); } ?></td>
		<td><?= $route->getInterface() ?></td>
	</tr>
	<?php
}

 ?>
</tbody>
</table>
</div>
