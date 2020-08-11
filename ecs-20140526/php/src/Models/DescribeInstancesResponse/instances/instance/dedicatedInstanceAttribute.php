<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponse\instances\instance;

use AlibabaCloud\Tea\Model;

class dedicatedInstanceAttribute extends Model
{
    /**
     * @var string
     */
    public $tenancy;

    /**
     * @var string
     */
    public $affinity;
    protected $_name = [
        'tenancy'  => 'Tenancy',
        'affinity' => 'Affinity',
    ];

    public function validate()
    {
        Model::validateRequired('tenancy', $this->tenancy, true);
        Model::validateRequired('affinity', $this->affinity, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tenancy) {
            $res['Tenancy'] = $this->tenancy;
        }
        if (null !== $this->affinity) {
            $res['Affinity'] = $this->affinity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dedicatedInstanceAttribute
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Tenancy'])) {
            $model->tenancy = $map['Tenancy'];
        }
        if (isset($map['Affinity'])) {
            $model->affinity = $map['Affinity'];
        }

        return $model;
    }
}
