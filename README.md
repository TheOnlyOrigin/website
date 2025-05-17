# Website

This repository contains a WordPress site.

## Deployment

1. Copy the contents of this repository to your server.
2. Configure the WordPress `wp-config.php` file with your database credentials. A sample config is provided in `wp-config-sample.php`.
   - `DB_NAME` – database name
   - `DB_USER` – database user
   - `DB_PASSWORD` – database password
   - `DB_HOST` – database host, usually `localhost`
3. Make sure the server meets WordPress requirements (PHP, web server, etc.).
4. Run any database migrations or import data as needed.

Environment variables can be used to set the credentials during deployment.
