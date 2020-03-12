A not-so-scientific router speed test. I've tried to distill these routers to the bare minimum needed to return the route, mapped args and a controller.

Run Commands:

```
// args: uri, "num times to run"
php router/regex.php bar/23 1
php router/count.php bar/23 1
```

### Large Set ~200 routes
*Regex*: 0.304ms
*Count*: 0.118ms

### Small Set ~5 routes
*Regex*: 0.086ms
*Count*: 0.056ms

I'm testing the regex method vs. my count version. However, I'm not grouping the regex version. Regardless, these implementations do not seem to break down even with more massive sets if routes and both are high-speed. I would like to think a complied router using the regex method would significantly outpace the count version.

However, the Regex version has the apparent benefits of complex pattern matching.

1) https://medium.com/@nicolas.grekas/making-symfonys-router-77-7x-faster-1-2-958e3754f0e1
2) http://nikic.github.io/2014/02/18/Fast-request-routing-using-regular-expressions.html

My conclusion is that there are better places to optimize a system. Having one less file inclusion or class would likely make up the difference in speed. Also, use a tested router against your specific application and domain. The best performance will come from knowing your options and then implementing a router that best fits your application.