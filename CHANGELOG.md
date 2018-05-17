# Changelog

## 1.9.0

### Refactors

[README.md](/README.md)

* Adds language type to code blocks
* Moves Contributors table to the bottom
* Adds Ne-Ne to the Contributors table
* Adds version badges to the top
* Adds header title
* Adds Following badges:
  * Made for VS Code
  * VS Code Extension Installs
  * VS Code Extension Version
  * Maintenance and Contributors

[snippets/](/snippets/)

* Removes duplicated code into seperate files (html.json and php.json) into single [snippets/acf.json](/snippets/acf.json)
* Removes prefixed `\r\n` and affixed `\r\n\t` from each snippet due to [VS Code patch](https://code.visualstudio.com/updates/v1_17#_snippet-transforms)

## 1.8.3

* Missing $ from query snippet fix.

## 1.8.2

* Fix for $ being escaped on variable names in php and html snippets.

## 1.8.0

* ACF can now be triggered within HTML files.

## 1.6.0

* Added Logo to the project.

## 1.5.0

* Removed and fixed unused lines.

## 1.3.0

* Created Sub field
* field:sub

## 1.2.0

* Created flexible content fields.
* field:flex
* field:flex:nested
