# lsrules

Some rule groups for use with [Little Snitch][ls].

[ls]: https://www.obdev.at/products/littlesnitch/index.html

### Tailscale

[Tailscale][ts] publishes a current list of their [DERP servers][derp]. A script is included here for importing that list and turning it into a list of IPs that Little Snitch can use to not annoy me.

```
php scripts/derp.php | pbcopy
```

[ts]: https://tailscale.com
