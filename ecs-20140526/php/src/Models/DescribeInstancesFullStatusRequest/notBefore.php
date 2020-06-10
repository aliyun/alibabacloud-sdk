<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesFullStatusRequest;

use AlibabaCloud\Tea\Model;

class notBefore extends Model
{
    /**
     * @description eventPlanExeTimeFromStr
     *
     * @var string
     */
    public $start;

    /**
     * @description eventPlanExeTimeToStr
     *
     * @var string
     */
    public $end;
    protected $_name = [
        'start' => 'Start',
        'end'   => 'End',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->start) {
            $res['Start'] = $this->start;
        }
        if (null !== $this->end) {
            $res['End'] = $this->end;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return notBefore
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }
        if (isset($map['End'])) {
            $model->end = $map['End'];
        }

        return $model;
    }
}
