## StaticElController

StaticElController is an Extra for MODx Revolution that sets the path of the file and media 
resource of an element (template, chunk, snippet, or plugin) when its 
"isStatic" checkbox is checked, and locks code editor if the element 
is static.

## Getting Started
* Download the ZIP transport file in the repo
* Move the transport file to `/core/packages` in your MODx install
* Unzip the transport file
* Navigate to the Package Management page in the MODx manager (`/manager/?a=workspaces`)
* Click the dropdown arrow on the `Download Extras` button, then select `Search Locally for Packages`
* Click `install` under `static_el_controller`
* Adjust your configuration by altering the System settings detailed in the next section

## Configuration

System Settings (under namespace `static_el_controller`):
* `base_element_path`
    * default: `static-elements/`
    * description: Base path for all static elements within the filesystem. Path will look like this: `{base_element_path}/{element_type}/{element_name}`.
* `element_media_source`
    * default: `1` (File System)
    * description: ID of Static Element Media Source (If set to `File System` source, path will begin at the MODx root).
* `enable_rewrite`
    * default: `No`
    * description: if "Yes", changing the name of the element will change the name of a static file. The old file is not deleted, it will be continue to be in the file system.
* `static_by_default`
    * default: `No`
    * description: If "Yes", marks all elements static in elements' forms.
* `include_category`
    * default: `No`
    * description: If "Yes", category name will be added to the element's path.
* `include_id`
    * default: `Yes`
    * description: If "Yes", element's file name is prepended with its ID.
* `chunk_file_extension`
    * default: `html`
    * description: Set up an extension for chunk static files.
* `plugin_file_extension`
    * default: `php`
    * description: Set up an extension for plugin static files.
* `snippet_file_extension`
    * default: `php`
    * description: Set up an extension for snippet static files.
* `template_file_extension`
    * default: `php`
    * description: Set up an extension for template static files.

## Installation Information

On installation, this extra adds the following to MODx:
* Plugin StaticElController (events `OnTempFormRender`, `OnChunkFormRender`, 
`OnSnipFormRender`, `OnPluginFormRender`)
* System Settings outlined in the previous section.

## Goals

The goal of StaticElController is primarily to move a MODx site towards a more robust
version-controlled infrastructure. StaticElController accomplishes this by automatically setting
default paths for elements in the filesystem and locking the code editor for elements marked static.
This makes for a one-way binding pattern where edits made to elements in a text editor propogate to
the database (which MODx uses as the source of truth for elements), and preventing the opposite.

### Improvements to Consider

The code editor is only locked if the `Is Static` checkbox is checked. 
As a result, the one-way binding pattern is not necessarily fixed at this point -- editors
can still uncheck the `Is Static` checkbox, edit code, then re-check the box and save. The level
of control StaticElController should allow users in the MODx manager should be discussed further.

### Development

Currently the build process is somewhat convoluted. It is as follows:

* Install locally on a MODx project as described in the `Getting Started` section
* Make edits to StaticElController files within that project (in `/assets/components/static_el_controller`, `/core/components/static_el_controller`, and the StaticElController plugin)
* Modify line 8 of `_build/build.config.php`
    * Before: `define('MODX_BASE_PATH', dirname(dirname(dirname(dirname(__FILE__)))) . '/');`
    * After: `define('MODX_BASE_PATH', [ INSERT PATH TO MODx PROJECT ROOT ]);` 
* Once satisfied with edits, update the corresponding files in this repo
* Run `php ./_build/build.transport.php` -- this will output a ZIP transport file in `/core/packages` of your MODx project


## Copyright Information

StaticElController is distributed as GPL (as MODx Revolution is), but the copyright owner
(Culture Foundry) grants all users of StaticElController the ability to modify, distribute
and use StaticElController in MODx development as they see fit, as long as attribution
is given somewhere in the distributed source of all derivative works.
