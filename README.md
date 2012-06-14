## PJAX and PHP usage demo


demonstration using the original Chris Wanstrath's <a href=''>PJAX</a> in PHP

important part i found was using
```PHP
($_SERVER["HTTP_X_PJAX"])
```
pjax loads HTML from your server into the current page
without a full reload. It's ajax with real permalinks,
page titles, and a working back button that fully degrades.

pjax enhances the browsing experience - nothing more.

You can find the original demo on <http://pjax.heroku.com/>

