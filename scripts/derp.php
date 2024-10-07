<?php
$derpmap = 'https://login.tailscale.com/derpmap/default';
$file = file_get_contents($derpmap);
$json = json_decode($file);
$ips = [];

foreach ($json->Regions as $region)
{
	foreach ($region->Nodes as $node)
	{
		$ips[] = $node->IPv4;
		$ips[] = $node->IPv6;
	}
}

echo implode(', ', $ips);
echo "\n";
