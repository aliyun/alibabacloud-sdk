<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyPerformanceResponse\performanceKeys;

use AlibabaCloud\Tea\Model;

class performanceKey extends Model
{
    /**
     * @description metricName
     *
     * @var string
     */
    public $key;

    /**
     * @description measurement
     *
     * @var string
     */
    public $valueFormat;
    protected $_name = [
        'key'         => 'Key',
        'valueFormat' => 'ValueFormat',
    ];

    public function validate()
    {
        Model::validateRequired('key', $this->key, true);
        Model::validateRequired('valueFormat', $this->valueFormat, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->valueFormat) {
            $res['ValueFormat'] = $this->valueFormat;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return performanceKey
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['ValueFormat'])) {
            $model->valueFormat = $map['ValueFormat'];
        }

        return $model;
    }
}
