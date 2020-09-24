# Design Portfolio
Website/portfolio code repository — Built with custom HTML and CSS responsive template and CouchCMS (v2.1) CMS integration.

Live build at https://danburnage.com/

## Libarys Dependencies
**Retrofitted CMS —** *CouchCMS v2.1* **:**
https://github.com/CouchCMS/CouchCMS

**JS page transitions —** *Ehancement only* **:** https://github.com/swup/swup

## Launch Notes

- **rewrite.php** — Checks rewrite property for CouchCMS's 'Pretty URLs'. Check post launch to live server for correct implimentation. Check for `define( K_PRETTY_URLS', 0 );` in couch/config.php.

- **swup.js** — Error chcek swup.js with Couch 'Pretty URLs' to ensure no missing "/" errors.

- **Database** — Manual export and transfer of mySQL database to live server with couch instal carried accross. Check `define( 'K_DB_NAME', 'danburnage_com' );`, `define( 'K_DB_USER', 'root' );`, `define( 'K_DB_PASSWORD', '[INSERT PASSWORD HERE]' );`, `define( 'K_DB_HOST', 'localhost' );` in couch/config.php.

- **Static assets** — When pushed to live site update email signiture image URL.

- **gtag.html** — Google analytics and search consol implimentation added on local and mirrored to live site. ***IMPORTANT*** to check correct implimentation when pushed live.

- **<cms:embed > Errors** — Check for embed code inconsistencys and ensure fully closed tags to avoid failed front-end build when Couch renders snippets.

– **.htaccess** — Rebuild .htaccess for SSL and CouchCMS 'PrettyURLs' compliance

