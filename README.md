Convert Shamsi date to Gregorian
================================
projecrt tset for extenstions

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist omidsaifpanahi/yii2-converter "dev-master"
```

or add

```
"omidsaifpanahi/yii2-converter": "dev-master"
```

to the require section of your `composer.json` file.


Usage
-----

For using this asset bundle you need just add this line `'airani\bootstrap\BootstrapRtlAsset'` in `$depends` of `AppAsset` or any asset bundels you work that.

Example:

```php
namespace backend\assets;

use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'airani\bootstrap\BootstrapRtlAsset',
    ];
}
```

```php
<?= \omidsaifpanahi\converter\AutoloadExample::widget(); ?>```