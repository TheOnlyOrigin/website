# Website

This repository contains a simple WordPress website. The `public_html` directory holds the WordPress files along with a zipped archive (`public_html.zip`) that can be used for deployment. The top-level `index.php` file loads WordPress to display the site.

## Prerequisites

- **Web server**: Apache, Nginx, or any server capable of running PHP.
- **PHP**: Version 7.4 or higher is recommended.
- **Database**: MySQL or MariaDB.

## Deployment

1. Unzip `public_html.zip` (or copy the `public_html` folder) to your web server's document root.
2. Create a database for WordPress and assign a user with the appropriate privileges.
3. Copy `wp-config-sample.php` to `wp-config.php` and edit the database credentials and other configuration values.
4. Visit your site in a browser to complete the WordPress installation.

For local development, tools such as XAMPP or Docker with PHP and MySQL can be used to set up the environment.

