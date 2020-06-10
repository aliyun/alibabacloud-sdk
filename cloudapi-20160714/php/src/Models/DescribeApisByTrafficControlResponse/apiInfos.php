<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApisByTrafficControlResponse;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApisByTrafficControlResponse\apiInfos\apiInfo;
use AlibabaCloud\Tea\Model;

class apiInfos extends Model
{
    /**
     * @description ApiInfo
     *
     * @var array
     */
    public $apiInfo;
    protected $_name = [
        'apiInfo' => 'ApiInfo',
    ];

    public function validate()
    {
        Model::validateRequired('apiInfo', $this->apiInfo, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiInfo) {
            $res['ApiInfo'] = [];
            if (null !== $this->apiInfo && \is_array($this->apiInfo)) {
                $n = 0;
                foreach ($this->apiInfo as $item) {
                    $res['ApiInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apiInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiInfo'])) {
            if (!empty($map['ApiInfo'])) {
                $model->apiInfo = [];
                $n              = 0;
                foreach ($map['ApiInfo'] as $item) {
                    $model->apiInfo[$n++] = null !== $item ? apiInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
