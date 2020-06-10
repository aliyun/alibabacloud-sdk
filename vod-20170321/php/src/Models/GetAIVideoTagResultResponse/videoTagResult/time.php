<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetAIVideoTagResultResponse\videoTagResult;

use AlibabaCloud\Tea\Model;

class time extends Model
{
    /**
     * @description tag
     *
     * @var string
     */
    public $tag;

    /**
     * @description times
     *
     * @var array
     */
    public $times;
    protected $_name = [
        'tag'   => 'Tag',
        'times' => 'Times',
    ];

    public function validate()
    {
        Model::validateRequired('tag', $this->tag, true);
        Model::validateRequired('times', $this->times, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->times) {
            $res['Times'] = [];
            if (null !== $this->times) {
                $res['Times'] = $this->times;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return time
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['Times'])) {
            if (!empty($map['Times'])) {
                $model->times = [];
                $model->times = $map['Times'];
            }
        }

        return $model;
    }
}
