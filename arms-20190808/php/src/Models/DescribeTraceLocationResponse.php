<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeTraceLocationResponse\regionConfigs;
use AlibabaCloud\Tea\Model;

class DescribeTraceLocationResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data
     *
     * @var array
     */
    public $regionConfigs;
    protected $_name = [
        'requestId'     => 'RequestId',
        'regionConfigs' => 'RegionConfigs',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('regionConfigs', $this->regionConfigs, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->regionConfigs) {
            $res['RegionConfigs'] = [];
            if (null !== $this->regionConfigs && \is_array($this->regionConfigs)) {
                $n = 0;
                foreach ($this->regionConfigs as $item) {
                    $res['RegionConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTraceLocationResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RegionConfigs'])) {
            if (!empty($map['RegionConfigs'])) {
                $model->regionConfigs = [];
                $n                    = 0;
                foreach ($map['RegionConfigs'] as $item) {
                    $model->regionConfigs[$n++] = null !== $item ? regionConfigs::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
