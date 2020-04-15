<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\CreateContainerGroupRequest\volume;

use AlibabaCloud\Tea\Model;

class flexVolume extends Model
{
    /**
     * @description flexVolumeDriver
     *
     * @var string
     */
    public $driver;
    /**
     * @description flexVolumeFsType
     *
     * @var string
     */
    public $fsType;
    /**
     * @description flexVolumeOptions
     *
     * @var string
     */
    public $options;
    protected $_name = [
        'driver'  => 'Driver',
        'fsType'  => 'FsType',
        'options' => 'Options',
    ];

    public function toMap()
    {
        $res            = [];
        $res['Driver']  = $this->driver;
        $res['FsType']  = $this->fsType;
        $res['Options'] = $this->options;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flexVolume
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Driver'])) {
            $model->driver = $map['Driver'];
        }
        if (isset($map['FsType'])) {
            $model->fsType = $map['FsType'];
        }
        if (isset($map['Options'])) {
            $model->options = $map['Options'];
        }

        return $model;
    }
}
