<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupNotifyPolicyListResponse;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupNotifyPolicyListResponse\notifyPolicyList\notifyPolicy;
use AlibabaCloud\Tea\Model;

class notifyPolicyList extends Model
{
    /**
     * @description NotifyPolicy
     *
     * @var array
     */
    public $notifyPolicy;
    protected $_name = [
        'notifyPolicy' => 'NotifyPolicy',
    ];

    public function validate()
    {
        Model::validateRequired('notifyPolicy', $this->notifyPolicy, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->notifyPolicy) {
            $res['NotifyPolicy'] = [];
            if (null !== $this->notifyPolicy && \is_array($this->notifyPolicy)) {
                $n = 0;
                foreach ($this->notifyPolicy as $item) {
                    $res['NotifyPolicy'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return notifyPolicyList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NotifyPolicy'])) {
            if (!empty($map['NotifyPolicy'])) {
                $model->notifyPolicy = [];
                $n                   = 0;
                foreach ($map['NotifyPolicy'] as $item) {
                    $model->notifyPolicy[$n++] = null !== $item ? notifyPolicy::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
