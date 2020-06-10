<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\ExportContainerGroupTemplateResponse\template\spec\initContainers;

use AlibabaCloud\Tea\Model;

class volumeMounts extends Model
{
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
    protected $_name = [
        'name'      => 'Name',
        'subPath'   => 'SubPath',
        'mountPath' => 'MountPath',
        'readOnly'  => 'ReadOnly',
    ];

    public function validate()
    {
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('subPath', $this->subPath, true);
        Model::validateRequired('mountPath', $this->mountPath, true);
        Model::validateRequired('readOnly', $this->readOnly, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->subPath) {
            $res['SubPath'] = $this->subPath;
        }
        if (null !== $this->mountPath) {
            $res['MountPath'] = $this->mountPath;
        }
        if (null !== $this->readOnly) {
            $res['ReadOnly'] = $this->readOnly;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return volumeMounts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SubPath'])) {
            $model->subPath = $map['SubPath'];
        }
        if (isset($map['MountPath'])) {
            $model->mountPath = $map['MountPath'];
        }
        if (isset($map['ReadOnly'])) {
            $model->readOnly = $map['ReadOnly'];
        }

        return $model;
    }
}
