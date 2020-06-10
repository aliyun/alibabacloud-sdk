<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApisByAppResponse;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApisByAppResponse\appApiRelationInfos\appApiRelationInfo;
use AlibabaCloud\Tea\Model;

class appApiRelationInfos extends Model
{
    /**
     * @description AppApiRelationInfo
     *
     * @var array
     */
    public $appApiRelationInfo;
    protected $_name = [
        'appApiRelationInfo' => 'AppApiRelationInfo',
    ];

    public function validate()
    {
        Model::validateRequired('appApiRelationInfo', $this->appApiRelationInfo, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appApiRelationInfo) {
            $res['AppApiRelationInfo'] = [];
            if (null !== $this->appApiRelationInfo && \is_array($this->appApiRelationInfo)) {
                $n = 0;
                foreach ($this->appApiRelationInfo as $item) {
                    $res['AppApiRelationInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appApiRelationInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppApiRelationInfo'])) {
            if (!empty($map['AppApiRelationInfo'])) {
                $model->appApiRelationInfo = [];
                $n                         = 0;
                foreach ($map['AppApiRelationInfo'] as $item) {
                    $model->appApiRelationInfo[$n++] = null !== $item ? appApiRelationInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
