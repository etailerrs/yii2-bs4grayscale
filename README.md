
Yii 2 Bootstrap 4 Template is a skeleton [design](https://startbootstrap.com/themes/grayscale/) best for
rapidly creating small projects.

DIRECTORY STRUCTURE
-------------------

      src/             		    contains module code, Assets and Module class
      src/bs_temp/          	contains bs4 template code downloaded and unziped
      src/controllers/        	contains Module controller classes
      src/views/              	contains Demo view files for the Web application

INSTALLATION
------------

### Install via Composer

If you do not have [Composer](http://getcomposer.org/), you may install it by following the instructions
at [getcomposer.org](http://getcomposer.org/doc/00-intro.md#installation-nix).

You can then install this Module using the following command:

~~~
composer require etailerrs/bs4grayscale
~~~

Now you should be able to access the application through the following URL, assuming `basic` is the directory
directly under the Web root.

### Configure Yii2

In your config/ directory, add new module in web.php:

~~~
...
# After gii configuration
$config['bootstrap'][] = 'bs4grayscale';

$config['modules']['bs4grayscale'] = [
	'class' => 'etailerrs\bs4grayscale\Module',
];
~~~

### Test BS4 Grayscale

~~~
http://localhost?r=bs4grayscale

or

http://localhost/bs4grayscale
~~~
