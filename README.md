# Design Portfolio
Website/portfolio code repository — Built with custom HTML and CSS responsive template and CouchCMS (v2.1) CMS integration.

Live build at https://danburnage.com/


## Development Notes

- **rewrite.php** — Checks rewrite property for CouchCMS's 'Pretty URLs'. Check post launch to live server for correct implimentation. Check for `define( K_PRETTY_URLS', 0 );` in couch/config.php.

- **swup.js** — Error chcek swup.js with Couch 'Pretty URLs' to ensure no missing "/" errors.

- **Database** — Manual export and transfer of mySQL database to live server with couch instal carried accross. Check `define( 'K_DB_NAME', 'danburnage_com' );`, `define( 'K_DB_USER', 'root' );`, `define( 'K_DB_PASSWORD', '[INSERT PASSWORD HERE]' );`, `define( 'K_DB_HOST', 'localhost' );` in chouch/config.php.

- **Static assets** — When pushed to live site update email signiture image URL.

- **gtag.html** — Google analytics and search consol implimentation added on local and mirrored to live site. **IMPORTANT** to check correct implimentation when pushed live.

