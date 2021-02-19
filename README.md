Carpfish - Yii2 Pace
================================
[![Latest Stable Version](https://poser.pugx.org/carpfish/yii2-pace/v/stable)](https://packagist.org/packages/carpfish/yii2-pace) [![Total Downloads](https://poser.pugx.org/carpfish/yii2-pace/downloads)](https://packagist.org/packages/carpfish/yii2-pace) [![Latest Unstable Version](https://poser.pugx.org/carpfish/yii2-pace/v/unstable)](https://packagist.org/packages/carpfish/yii2-pace) [![License](https://poser.pugx.org/carpfish/yii2-pace/license)](https://packagist.org/packages/carpfish/yii2-pace)
#说明：
#页面加载进度指示器。

------------

安装说明:

------------

```
php composer.phar require "carpfish/yii2-pace" "*"
```
或

```
composer require carpfish/yii2-pace
```

或添加到composer.json文件中

```
"carpfish/yii2-pace": "*"
```

### 用法:
------------
```php
<?php
use carpfish\pace\PaceAsset;
PaceAsset::register($this);
?>
```
```html
<div class="pace  pace-inactive">
    <div class="pace-progress" data-progress-text="100%" data-progress="99">
        <div class="pace-progress-inner"></div>
    </div>
    <div class="pace-activity"></div>
</div>
------------
# 依赖库参考:
## [Pace](http://github.hubspot.com/pace/docs/welcome/)
------------
