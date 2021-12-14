# m3 — A bodged together Wordpress theme meant for one guy's awful blog

Hi, this repo only exists because the GPLv2 says I have to give you the source code. Please don't use this!

## Using m3 on your own website

If for whatever reason you would actually like to use this filth:

The theme should work as is, but you should note that m3 was built specifically for my blog, [iosef.org](https://iosef.org/), and some of the code in this theme is tailored around that website. These site-specific hardcoded options have not yet been converted to Wordpress Admin settings variables and you may need to make site specific changes to this theme if you wish to use it (unless you're trying to impersonate my blog, in which case pls don't 😢).

1. You will need to add an square black icon to the root folder of the theme to appear next to the site title.
2. You will need to change the footer text to reflect your own information and icons.
3. If you wish to use a custom logo, you will need to uncomment the function for it in [header.php](/header.php).

In some older versions of this repo, the IBM Plex web fonts are commented out. 

## Credits
- Based on Underscores https://underscores.me/, (C) 2012-2020 Automattic, Inc., [GPLv2 or later](https://www.gnu.org/licenses/gpl-2.0.html)
- normalize.css https://necolas.github.io/normalize.css/, (C) 2012-2018 Nicolas Gallagher and Jonathan Neal, [MIT](https://opensource.org/licenses/MIT)
- FitVids https://github.com/davatron5000/FitVids.js, (c) 2017 Chris Coyier and Dave Rupert, [WTFPL](http://www.wtfpl.net/)