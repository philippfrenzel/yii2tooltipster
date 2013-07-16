yii2tooltipster
===============

Tooltipster JQuery Extension Yii2
http://calebjacob.com/tooltipster/#demos

Install
=======

use composer and packagist!

And in the view where you wanna use it:

```php
echo yii2tooltipster::widget($options=array());
```


```js
$('.tooltip').tooltipster({
   animation: 'fade',
   arrow: true,
   arrowColor: '',
   content: '',
   delay: 200,
   fixedWidth: 0,
   maxWidth: 0,
   functionBefore: function(origin, continueTooltip) {
      continueTooltip();
   },
   functionReady: function(origin, tooltip) {},
   functionAfter: function(origin) {},
   icon: '(?)',
   iconDesktop: false,
   iconTouch: false,
   iconTheme: '.tooltipster-icon',
   interactive: false,
   interactiveTolerance: 350,
   offsetX: 0,
   offsetY: 0,
   onlyOne: true,
   position: 'top',
   speed: 350,
   timer: 0,
   theme: '.tooltipster-default',
   touchDevices: true,
   trigger: 'hover',
   updateAnimation: true
});
```
