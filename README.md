# Files Rename Replace

A module for ProcessWire CMS/CMF. Allows files to be renamed or replaced in Page Edit.

![rename-replace](https://user-images.githubusercontent.com/1538852/38715692-c5a6dd0c-3f30-11e8-842a-8097b27263ef.gif)

## Usage

[Install](http://modules.processwire.com/install-uninstall/) the Files Rename Replace module.

If you want to limit the module to certain roles only, select the roles in the module config. If no roles are selected then any role may rename/replace files.

In Page Edit, click "Rename/Replace" for a file...

#### Rename

Use the text input to edit or replace the existing name (excluding file extension).

#### Replace

Use the select to choose another file from the same field. On page save that file will be replaced with the file you are editing. Metadata (description, tags) will be copied from the replaced file, and if the file extensions are the same the name of the replaced file will be retained.