# mtm-db-export

## Installing package

### Add reposity in composer.json file

```
"repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/Saw-Kyaw-Myint/mtm-db-export.git"
        }
],
```

### Add package name at required key in composer.json file

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

If you want to know about package,run command

```
php artisan about
```

### Run database-export command

```
php artisan db:db-export
```
