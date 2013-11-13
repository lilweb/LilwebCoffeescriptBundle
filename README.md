LilwebCoffeescriptBundle
========================

A Symfony2 bundle with an Assetic filter to use Coffeescript. There is no requirement on Nodejs for this bundle as the Coffeescript interpreter is a pure PHP implementation by @alxit.


Installation
------------

Add the bundle to your `composer.json` : 

```json 
...
"lilweb/coffeescript-bundle" : "0.0.1",
...
```

And add the bundle to your `AppKernel` file : 

    new Lilweb\CoffeescriptBundle\LilwebCoffeescriptBundle()

Usage 
-----

In your twig file, use the `coffeescript` filter :

```twig
{% javascripts filter="coffeescript"
     '@AcmeBundle/Resources/assets/coffee/main.coffee'
%}
     <script type="text/javascript" src="{{ asset_url }}"></script>
{% endjavascripts %}
``` 
