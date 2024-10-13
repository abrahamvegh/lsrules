<?php
$derpmap = 'https://login.tailscale.com/derpmap/default';
$file = file_get_contents($derpmap);
$json = json_decode($file);
$ips = [];
// IPv4 considered legacy
$ips_legacy = [];

foreach ($json->Regions as $region)
{
	foreach ($region->Nodes as $node)
	{
		$ips[] = $node->IPv6;
		$ips_legacy[] = $node->IPv4;
	}
}

natsort($ips);
natsort($ips_legacy);

$merged = array_merge($ips, $ips_legacy);

echo implode(', ', $merged);
echo "\n";
