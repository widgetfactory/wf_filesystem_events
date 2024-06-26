<?php

/**
 * @package     JCE
 * @subpackage  System.wf_filesystem_events
 *
 * @copyright   Copyright (C) 2016 - 2024 Ryan Demmer. All rights reserved.
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later
 */
defined('JPATH_BASE') or die;

use Joomla\CMS\Plugin\CMSPlugin;

/**
 * @package     JCE
 * @subpackage  System.wf_filesystem_events
 * @since       2.6
 */
class PlgSystemWf_filesystem_events extends CMSPlugin
{
    /**
     * onWfFileSystemBeforeGetPathVariables
     * @param   string  $path_replacement  Key / value pairs of path replacement values, eg: 'usertype' : 'Author'
     * @return  void
     */
    public function onWfFileSystemBeforeGetPathVariables(&$path_replacement)
    {
    }
	
    /**
     * onWfFileSystemGetPathVariables
     * @param   string  $variables  Key / value pair of path variables
     * @return  void
     */
    public function onWfFileSystemGetPathVariables(&$variables)
    {
    }

	/**
     * onWfFileSystemBeforeGetRootDir
     * @param   string  $path  The relative root directory path, eg: "images".
     * @return  void
     */
    public function onWfFileSystemBeforeGetRootDir(&$path)
    {
    }

	/**
     * onWfFileSystemGetRootDir
     * @param   string  $path  The relative root directory path, eg: "images".
     * @return  void
     */
    public function onWfFileSystemGetRootDir(&$path)
    {
    }

    /**
     * onWfFileSystemBeforeDelete
     * The absolute file/folder path before the delete operation.
     * @param   string  $path  The absolute file/folder path.
     * @return  void
     */
    public function onWfFileSystemBeforeDelete(&$path)
    {
    }

    /**
     * onWfFileSystemAfterDelete
     * The absolute file/folder path after the delete operation.
     * @param   object  $result  The result object containing path and state.
     * @return  void
     */
    public function onWfFileSystemAfterDelete(&$path, $state)
    {
    }

    /**
     * onWfFileSystemCreateFolder
     * The absolute folder path after the create folder operation.
     * @param   string  $path  The created folder absolute path.
	 * @param   boolean $state The action state, eg: true | false.
     * @return  void
     */
    public function onWfFileSystemCreateFolder($path, $state)
    {
    }

    /**
     * onWfFileSystemBeforeRename
     * The file paths before the rename operation.
     * @param   string  $source  The absolute path of the source file.
     * @param   string  $destination The name of the destination file.
     * @return  void
     */
    public function onWfFileSystemBeforeRename(&$source, &$destination)
    {
    }

    /**
     * onWfFileSystemAfterDelete
     * The absolute file/folder path after the delete operation.
     * @param   object  $result  The result object containing path and state.
     * @return  void
     */
    public function onWfFileSystemAfterRename(&$result)
    {
    }

    /**
     * onWfFileSystemBeforeCopy
     * The file paths before the copy operation.
     * @param   string  $source  The absolute path of the source file.
     * @param   string  $destination The absolute path of the destination file.
     * @return  void
     */
    public function onWfFileSystemBeforeCopy(&$source, &$destination)
    {
    }

    /**
     * onWfFileSystemAfterDelete
     * The absolute file/folder path after the delete operation.
     * @param   object  $result  The result object containing path and state.
     * @return  void
     */
    public function onWfFileSystemAfterCopy(&$result)
    {
    }

    /**
     * onWfFileSystemBeforeMove
     * The file paths before the move operation.
     * @param   string  $source  The absolute path of the source file.
     * @param   string  $destination The absolute path of the destination file.
     * @return  void
     */
    public function onWfFileSystemBeforeMove(&$source, &$destination)
    {
    }

    /**
     * onWfFileSystemAfterMove
     * The absolute file path after the move operation.
     * @param   object  $result  The result object containing path and state.
     * @return  void
     */
    public function onWfFileSystemAfterMove(&$result)
    {
    }

    /**
     * onWfFileSystemBeforeUpload
     * The file paths before the upload operation.
     * @param   string  $source  The absolute path of the upload temp file.
     * @param   string  $destination The absolute destination path of the uploaded file.
     * @return  void
     */
    public function onWfFileSystemBeforeUpload(&$source, &$destination)
    {
    }

    /**
     * onWfFileSystemAfterUpload
     * The absolute file path after the upload operation.
     * @param   object  $result  The result object containing path and state.
     * @return  void
     */
    public function onWfFileSystemAfterUpload(&$result)
    {
    }

    /**
     * onWfFileSystemBeforeWrite
     * The absolute file path before the write operation.
     * @param   string  $path  The absolute file path.
     * @param   boolean  $content  The content to be written to the file.
     * @return  void
     */
    public function onWfFileSystemBeforeWrite(&$path, &$content)
    {
    }

    /**
     * onWfFileSystemAfterWrite
     * The absolute file path after the write operation.
     * @param   string  $path  The absolute file path.
     * @param   boolean $state  The result state of the operation.
     * @return  void
     */
    public function onWfFileSystemAfterWrite(&$path, $state)
    {
    }
}
