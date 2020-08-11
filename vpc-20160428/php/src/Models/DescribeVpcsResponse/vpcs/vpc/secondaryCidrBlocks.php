<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcsResponse\vpcs\vpc;

use AlibabaCloud\Tea\Model;

class secondaryCidrBlocks extends Model
{
    /**
     * @description SecondaryCidrBlock
     *
     * @var array
     */
    public $secondaryCidrBlock;
    protected $_name = [
        'secondaryCidrBlock' => 'SecondaryCidrBlock',
    ];

    public function validate()
    {
        Model::validateRequired('secondaryCidrBlock', $this->secondaryCidrBlock, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->secondaryCidrBlock) {
            $res['SecondaryCidrBlock'] = $this->secondaryCidrBlock;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return secondaryCidrBlocks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecondaryCidrBlock'])) {
            if (!empty($map['SecondaryCidrBlock'])) {
                $model->secondaryCidrBlock = $map['SecondaryCidrBlock'];
            }
        }

        return $model;
    }
}
