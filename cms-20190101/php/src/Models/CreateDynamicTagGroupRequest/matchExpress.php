<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\CreateDynamicTagGroupRequest;

use AlibabaCloud\Tea\Model;

class matchExpress extends Model
{
    /**
     * @description function
     *
     * @var string
     */
    public $tagValueMatchFunction;

    /**
     * @description value
     *
     * @var string
     */
    public $tagValue;
    protected $_name = [
        'tagValueMatchFunction' => 'TagValueMatchFunction',
        'tagValue'              => 'TagValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagValueMatchFunction) {
            $res['TagValueMatchFunction'] = $this->tagValueMatchFunction;
        }
        if (null !== $this->tagValue) {
            $res['TagValue'] = $this->tagValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return matchExpress
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TagValueMatchFunction'])) {
            $model->tagValueMatchFunction = $map['TagValueMatchFunction'];
        }
        if (isset($map['TagValue'])) {
            $model->tagValue = $map['TagValue'];
        }

        return $model;
    }
}
