<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiResponse;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiResponse\deployedInfos\deployedInfo;
use AlibabaCloud\Tea\Model;

class deployedInfos extends Model
{
    /**
     * @description DeployedInfo
     *
     * @var array
     */
    public $deployedInfo;
    protected $_name = [
        'deployedInfo' => 'DeployedInfo',
    ];

    public function validate()
    {
        Model::validateRequired('deployedInfo', $this->deployedInfo, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deployedInfo) {
            $res['DeployedInfo'] = [];
            if (null !== $this->deployedInfo && \is_array($this->deployedInfo)) {
                $n = 0;
                foreach ($this->deployedInfo as $item) {
                    $res['DeployedInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deployedInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeployedInfo'])) {
            if (!empty($map['DeployedInfo'])) {
                $model->deployedInfo = [];
                $n                   = 0;
                foreach ($map['DeployedInfo'] as $item) {
                    $model->deployedInfo[$n++] = null !== $item ? deployedInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
