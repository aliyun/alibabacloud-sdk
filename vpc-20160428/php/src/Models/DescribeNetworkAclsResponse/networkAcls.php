<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNetworkAclsResponse;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNetworkAclsResponse\networkAcls\networkAcl;
use AlibabaCloud\Tea\Model;

class networkAcls extends Model
{
    /**
     * @var array
     */
    public $networkAcl;
    protected $_name = [
        'networkAcl' => 'NetworkAcl',
    ];

    public function validate()
    {
        Model::validateRequired('networkAcl', $this->networkAcl, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkAcl) {
            $res['NetworkAcl'] = [];
            if (null !== $this->networkAcl && \is_array($this->networkAcl)) {
                $n = 0;
                foreach ($this->networkAcl as $item) {
                    $res['NetworkAcl'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networkAcls
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetworkAcl'])) {
            if (!empty($map['NetworkAcl'])) {
                $model->networkAcl = [];
                $n                 = 0;
                foreach ($map['NetworkAcl'] as $item) {
                    $model->networkAcl[$n++] = null !== $item ? networkAcl::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
