# wf_filesystem_events
A Joomla System plugin for JCE Filesystem Events

## Download
Click [here to download](https://github.com/widgetfactory/wf_filesystem_events/archive/master.zip), or the Download Zip button on the right.

## Installation
Install using the Joomla Extensions Installer

https://docs.joomla.org/Installing_an_extension

## What it does
This plugin provides a sample of JPlugin event methods for responding to JCE Filesystem Events.

The methods currently available are:

* onWfFileSystemGetRootDir
* onWfFileSystemBeforeDelete
* onWfFileSystemAfterDelete
* onWfFileSystemCreateFolder
* onWfFileSystemBeforeRename
* onWfFileSystemAfterRename
* onWfFileSystemBeforeCopy
* onWfFileSystemAfterCopy
* onWfFileSystemBeforeMove
* onWfFileSystemAfterMove
* onWfFileSystemBeforeUpload
* onWfFileSystemAfterUpload

## How to use it
Once installed, remember to enable the plugin.

This plugin can be used as a blueprint for your own plugin, or you can edit the methods and add code to respond to each event.

## Example onWfFileSystemAfterUpload method

This method would respond to an upload event, and resize the image using Joomla JImage class.

```php
public function onWfFileSystemAfterUpload($path, $state) {
  // upload was a success
  if ($state) {
    jimport('joomla.image.image');
    $image = new JImage($path;
    // resize image to 800 x 600
    $image->resize(800, 600, false)->toFile($path);
  }
}
```
