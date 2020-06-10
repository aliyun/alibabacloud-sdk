<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\container;

use AlibabaCloud\Tea\Model;

class volumeMount extends Model
{
    /**
     * @description mountPath
     *
     * @var string
     */
    public $mountPath;

    /**
     * @description readOnly
     *
     * @var bool
     */
    public $readOnly;

    /**
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description subPath
     *
     * @var string
     */
    public $subPath;
    protected $_name = [
        'mountPath' => 'MountPath',
        'readOnly'  => 'ReadOnly',
        'name'      => 'Name',
        'subPath'   => 'SubPath',
    ];

    public function validate()
    {
        Model::validateRequired('mountPath', $this->mountPath, true);
        Model::validateRequired('readOnly', $this->readOnly, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mountPath) {
            $res['MountPath'] = $this->mountPath;
        }
        if (null !== $this->readOnly) {
            $res['ReadOnly'] = $this->readOnly;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->subPath) {
            $res['SubPath'] = $this->subPath;
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
        if (isset($map['MountPath'])) {
            $model->mountPath = $map['MountPath'];
        }
        if (isset($map['ReadOnly'])) {
            $model->readOnly = $map['ReadOnly'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SubPath'])) {
            $model->subPath = $map['SubPath'];
        }

        return $model;
    }
}
