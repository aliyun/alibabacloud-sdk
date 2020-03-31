<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\CreateContainerGroupRequest\volume;

use AlibabaCloud\Tea\Model;

class flexVolume extends Model
{
    public $driver;
    public $fsType;
    public $options;
    protected $_name = [
        'driver'  => 'Driver',
        'fsType'  => 'FsType',
        'options' => 'Options',
    ];
    protected $_description = [
        'driver'  => 'flexVolumeDriver',
        'fsType'  => 'flexVolumeFsType',
        'options' => 'flexVolumeOptions',
    ];
}
