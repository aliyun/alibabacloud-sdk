<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\RunInstancesRequest;

use AlibabaCloud\Tea\Model;

class cpuOptions extends Model
{
    /**
     * @description cpuOptionsCore
     *
     * @var int
     */
    public $core;

    /**
     * @description cpuOptionsHt
     *
     * @var int
     */
    public $threadsPerCore;

    /**
     * @description cpuOptionsNuma
     *
     * @var string
     */
    public $numa;
    protected $_name = [
        'core'           => 'Core',
        'threadsPerCore' => 'ThreadsPerCore',
        'numa'           => 'Numa',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->core) {
            $res['Core'] = $this->core;
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
        if (isset($map['Core'])) {
            $model->core = $map['Core'];
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
