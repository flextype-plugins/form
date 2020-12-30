<?php

declare(strict_types=1);

/**
 * Flextype (https://flextype.org)
 * Founded by Sergey Romanenko and maintained by Flextype Community.
 */

namespace Flextype\Plugin\Form\Models;

use Flextype\Component\Filesystem\Filesystem;
use function count;
use function rename;

class Fieldsets
{
    /**
     * Constructor
     *
     * @access public
     */
    public function __construct()
    {
        if (! Filesystem::has($this->getDirLocation())) {
            Filesystem::createDir($this->getDirLocation());
        }

        if (Filesystem::has($this->getFileLocation('default'))) {
            return;
        }

        Filesystem::copy(PATH['project'] . '/plugins/form/fieldsets/samples/default/default.yaml', $this->getFileLocation('default'));
    }

    /**
     * Fetch single fieldset
     *
     * @param string $id Fieldset id
     *
     * @return array|false The entry contents or false on failure.
     *
     * @access public
     */
    public function fetchSingle(string $id)
    {
        $fieldset_file = $this->getFileLocation($id);

        if (Filesystem::has($fieldset_file)) {
            if ($fieldset_body = Filesystem::read($fieldset_file)) {
                if ($fieldset_decoded = flextype('serializers')->yaml()->decode($fieldset_body)) {
                    return $fieldset_decoded;
                }

                return false;
            }

            return false;
        }

        return false;
    }

    /**
     * Fetch all fieldsets
     *
     * @return array
     *
     * @access public
     */
    public function fetchCollection() : array
    {
        // Init Fieldsets array
        $fieldsets = [];

        // Get fieldsets files
        $_fieldsets = Filesystem::listContents($this->getDirLocation());

        // If there is any fieldsets file then go...
        if (count($_fieldsets) > 0) {
            foreach ($_fieldsets as $fieldset) {
                if ($fieldset['type'] !== 'file' || $fieldset['extension'] !== 'yaml') {
                    continue;
                }

                $fieldset_content                 = flextype('serializers')->yaml()->decode(Filesystem::read($fieldset['path']));
                $fieldsets[$fieldset['basename']] = $fieldset_content['title'];
            }
        }

        // return fieldsets array
        return $fieldsets;
    }

    /**
     * Rename fieldset
     *
     * @param string $id     Fieldset id
     * @param string $new_id New fieldset id
     *
     * @return bool True on success, false on failure.
     *
     * @access public
     */
    public function rename(string $id, string $new_id) : bool
    {
        if (! Filesystem::has($this->getFileLocation($new_id))) {
            return rename($this->getFileLocation($id), $this->getFileLocation($new_id));
        }

        return false;
    }

    /**
     * Update fieldset
     *
     * @param string $id   Fieldset id
     * @param array  $data Fieldset data to save
     *
     * @return bool True on success, false on failure.
     *
     * @access public
     */
    public function update(string $id, array $data) : bool
    {
        $fieldset_file = $this->getFileLocation($id);

        if (Filesystem::has($fieldset_file)) {
            return Filesystem::write($fieldset_file, flextype('serializers')->yaml()->encode($data));
        }

        return false;
    }

    /**
     * Create fieldset
     *
     * @param string $id   Fieldset id
     * @param array  $data Fieldset data to save
     *
     * @return bool True on success, false on failure.
     *
     * @access public
     */
    public function create(string $id, array $data) : bool
    {
        $fieldset_file = $this->getFileLocation($id);

        if (! Filesystem::has($fieldset_file)) {
            return Filesystem::write($fieldset_file, flextype('serializers')->yaml()->encode($data));
        }

        return false;
    }

    /**
     * Delete fieldset
     *
     * @param string $id Fieldset id
     *
     * @return bool True on success, false on failure.
     *
     * @access public
     */
    public function delete(string $id) : bool
    {
        return Filesystem::delete($this->getFileLocation($id));
    }

    /**
     * Copy fieldset
     *
     * @param string $id     Fieldset id
     * @param string $new_id New fieldset id
     *
     * @return bool True on success, false on failure.
     *
     * @access public
     */
    public function copy(string $id, string $new_id) : bool
    {
        return Filesystem::copy($this->getFileLocation($id), $this->getFileLocation($new_id), false);
    }

    /**
     * Check whether fieldset exists.
     *
     * @param string $id Fieldset id
     *
     * @return bool True on success, false on failure.
     *
     * @access public
     */
    public function has(string $id) : bool
    {
        return Filesystem::has($this->getFileLocation($id));
    }

    /**
     * Helper method getDirLocation
     *
     * @access private
     */
    public function getDirLocation() : string
    {
        return PATH['project'] . '/fieldsets/';
    }

    /**
     * Helper method getFileLocation
     *
     * @param string $id Fieldsets id
     *
     * @access private
     */
    public function getFileLocation(string $id) : string
    {
        return PATH['project'] . '/fieldsets/' . $id . '.yaml';
    }
}
