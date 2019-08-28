# nine-grid-classification
Simple helper for implement 9 Grid Classification.

Example case for 9-Grid Tallent Management

![Example Grid](https://raw.githubusercontent.com/defyma/nine-grid-classification/master/example-grid.png)

# Install:

```
composer require defyma/nine-grid-classification 
```

# Usage:

```php

...
$_9Grid = new \defyma\helper\NineGridClassification();
$_9Grid->setPoint($X, $Y, $X, $X2, $Y1, $Y2);
$classification = $_9Grid->calculate($scoreX, $scoreY);
...

```

# Example:

```php
...
$_9Grid = new \defyma\helper\NineGridClassification();
$_9Grid->setPoint(6,6);
$classification = $_9Grid->calculate(1, 5);

echo $classification; \\ 7
...

```

```php
...
$_9Grid = new \defyma\helper\NineGridClassification();
$_9Grid->setPoin(6,6,4,5,3,5);
$classification = $_9Grid->calculate(1, 5);

echo $classification; \\ 4
...

```

# Params:

```$scoreX``` is score X | required

```$scoreY``` is score Y | required

```$maxX``` is range X Axis | optional | Default: 6

```$maxY``` is range Y Axis | optional | Default: 6
