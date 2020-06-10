<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeVpcsResponse\vpcs\vpc;

use AlibabaCloud\Tea\Model;

class VSwitchIds extends Model
{
    /**
     * @description VSwitchId
     *
     * @var array
     */
    public $VSwitchId;
    protected $_name = [
        'VSwitchId' => 'VSwitchId',
    ];

    public function validate()
    {
        Model::validateRequired('VSwitchId', $this->VSwitchId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->VSwitchId) {
            $res['VSwitchId'] = [];
            if (null !== $this->VSwitchId) {
                $res['VSwitchId'] = $this->VSwitchId;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VSwitchIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VSwitchId'])) {
            if (!empty($map['VSwitchId'])) {
                $model->VSwitchId = [];
                $model->VSwitchId = $map['VSwitchId'];
            }
        }

        return $model;
    }
}
