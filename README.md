Wordprss Headless with React (ssr)
==================================

## Table of Contents

*   [Introduction](#introduction)
*   [Install WP Cli](#install-wp-cli)
*   [Install WP Core & theme](#install-wp-core-&-theme)

## Introduction

## Install WP Cli

see docs to install wp-cli which is used to install & update
core wordpress files & plugins

```bash
  curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
  chmod +x wp-cli.phar
  sudo mv wp-cli.phar /usr/local/bin/wp
```

## Install WP Core & theme

only for local development

```bash
wp core download
mysqladmin -u admin -p create wp-react-ssr
wp config create --dbname=wp-react-ssr --dbuser=admin --dbpass=admin
wp core install --admin_user=admin --admin_email=admin@admin.com --admin_password=admin --url=http://localhost:8000/ --title="Wordprss Headless with React (ssr)"
ln -s $(pwd)/theme wp/wp-content/themes/wp-react-ssr
wp theme activate wp-react-ssr
```

## Update wp-config

add following after `$table_prefix`

```php
define('WP_ENV', 'development');
define('WP_SITEURL', 'http://localhost:8000/');
define('WP_HOME', 'http://localhost:8000/');
```

## Install Plugins

```bash
cat wp-plugins.txt | xargs wp plugin install --activate
```

## Run Wordpress with php built in server

```bash
yarn wp
```


#### MIT License
