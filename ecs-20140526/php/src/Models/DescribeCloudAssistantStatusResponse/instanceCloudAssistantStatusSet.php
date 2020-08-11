<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCloudAssistantStatusResponse;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCloudAssistantStatusResponse\instanceCloudAssistantStatusSet\instanceCloudAssistantStatus;
use AlibabaCloud\Tea\Model;

class instanceCloudAssistantStatusSet extends Model
{
    /**
     * @var array
     */
    public $instanceCloudAssistantStatus;
    protected $_name = [
        'instanceCloudAssistantStatus' => 'InstanceCloudAssistantStatus',
    ];

    public function validate()
    {
        Model::validateRequired('instanceCloudAssistantStatus', $this->instanceCloudAssistantStatus, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceCloudAssistantStatus) {
            $res['InstanceCloudAssistantStatus'] = [];
            if (null !== $this->instanceCloudAssistantStatus && \is_array($this->instanceCloudAssistantStatus)) {
                $n = 0;
                foreach ($this->instanceCloudAssistantStatus as $item) {
                    $res['InstanceCloudAssistantStatus'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceCloudAssistantStatusSet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceCloudAssistantStatus'])) {
            if (!empty($map['InstanceCloudAssistantStatus'])) {
                $model->instanceCloudAssistantStatus = [];
                $n                                   = 0;
                foreach ($map['InstanceCloudAssistantStatus'] as $item) {
                    $model->instanceCloudAssistantStatus[$n++] = null !== $item ? instanceCloudAssistantStatus::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
