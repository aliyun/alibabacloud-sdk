<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcAttributeResponse;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcAttributeResponse\cloudResources\cloudResourceSetType;
use AlibabaCloud\Tea\Model;

class cloudResources extends Model
{
    /**
     * @var array
     */
    public $cloudResourceSetType;
    protected $_name = [
        'cloudResourceSetType' => 'CloudResourceSetType',
    ];

    public function validate()
    {
        Model::validateRequired('cloudResourceSetType', $this->cloudResourceSetType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cloudResourceSetType) {
            $res['CloudResourceSetType'] = [];
            if (null !== $this->cloudResourceSetType && \is_array($this->cloudResourceSetType)) {
                $n = 0;
                foreach ($this->cloudResourceSetType as $item) {
                    $res['CloudResourceSetType'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cloudResources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CloudResourceSetType'])) {
            if (!empty($map['CloudResourceSetType'])) {
                $model->cloudResourceSetType = [];
                $n                           = 0;
                foreach ($map['CloudResourceSetType'] as $item) {
                    $model->cloudResourceSetType[$n++] = null !== $item ? cloudResourceSetType::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
