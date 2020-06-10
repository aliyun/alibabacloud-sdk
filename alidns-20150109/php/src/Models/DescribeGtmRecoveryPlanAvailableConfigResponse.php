<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmRecoveryPlanAvailableConfigResponse\instances;
use AlibabaCloud\Tea\Model;

class DescribeGtmRecoveryPlanAvailableConfigResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description module.gtmInstances
     *
     * @var instances
     */
    public $instances;
    protected $_name = [
        'requestId' => 'RequestId',
        'instances' => 'Instances',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('instances', $this->instances, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->instances) {
            $res['Instances'] = null !== $this->instances ? $this->instances->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGtmRecoveryPlanAvailableConfigResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Instances'])) {
            $model->instances = instances::fromMap($map['Instances']);
        }

        return $model;
    }
}
