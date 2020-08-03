<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\ListStackOperationRisksResponse\riskResources;
use AlibabaCloud\Tea\Model;

class ListStackOperationRisksResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var array
     */
    public $riskResources;
    protected $_name = [
        'requestId'     => 'RequestId',
        'riskResources' => 'RiskResources',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('riskResources', $this->riskResources, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->riskResources) {
            $res['RiskResources'] = [];
            if (null !== $this->riskResources && \is_array($this->riskResources)) {
                $n = 0;
                foreach ($this->riskResources as $item) {
                    $res['RiskResources'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListStackOperationRisksResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RiskResources'])) {
            if (!empty($map['RiskResources'])) {
                $model->riskResources = [];
                $n                    = 0;
                foreach ($map['RiskResources'] as $item) {
                    $model->riskResources[$n++] = null !== $item ? riskResources::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
