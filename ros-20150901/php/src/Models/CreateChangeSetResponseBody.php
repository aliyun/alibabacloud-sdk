<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20150901\Models;

use AlibabaCloud\Tea\Model;

class CreateChangeSetResponseBody extends Model
{
    /**
     * @description Dummy
     *
     * @var string
     */
    public $dummy;
    protected $_name = [
        'dummy' => 'Dummy',
    ];

    public function validate()
    {
        Model::validateRequired('dummy', $this->dummy, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dummy) {
            $res['Dummy'] = $this->dummy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateChangeSetResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Dummy'])) {
            $model->dummy = $map['Dummy'];
        }

        return $model;
    }
}
