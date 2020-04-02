<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\ExportContainerGroupTemplateResponse\template\spec\containers;

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
        $res              = [];
        $res['Name']      = $this->name;
        $res['SubPath']   = $this->subPath;
        $res['MountPath'] = $this->mountPath;
        $res['ReadOnly']  = $this->readOnly;

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
