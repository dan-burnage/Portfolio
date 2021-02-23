# Design Portfolio
Portfolio website built with custom responsive template with CouchCMS (v2.1) CMS integration.

Live build at https://danburnage.com/

## Libarys Dependencies
**Retrofitted CMS —** *CouchCMS v2.1* **:** https://github.com/CouchCMS/CouchCMS

**JS page transitions —** *Enhancement* **:** https://github.com/swup/swup

## Launch Notes

- **Database** — Manual export and transfer of mySQL database to live server with duplicate couch instal. Check `define( 'K_DB_NAME', 'danburnage_com' );`, `define( 'K_DB_USER', 'root' );`, `define( 'K_DB_PASSWORD', '[INSERT PASSWORD HERE]' );`, `define( 'K_DB_HOST', 'localhost' );` in couch/config.php.

- **rewrite.php** — Checks rewrite property for CouchCMS's 'Pretty URLs'. Check post launch to live server for correct implimentation. Check for `define( K_PRETTY_URLS', 0 );` in couch/config.php.

