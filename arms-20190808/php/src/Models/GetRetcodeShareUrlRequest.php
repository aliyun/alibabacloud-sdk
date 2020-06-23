<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class GetRetcodeShareUrlRequest extends Model
{
    /**
     * @description pid
     *
     * @var string
     */
    public $pid;
    protected $_name = [
        'pid' => 'Pid',
    ];

    public function validate()
    {
        Model::validateRequired('pid', $this->pid, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRetcodeShareUrlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }

        return $model;
    }
}
