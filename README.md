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
$classification = \defyma\helper\NineGridClassification::calculate($scoreX, $scoreY, $maxX, $maxY);
...

```

# Example:

```php

...
$classification = \defyma\helper\NineGridClassification::calculate(1, 5, 6, 6);

echo $classification; \\ 7
...

```

# Params:

```$scoreX``` is score X | required

```$scoreY``` is score Y | required

```$maxX``` is range X Axis | optional | Default: 6

```$maxY``` is range Y Axis | optional | Default: 6
