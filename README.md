#li3_partials

A super simple [Lithium][1] plugin to further simplify rendering partial templates in views.

###Installation
1. Clone/Download the plugin into your app's ``libraries`` directory.
2. Tell your app to load the plugin by adding the following to your app's ``config/bootstrap/libraries.php``:

        Libraries::add('li3_partials');

###Usage
1. Create your partial template(s):

    * You can name he template anything you like, just make sure you append it with `_partial`. For example,
     `foo_partial.html.php`.

    * By default, the helper will search for the template in your relevant view directory. For example, if it's
     being called from the `bar/add` view, it will expect the partial template to exist in `views/bar`.

    * If a matching template was not found in the view directory, the helper will then attempt to load it from
     the `elements` directory. This is particulary handy if this template is to be available for all views to
     use.

2. Tell your view to render the partial template using the `partial` helper using the following:

        $this->partials->foo($variables)

   Where `$variables` is an array that represents variable name/value pairs that are to be made available to the
   partial template (e.g. created using `compact()`).

[1]:http://lithify.me
