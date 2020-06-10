<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiResponse;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiResponse\serviceParametersMap\serviceParameterMap;
use AlibabaCloud\Tea\Model;

class serviceParametersMap extends Model
{
    /**
     * @description ServiceParameterMap
     *
     * @var array
     */
    public $serviceParameterMap;
    protected $_name = [
        'serviceParameterMap' => 'ServiceParameterMap',
    ];

    public function validate()
    {
        Model::validateRequired('serviceParameterMap', $this->serviceParameterMap, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceParameterMap) {
            $res['ServiceParameterMap'] = [];
            if (null !== $this->serviceParameterMap && \is_array($this->serviceParameterMap)) {
                $n = 0;
                foreach ($this->serviceParameterMap as $item) {
                    $res['ServiceParameterMap'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serviceParametersMap
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServiceParameterMap'])) {
            if (!empty($map['ServiceParameterMap'])) {
                $model->serviceParameterMap = [];
                $n                          = 0;
                foreach ($map['ServiceParameterMap'] as $item) {
                    $model->serviceParameterMap[$n++] = null !== $item ? serviceParameterMap::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
