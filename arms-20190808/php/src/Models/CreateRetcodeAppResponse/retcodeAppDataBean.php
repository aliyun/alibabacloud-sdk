<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\CreateRetcodeAppResponse;

use AlibabaCloud\Tea\Model;

class retcodeAppDataBean extends Model
{
    /**
     * @description id
     *
     * @var int
     */
    public $appId;

    /**
     * @description pid
     *
     * @var string
     */
    public $pid;
    protected $_name = [
        'appId' => 'AppId',
        'pid'   => 'Pid',
    ];

    public function validate()
    {
        Model::validateRequired('appId', $this->appId, true);
        Model::validateRequired('pid', $this->pid, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return retcodeAppDataBean
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }

        return $model;
    }
}
