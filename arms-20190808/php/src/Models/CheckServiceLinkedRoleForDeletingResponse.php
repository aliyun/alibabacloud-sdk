<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\CheckServiceLinkedRoleForDeletingResponse\roleUsages;
use AlibabaCloud\Tea\Model;

class CheckServiceLinkedRoleForDeletingResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description deletable
     *
     * @var bool
     */
    public $deletable;

    /**
     * @description roleUsages
     *
     * @var array
     */
    public $roleUsages;
    protected $_name = [
        'requestId'  => 'RequestId',
        'deletable'  => 'Deletable',
        'roleUsages' => 'RoleUsages',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('deletable', $this->deletable, true);
        Model::validateRequired('roleUsages', $this->roleUsages, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->deletable) {
            $res['Deletable'] = $this->deletable;
        }
        if (null !== $this->roleUsages) {
            $res['RoleUsages'] = [];
            if (null !== $this->roleUsages && \is_array($this->roleUsages)) {
                $n = 0;
                foreach ($this->roleUsages as $item) {
                    $res['RoleUsages'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckServiceLinkedRoleForDeletingResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Deletable'])) {
            $model->deletable = $map['Deletable'];
        }
        if (isset($map['RoleUsages'])) {
            if (!empty($map['RoleUsages'])) {
                $model->roleUsages = [];
                $n                 = 0;
                foreach ($map['RoleUsages'] as $item) {
                    $model->roleUsages[$n++] = null !== $item ? roleUsages::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
