# Files Rename Replace

A module for ProcessWire CMS/CMF. Allows files to be renamed or replaced in Page Edit.

![rename-replace](https://user-images.githubusercontent.com/1538852/38732240-9b85be62-3f71-11e8-811f-4dd58ee9b5a3.gif)

## Usage

[Install](http://modules.processwire.com/install-uninstall/) the Files Rename Replace module.

If you want to limit the module to certain roles only, select the roles in the module config. If no roles are selected then any role may rename/replace files.

In Page Edit, click "Rename/Replace" for a file...

#### Rename

Use the text input to edit the existing name (excluding file extension).

#### Replace

Use the "Replace with" select to choose a replacement file from the same field. On page save the file will be replaced with the file you selected. Metadata (description, tags) will be retained, and the filename also if the file extensions are the same.

Tip: newly uploaded files will appear in the "Replace with" select after the page has been saved.