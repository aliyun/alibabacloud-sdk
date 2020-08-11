<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponse\instances\instance;

use AlibabaCloud\Tea\Model;

class cpuOptions extends Model
{
    /**
     * @var int
     */
    public $coreCount;

    /**
     * @var int
     */
    public $threadsPerCore;

    /**
     * @var string
     */
    public $numa;
    protected $_name = [
        'coreCount'      => 'CoreCount',
        'threadsPerCore' => 'ThreadsPerCore',
        'numa'           => 'Numa',
    ];

    public function validate()
    {
        Model::validateRequired('coreCount', $this->coreCount, true);
        Model::validateRequired('threadsPerCore', $this->threadsPerCore, true);
        Model::validateRequired('numa', $this->numa, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->coreCount) {
            $res['CoreCount'] = $this->coreCount;
        }
        if (null !== $this->threadsPerCore) {
            $res['ThreadsPerCore'] = $this->threadsPerCore;
        }
        if (null !== $this->numa) {
            $res['Numa'] = $this->numa;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cpuOptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CoreCount'])) {
            $model->coreCount = $map['CoreCount'];
        }
        if (isset($map['ThreadsPerCore'])) {
            $model->threadsPerCore = $map['ThreadsPerCore'];
        }
        if (isset($map['Numa'])) {
            $model->numa = $map['Numa'];
        }

        return $model;
    }
}
