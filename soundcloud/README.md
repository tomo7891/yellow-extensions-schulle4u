<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

# Soundcloud 0.8.5

Embed Soundcloud audio tracks.

<p align="center"><img src="soundcloud-screenshot.png?raw=true" alt="Screenshot"></p>

## How to install an extension

[Download ZIP file](https://github.com/schulle4u/yellow-extensions-schulle4u/raw/main/downloads/soundcloud.zip) and copy it into your `system/extensions` folder. [Learn more about extensions](https://github.com/annaesvensson/yellow-update).

## How to embed an audio track

Create a `[soundcloud]` shortcut.
 
The following arguments are available, all but the first argument are optional:

`Id` = last part of a [Soundcloud](https://soundcloud.com) link, e.g. `http://api.soundcloud.com/tracks/101175715`  
`Style` = audio track style, e.g. `left`, `center`, `right`  
`Width` = audio track width, pixel or percent  
`Height` = audio track height, pixel or percent   

You should know that the service provider collects personal data and uses cookies.

## Examples

Embedding an audio track:

    [soundcloud 101175715]

Embedding an audio track, different styles and dimensions:

    [soundcloud 101175715 left 200 166]
    [soundcloud 101175715 right 200 166]

## Settings

The following settings can be configured in file `system/extensions/yellow-system.ini`:

`SoundcloudStyle` = audio track style, e.g. `left`, `center`, `right`  

## Acknowledgements

Thanks to Datenstrom for initial development! 

This extension uses [Soundcloud](https://soundcloud.com). Thanks for the service.

## Developer

Steffen Schultz. [Get help](https://datenstrom.se/yellow/help/).
