<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInvocationsResponse\invocations\invocation;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInvocationsResponse\invocations\invocation\invokeInstances\invokeInstance;
use AlibabaCloud\Tea\Model;

class invokeInstances extends Model
{
    /**
     * @var array
     */
    public $invokeInstance;
    protected $_name = [
        'invokeInstance' => 'InvokeInstance',
    ];

    public function validate()
    {
        Model::validateRequired('invokeInstance', $this->invokeInstance, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->invokeInstance) {
            $res['InvokeInstance'] = [];
            if (null !== $this->invokeInstance && \is_array($this->invokeInstance)) {
                $n = 0;
                foreach ($this->invokeInstance as $item) {
                    $res['InvokeInstance'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return invokeInstances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InvokeInstance'])) {
            if (!empty($map['InvokeInstance'])) {
                $model->invokeInstance = [];
                $n                     = 0;
                foreach ($map['InvokeInstance'] as $item) {
                    $model->invokeInstance[$n++] = null !== $item ? invokeInstance::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
