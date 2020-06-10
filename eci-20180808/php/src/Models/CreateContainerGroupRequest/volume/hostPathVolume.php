<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\volume;

use AlibabaCloud\Tea\Model;

class hostPathVolume extends Model
{
    /**
     * @description hostPathVolumeType
     *
     * @var string
     */
    public $type;

    /**
     * @description hostPathVolumePath
     *
     * @var string
     */
    public $path;
    protected $_name = [
        'type' => 'Type',
        'path' => 'Path',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hostPathVolume
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        return $model;
    }
}
