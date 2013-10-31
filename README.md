LilwebCoffeescriptBundle
========================

A Symfony2 bundle with an Assetic filter to use Coffeescript. There is no requirement on Nodejs for this bundle as the Coffeescript interpreter is a pure PHP implementation by @alxit.


Usage 
-----

Add the bundle to your composer.json : 

```json 
     "lilweb/coffeescript-bundle", 
```

In your twig file, use the `coffeescript` filter :


  {% javascripts filter="coffeescript"
    '@AcmeBundle/Resources/assets/coffee/main.coffee'
  %}
    <script type="text/javascript" src="{{ asset_url }}"></script>
  {% endjavascripts %}
