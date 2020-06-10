<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHostAvailabilityListResponse\taskList\nodeTaskConfig;

use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @description Instance
     *
     * @var array
     */
    public $instance;
    protected $_name = [
        'instance' => 'Instance',
    ];

    public function validate()
    {
        Model::validateRequired('instance', $this->instance, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instance) {
            $res['Instance'] = [];
            if (null !== $this->instance) {
                $res['Instance'] = $this->instance;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Instance'])) {
            if (!empty($map['Instance'])) {
                $model->instance = [];
                $model->instance = $map['Instance'];
            }
        }

        return $model;
    }
}
