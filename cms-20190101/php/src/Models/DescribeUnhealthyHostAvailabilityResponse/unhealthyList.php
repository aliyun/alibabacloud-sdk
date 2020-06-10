<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeUnhealthyHostAvailabilityResponse;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeUnhealthyHostAvailabilityResponse\unhealthyList\nodeTaskInstance;
use AlibabaCloud\Tea\Model;

class unhealthyList extends Model
{
    /**
     * @description NodeTaskInstance
     *
     * @var array
     */
    public $nodeTaskInstance;
    protected $_name = [
        'nodeTaskInstance' => 'NodeTaskInstance',
    ];

    public function validate()
    {
        Model::validateRequired('nodeTaskInstance', $this->nodeTaskInstance, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeTaskInstance) {
            $res['NodeTaskInstance'] = [];
            if (null !== $this->nodeTaskInstance && \is_array($this->nodeTaskInstance)) {
                $n = 0;
                foreach ($this->nodeTaskInstance as $item) {
                    $res['NodeTaskInstance'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return unhealthyList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeTaskInstance'])) {
            if (!empty($map['NodeTaskInstance'])) {
                $model->nodeTaskInstance = [];
                $n                       = 0;
                foreach ($map['NodeTaskInstance'] as $item) {
                    $model->nodeTaskInstance[$n++] = null !== $item ? nodeTaskInstance::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
