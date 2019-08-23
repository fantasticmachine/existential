# Existential plugin for Craft CMS

Check whether a file exists

![Screenshot](resources/screenshots/plugin_logo.png) <-- this is irony


## Existential Overview

A simple Craft 3 plugin which adds a Twig filter for checking whether a file exists

For the Craft 2 version see https://github.com/moresoda/existential/tree/craft2/master [https://github.com/moresoda/existential/tree/craft2/master]

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
