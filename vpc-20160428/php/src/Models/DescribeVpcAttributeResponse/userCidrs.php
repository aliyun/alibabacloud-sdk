<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcAttributeResponse;

use AlibabaCloud\Tea\Model;

class userCidrs extends Model
{
    /**
     * @var array
     */
    public $userCidr;
    protected $_name = [
        'userCidr' => 'UserCidr',
    ];

    public function validate()
    {
        Model::validateRequired('userCidr', $this->userCidr, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userCidr) {
            $res['UserCidr'] = $this->userCidr;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userCidrs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserCidr'])) {
            if (!empty($map['UserCidr'])) {
                $model->userCidr = $map['UserCidr'];
            }
        }

        return $model;
    }
}
