<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeZonesResponse\zones\zone\availableResources\resourcesInfo;

use AlibabaCloud\Tea\Model;

class instanceGenerations extends Model
{
    /**
     * @description supportedInstanceGeneration
     *
     * @var array
     */
    public $supportedInstanceGeneration;
    protected $_name = [
        'supportedInstanceGeneration' => 'supportedInstanceGeneration',
    ];

    public function validate()
    {
        Model::validateRequired('supportedInstanceGeneration', $this->supportedInstanceGeneration, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportedInstanceGeneration) {
            $res['supportedInstanceGeneration'] = [];
            if (null !== $this->supportedInstanceGeneration) {
                $res['supportedInstanceGeneration'] = $this->supportedInstanceGeneration;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceGenerations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['supportedInstanceGeneration'])) {
            if (!empty($map['supportedInstanceGeneration'])) {
                $model->supportedInstanceGeneration = [];
                $model->supportedInstanceGeneration = $map['supportedInstanceGeneration'];
            }
        }

        return $model;
    }
}
