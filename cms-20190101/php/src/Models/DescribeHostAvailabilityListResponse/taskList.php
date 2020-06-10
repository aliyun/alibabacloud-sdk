<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHostAvailabilityListResponse;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHostAvailabilityListResponse\taskList\nodeTaskConfig;
use AlibabaCloud\Tea\Model;

class taskList extends Model
{
    /**
     * @description NodeTaskConfig
     *
     * @var array
     */
    public $nodeTaskConfig;
    protected $_name = [
        'nodeTaskConfig' => 'NodeTaskConfig',
    ];

    public function validate()
    {
        Model::validateRequired('nodeTaskConfig', $this->nodeTaskConfig, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeTaskConfig) {
            $res['NodeTaskConfig'] = [];
            if (null !== $this->nodeTaskConfig && \is_array($this->nodeTaskConfig)) {
                $n = 0;
                foreach ($this->nodeTaskConfig as $item) {
                    $res['NodeTaskConfig'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeTaskConfig'])) {
            if (!empty($map['NodeTaskConfig'])) {
                $model->nodeTaskConfig = [];
                $n                     = 0;
                foreach ($map['NodeTaskConfig'] as $item) {
                    $model->nodeTaskConfig[$n++] = null !== $item ? nodeTaskConfig::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
