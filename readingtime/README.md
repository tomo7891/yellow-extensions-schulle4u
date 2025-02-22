<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

# Readingtime 0.8.22

Show estimated reading time for page content.

<p align="center"><img src="readingtime-screenshot.png?raw=true" alt="Screenshot"></p>

## How to install an extension

[Download ZIP file](https://github.com/schulle4u/yellow-extensions-schulle4u/raw/main/downloads/readingtime.zip) and copy it into your `system/extensions` folder. [Learn more about extensions](https://github.com/annaesvensson/yellow-update).

## How to show estimated reading time

Create a `[readingtime]` shortcut. The following optional argument is available: 

`WordsPerMinute` = number of words per minute to calculate the estimated reading time  

This is a basic inline shortcut to show an estimated reading time for your pages, useful in blog and wiki articles to give your visitors an idea how long it may take to read a text. The actual reading time will vary depending on content and reading speed, therefore you can modify the words per minute calculation to suit your audience. 

## Examples

Basic usage: 

    Estimated reading time: [readingtime] minutes.

Calculate reading time with 400 words per minute:

    Estimated reading time: [readingtime 400] minutes.

## Settings

The following setting can be configured in file `system/extensions/yellow-system.ini`:

`ReadingtimeWordsPerMinute` = number of words per minute to calculate the estimated reading time  

## Acknowledgements

Thanks to the Datenstrom Yellow community for help and feedback!

## Developer

Steffen Schultz. [Get help](https://datenstrom.se/yellow/help/).
