# lsrules

Some rule groups for use with [Little Snitch][ls].

[ls]: https://www.obdev.at/products/littlesnitch/index.html

## Tailscale

[Tailscale][ts] publishes a [current list][list] of their [DERP servers][derp]. A script is included here for importing that list and turning it into a list of IPs that Little Snitch can use to not annoy me.

```
php scripts/derp.php | pbcopy
```

[ts]: https://tailscale.com
[list]: https://login.tailscale.com/derpmap/default
[derp]: https://tailscale.com/kb/1232/derp-servers

## Tailscale Nets

Some netblocks I expect Tailscale to try talking with; you may not necessarily want any or all of these, or as broad as these may be. I assume access control happens elsewhere.

[iana-v4-spar]: [https://www.iana.org/assignments/iana-ipv4-special-registry/iana-ipv4-special-registry.xhtml]
[rfc7335]: https://www.rfc-editor.org/rfc/rfc7335.html

- [IANA IPv4 Special-Purpose Address Registry][iana-v4-spar]
	- [IPv4 Service Continuity Prefix][rfc7335]
		- `192.0.0.0/29`
- Autonomous systems
	- AS7018 (AT&T Services, Inc.)
		- `2600:300::/24` (AT&T Mobility LLC / AS20057)
	- AS7922 (Comcast Cable Communications, LLC)
		- `2601::/20`
		- `68.80.0.0/13`
