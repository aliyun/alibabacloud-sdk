<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeTagValueListResponse;

use AlibabaCloud\Tea\Model;

class tagValues extends Model
{
    /**
     * @description TagValue
     *
     * @var array
     */
    public $tagValue;
    protected $_name = [
        'tagValue' => 'TagValue',
    ];

    public function validate()
    {
        Model::validateRequired('tagValue', $this->tagValue, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagValue) {
            $res['TagValue'] = [];
            if (null !== $this->tagValue) {
                $res['TagValue'] = $this->tagValue;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tagValues
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TagValue'])) {
            if (!empty($map['TagValue'])) {
                $model->tagValue = [];
                $model->tagValue = $map['TagValue'];
            }
        }

        return $model;
    }
}
