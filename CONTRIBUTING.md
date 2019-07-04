# Contributing

## Build Process

Inside of the [./src](src) folder you will find other folders named after the language, The name of the folder will be used as the scope and name of the new snippet file.
You will see a `php-html` folder which then gets split during the build by the hyphen and the snippet will then set the scope to those languages. `"scope": "php,html",`

Inside of each folder are files, The naming of those are `snippet shortcut - description`
Each file has the contents of the snippet, the build process converts 4 spaces into a `/t` tab

Once you have created your snippets you can run `yarn run build` which will generate the new snippet file.
