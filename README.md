Wordprss Headless with React (ssr)
==================================

## Table of Contents

*   [Introduction](#introduction)
*   [Install WP Cli](#install-wp-cli)
*   [Install WP Core & theme](#install-wp-core-&-theme)
*   [Wp-config.php file edits](#Update-wp-config)
*   [Local Project Setup](#Local-Project-Setup)

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
define( 'WACOAL_ENABLE_LOCAL_SETTINGS', true );
define( 'WACOAL_PHOTON_URL', 'http://photon.local' );
define('WP_ENV', 'development');
define('WP_SITEURL', 'http://wacoal.local/');
define('WP_HOME', 'http://wacoal.local/');

define('WP_DEBUG',true);
define('WP_DEBUG_LOG',true);
define('WP_DEBUG_DISPLAY',false);

if ( file_exists( __DIR__ . '/wp-content/vip-config/vip-config.php' ) ) {
  require_once __DIR__ . '/wp-content/vip-config/vip-config.php';
}
```

## Local Project Setup

```bash
Step 1: Clone the project using SSH/HTTP to your machine.

Step 2: (Go to project folder) cd wacoal

Step 3: yarn install (Only once when initial project setup)

Step 4: yarn sniff:setup (Only once when initial project setup)

Step 5: yarn docker:start

Step 6: yarn docker:setup (Only once when initial project setup)

Step 7: yarn start

```

## Daily Project run command

```
  01) yarn docker:start

  02) yarn docker:ip
      (Copy IP address and use the same in host file of local machine and docker container)

  03) sudo nano /etc/hosts
      (Use the copied IP address and paste in the file with below example)

      example:- 172.27.0.4 wacoal.local photon.local

      (Replace IP address in above example with yours and save the file)

  04) yarn docker:shell

      (Use the copied IP address and paste in the file with below example)

      example:- echo "172.27.0.4 photon.local wacoal.local" >> /etc/hosts

      (Replace IP address in above example with yours and save the file)

  05) yarn start
```


#### MIT License
