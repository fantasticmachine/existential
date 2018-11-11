# Existential plugin for Craft CMS

Check whether a file exists

![Screenshot](resources/screenshots/plugin_logo.png) <-- this is irony

## Installation

To install Existential, follow these steps:

1. Download & unzip the file and place the `existential` directory into your `craft/plugins` directory
2. Install plugin in the Craft Control Panel under Settings > Plugins
3. The plugin folder should be named `existential` for Craft to see it.  GitHub recently started appending `-master` (the branch name) to the name of the folder for zip file downloads.

Existential works on Craft 2.4.x upwards.

## Existential Overview

A simple Craft 2 plugin which adds a Twig filter for checking whether a file exists

## Configuring Existential

No configuration is necessary

## Using Existential

Use it like this, `{% if asset.getUrl() | fileExists %}`

The plugin will return 'true' if the file exists and 'false' if otherwise.

## Existential Roadmap

Some things to do, and ideas for potential features:

* Release it
* Have a beer

Brought to you by [Pete Eveleigh](https://moresoda.co.uk)
