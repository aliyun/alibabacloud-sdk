<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\CheckServiceLinkedRoleForDeletingResponse;

use AlibabaCloud\Tea\Model;

class roleUsages extends Model
{
    /**
     * @description region
     *
     * @var string
     */
    public $region;

    /**
     * @description resources
     *
     * @var array
     */
    public $resources;
    protected $_name = [
        'region'    => 'Region',
        'resources' => 'Resources',
    ];

    public function validate()
    {
        Model::validateRequired('region', $this->region, true);
        Model::validateRequired('resources', $this->resources, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->resources) {
            $res['Resources'] = [];
            if (null !== $this->resources) {
                $res['Resources'] = $this->resources;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return roleUsages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Resources'])) {
            if (!empty($map['Resources'])) {
                $model->resources = [];
                $model->resources = $map['Resources'];
            }
        }

        return $model;
    }
}
