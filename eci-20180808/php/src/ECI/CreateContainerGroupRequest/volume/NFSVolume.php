<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\CreateContainerGroupRequest\volume;

use AlibabaCloud\Tea\Model;

class NFSVolume extends Model
{
    /**
     * @description nfsVolumeServer
     *
     * @var string
     */
    public $server;

    /**
     * @description nfsVolumePath
     *
     * @var string
     */
    public $path;

    /**
     * @description nfsVolumeReadOnly
     *
     * @var bool
     */
    public $readOnly;
    protected $_name = [
        'server'   => 'Server',
        'path'     => 'Path',
        'readOnly' => 'ReadOnly',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res             = [];
        $res['Server']   = $this->server;
        $res['Path']     = $this->path;
        $res['ReadOnly'] = $this->readOnly;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return NFSVolume
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Server'])) {
            $model->server = $map['Server'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['ReadOnly'])) {
            $model->readOnly = $map['ReadOnly'];
        }

        return $model;
    }
}
