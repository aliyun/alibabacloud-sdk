<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponse\serviceMesh\spec\meshConfig;

use AlibabaCloud\Tea\Model;

class pilot extends Model
{
    /**
     * @var float
     */
    public $traceSampling;
    protected $_name = [
        'traceSampling' => 'TraceSampling',
    ];

    public function validate()
    {
        Model::validateRequired('traceSampling', $this->traceSampling, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->traceSampling) {
            $res['TraceSampling'] = $this->traceSampling;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pilot
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TraceSampling'])) {
            $model->traceSampling = $map['TraceSampling'];
        }

        return $model;
    }
}
