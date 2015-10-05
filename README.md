# yii2-animate.css
AssetBundle for http://daneden.github.io/animate.css/

## Installation

####Composer

```
$ php composer.phar require delocker/yii2-animate.css "dev-master"
```

or add

```
"delocker/yii2-animate.css": "dev-master"
```

to the ```require``` section of your `composer.json` file.

## Usage

in view (for example: ```@app/views/layouts/main.php```)

```php
// ...
use delocker\animate\AnimateAssetBundle;
// ...
AnimateAssetBundle::register($this);
```

or add to your ```assets/AppAsset.php```

```php
public $depends = [
    // ...
    '\delocker\animate\AnimateAssetBundle',
];
```
