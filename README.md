# m3 — A bodged together Wordpress theme meant for one guy's awful blog

Hi, this repo only exists because the GPLv2 says I have to give you the source code. Please don't use this!

## Using m3 on your own website

If for whatever reason you would actually like to use this filth, you should first note that it was designed to be used with the *[Simply Static](https://wordpress.org/plugins/simply-static/)* static site generator and, as such, it has not been designed with support for common WordPress features such as server-side search or comments. These features *are* present and may work without modifying the theme source code, but it is not designed with this functionality in mind.

The theme should work as is, but you should note that m3 was built specifically for my blog, [iosef.org](https://iosef.org/), and some of the code in this theme is tailored around that website. These site-specific hardcoded options have not yet been converted to Wordpress Admin settings variables and you may need to make site specific changes to this theme if you wish to use it (unless you're trying to impersonate my blog, in which case pls don't 😢). 

This theme is designed to be used on a website that is loaded statically using the [Simply Static](https://wordpress.org/plugins/simply-static/) extension. As such, you will need to enable things such the comment form which have been disabled.

1. You will need to add an square black icon to the root folder of the theme to appear next to the site title.
2. You will need to change the footer text to reflect your own information and icons.
3. If you wish to use a custom logo, you will need to uncomment the function for it in [header.php](/header.php).

In some older versions of this repo, the IBM Plex web fonts are commented out. 

## Features

### Video layouts
You can enable a special post layout for YouTube video posts by setting the custom field value for `video_post` to `true` and setting the value for `video_post_src` to the Video ID of a YouTube post. It will embed in privacy-enhanced mode. This will replace the featured image on the post page with the video embed.

## Credits
- Based on Underscores https://underscores.me/, (C) 2012-2020 Automattic, Inc., [GPLv2 or later](https://www.gnu.org/licenses/gpl-2.0.html)
- normalize.css https://necolas.github.io/normalize.css/, (C) 2012-2018 Nicolas Gallagher and Jonathan Neal, [MIT](https://opensource.org/licenses/MIT)
- Disable Emojis, (c) 2015/2021 Ryan Hellyer, [GPL2](https://www.gnu.org/licenses/gpl-2.0.html)