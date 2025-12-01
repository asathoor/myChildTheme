# myChildTheme

This is a childtheme demonstration. In this case the parent theme is Twenty Twenty-five - but it's easy to change to another theme. Just edit the `style.css`file, and copy relevant files from the parent theme to the child theme folder.

## Structure

These files will initiate your theme development process. Now you can add whatever you fancy: fonts, colors, duotones, gradients, headers, templates, etc. etc. 

# myChildTheme

This is a childtheme demonstration. In this case the parent theme is Twenty Twenty-five - but it's easy to change to another theme. Just edit the `style.css`file, and copy relevant files from the parent theme to the child theme folder.

## Structure

These files will initiate your theme development process. Now you can add whatever you fancy: fonts, colors, duotones, gradients, headers, templates, etc. etc. 

<code>
myChild/
├── functions.php
├── index.php
├── screenshot.png
└── style.css
</code>

## And then

When you have added what you want to add it's time to export the theme to a zip file from the Dashboard. 

Now open the zip - and whatever you've added will be part of the theme. The zip-file will look somewhat like this:

<code>
myChild/
├── functions.php
├── index.php
├── parts
│   ├── footer-columns.html
│   ├── footer-newsletter.html
│   ├── footer.html
│   ├── header-large-title.html
│   ├── header.html
│   ├── sidebar.html
│   └── vertical-header.html
├── screenshot.png
├── style.css
├── templates
│   ├── 404.html
│   ├── archive.html
│   ├── home.html
│   ├── index.html
│   ├── page-no-title.html
│   ├── page.html
│   ├── search.html
│   └── single.html
└── theme.json
</code>

Your work with templates and template parts will be found in the correct directories. Colors and fonts will be added to the theme.json. You can even edit the style.css and update the parent theme (in this case Twenty twenty-five). 

Please note that the fonts are uploaded to `../uploads/fonts`. Perhaps it is more convenient to place the font files in `./assets/fonts`. Then you can add the fonts to your theme.json.

## Style variations

You can experiment with colors, fonts and layout. Save your most recent changes as a copy of theme json in `./styles/MYVARIATION.json`. Then add more colors, fonts, layouts, headers, footers and so on. When the next variation is ready you can copy the theme.json as e.g. `./styles/myNEWvariation.json`.

<code>
myChild/
├── functions.php
├── index.php
├── screenshot.png
└── style.css
</code>

## And then

Install the child theme on a server. Obviously the parent theme should also be present.

Make whatever changes you fancy. When you have added what you want to add it's time to export the theme to a zip file from the Dashboard. 

Now open the *exported* zip - and whatever you've added will be part of the theme. The zip-file will look somewhat like this:

<code>
myChild/
├── functions.php
├── index.php
├── parts
│   ├── footer-columns.html
│   ├── footer-newsletter.html
│   ├── footer.html
│   ├── header-large-title.html
│   ├── header.html
│   ├── sidebar.html
│   └── vertical-header.html
├── screenshot.png
├── style.css
├── templates
│   ├── 404.html
│   ├── archive.html
│   ├── home.html
│   ├── index.html
│   ├── page-no-title.html
│   ├── page.html
│   ├── search.html
│   └── single.html
└── theme.json
</code>

## Gutenberg Magick

Your work with templates and template parts will be found in the correct directories. Colors and fonts will be added to the theme.json. You can even edit the style.css and update the parent theme (in this case Twenty twenty-five). 

Please note that the fonts are uploaded to `../uploads/fonts`. Perhaps it is more convenient to place the font files in `./assets/fonts`. Then you can add the font src's to your theme.json in fonts:

<code>
{
    "fontFace": [
        {
            "fontFamily": "Manrope",
            "fontStyle": "normal",
            "fontWeight": "200 800",
            "src": [
                "file:./assets/fonts/manrope/Manrope-VariableFont_wght.woff2"
            ]
        }
    ],
    "fontFamily": "Manrope, sans-serif",
    "name": "Manrope",
    "slug": "manrope"
}
</code>

## Style variations

You can experiment with colors, fonts and layout. Save your most recent changes as a copy of theme json in `./styles/MYVARIATION.json`. Then add more colors, fonts, layouts, headers, footers and so on. When the next variation is ready you can copy the theme.json as e.g. `./styles/myNEWvariation.json`.


## On the domain server

When your child theme is ready, you can install the exported zip as a child theme. 

Oh - and remember to push to Github.

"The game's afoot Watson ..." (Sherlock Holmes)