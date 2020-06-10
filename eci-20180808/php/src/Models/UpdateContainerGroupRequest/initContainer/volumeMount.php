<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupRequest\initContainer;

use AlibabaCloud\Tea\Model;

class volumeMount extends Model
{
    /**
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description mountPath
     *
     * @var string
     */
    public $mountPath;

    /**
     * @description subPath
     *
     * @var string
     */
    public $subPath;

    /**
     * @description readOnly
     *
     * @var bool
     */
    public $readOnly;
    protected $_name = [
        'name'      => 'Name',
        'mountPath' => 'MountPath',
        'subPath'   => 'SubPath',
        'readOnly'  => 'ReadOnly',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->mountPath) {
            $res['MountPath'] = $this->mountPath;
        }
        if (null !== $this->subPath) {
            $res['SubPath'] = $this->subPath;
        }
        if (null !== $this->readOnly) {
            $res['ReadOnly'] = $this->readOnly;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return volumeMount
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['MountPath'])) {
            $model->mountPath = $map['MountPath'];
        }
        if (isset($map['SubPath'])) {
            $model->subPath = $map['SubPath'];
        }
        if (isset($map['ReadOnly'])) {
            $model->readOnly = $map['ReadOnly'];
        }

        return $model;
    }
}
