# mtm-db-export

## Installing package

### Add reposity in composer.json

```
"repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/Saw-Kyaw-Myint/mtm-db-export.git"
        }
]
```

### Add package name at required key in composer.json

```
"require": {
    //....
"mtm/db-export": "dev-main",
}
```

### Run command

```
composer update
```

### Add the service provider in your config/app.php file:

```
'providers' => [
    // ...
MTM\DBEXPORT\DatabaseExportServiceProvider::class,
];
```
