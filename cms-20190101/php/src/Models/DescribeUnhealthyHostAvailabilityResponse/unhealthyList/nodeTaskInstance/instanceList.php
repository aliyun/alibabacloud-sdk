<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeUnhealthyHostAvailabilityResponse\unhealthyList\nodeTaskInstance;

use AlibabaCloud\Tea\Model;

class instanceList extends Model
{
    /**
     * @description String
     *
     * @var array
     */
    public $string;
    protected $_name = [
        'string' => 'String',
    ];

    public function validate()
    {
        Model::validateRequired('string', $this->string, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->string) {
            $res['String'] = [];
            if (null !== $this->string) {
                $res['String'] = $this->string;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['String'])) {
            if (!empty($map['String'])) {
                $model->string = [];
                $model->string = $map['String'];
            }
        }

        return $model;
    }
}
