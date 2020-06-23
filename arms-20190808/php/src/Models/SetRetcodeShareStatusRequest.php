<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class SetRetcodeShareStatusRequest extends Model
{
    /**
     * @description pid
     *
     * @var string
     */
    public $pid;

    /**
     * @description status
     *
     * @var bool
     */
    public $status;
    protected $_name = [
        'pid'    => 'Pid',
        'status' => 'Status',
    ];

    public function validate()
    {
        Model::validateRequired('pid', $this->pid, true);
        Model::validateRequired('status', $this->status, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetRetcodeShareStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
