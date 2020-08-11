<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class DescribeLimitationRequest extends Model
{
    /**
     * @var string
     */
    public $limitation;
    protected $_name = [
        'limitation' => 'Limitation',
    ];

    public function validate()
    {
        Model::validateRequired('limitation', $this->limitation, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->limitation) {
            $res['Limitation'] = $this->limitation;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLimitationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Limitation'])) {
            $model->limitation = $map['Limitation'];
        }

        return $model;
    }
}
