<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeIpControlsResponse;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeIpControlsResponse\ipControlInfos\ipControlInfo;
use AlibabaCloud\Tea\Model;

class ipControlInfos extends Model
{
    /**
     * @description IpControlInfo
     *
     * @var array
     */
    public $ipControlInfo;
    protected $_name = [
        'ipControlInfo' => 'IpControlInfo',
    ];

    public function validate()
    {
        Model::validateRequired('ipControlInfo', $this->ipControlInfo, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipControlInfo) {
            $res['IpControlInfo'] = [];
            if (null !== $this->ipControlInfo && \is_array($this->ipControlInfo)) {
                $n = 0;
                foreach ($this->ipControlInfo as $item) {
                    $res['IpControlInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipControlInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IpControlInfo'])) {
            if (!empty($map['IpControlInfo'])) {
                $model->ipControlInfo = [];
                $n                    = 0;
                foreach ($map['IpControlInfo'] as $item) {
                    $model->ipControlInfo[$n++] = null !== $item ? ipControlInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
