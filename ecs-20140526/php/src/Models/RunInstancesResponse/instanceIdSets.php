<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\RunInstancesResponse;

use AlibabaCloud\Tea\Model;

class instanceIdSets extends Model
{
    /**
     * @description InstanceIdSet
     *
     * @var array
     */
    public $instanceIdSet;
    protected $_name = [
        'instanceIdSet' => 'InstanceIdSet',
    ];

    public function validate()
    {
        Model::validateRequired('instanceIdSet', $this->instanceIdSet, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceIdSet) {
            $res['InstanceIdSet'] = [];
            if (null !== $this->instanceIdSet) {
                $res['InstanceIdSet'] = $this->instanceIdSet;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceIdSets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceIdSet'])) {
            if (!empty($map['InstanceIdSet'])) {
                $model->instanceIdSet = [];
                $model->instanceIdSet = $map['InstanceIdSet'];
            }
        }

        return $model;
    }
}
