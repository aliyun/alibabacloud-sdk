<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class UpgradeResourcePackageRequest extends Model
{
    /**
     * @description instanceId
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description effectiveDate
     *
     * @var string
     */
    public $effectiveDate;

    /**
     * @description specification
     *
     * @var string
     */
    public $specification;
    protected $_name = [
        'instanceId'    => 'InstanceId',
        'effectiveDate' => 'EffectiveDate',
        'specification' => 'Specification',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->effectiveDate) {
            $res['EffectiveDate'] = $this->effectiveDate;
        }
        if (null !== $this->specification) {
            $res['Specification'] = $this->specification;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpgradeResourcePackageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['EffectiveDate'])) {
            $model->effectiveDate = $map['EffectiveDate'];
        }
        if (isset($map['Specification'])) {
            $model->specification = $map['Specification'];
        }

        return $model;
    }
}
