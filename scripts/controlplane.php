<?php
$hostname = 'controlplane.tailscale.com';
$type = DNS_AAAA;
$type |= DNS_A;
$records = dns_get_record($hostname, $type);
$ips = [];
// IPv4 considered legacy
$ips_legacy = [];

foreach ($records as $record)
{
	if ($record['type'] == 'AAAA')
	{
		$ips[] = $record['ipv6'];
	}

	if ($record['type'] == 'A')
	{
		$ips_legacy[] = $record['ip'];
	}
}

natsort($ips);
natsort($ips_legacy);

$merged = array_merge($ips, $ips_legacy);

echo implode(', ', $merged);
echo "\n";
