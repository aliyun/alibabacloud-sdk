<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20150901\Models;

use AlibabaCloud\Tea\Model;

class WaitConditionsQuery extends Model
{
    /**
     * @description stackname
     *
     * @var string
     */
    public $stackname;

    /**
     * @description stackid
     *
     * @var string
     */
    public $stackid;

    /**
     * @description resource
     *
     * @var string
     */
    public $resource;

    /**
     * @description expire
     *
     * @var string
     */
    public $expire;

    /**
     * @description signature
     *
     * @var string
     */
    public $signature;
    protected $_name = [
        'stackname' => 'stackname',
        'stackid'   => 'stackid',
        'resource'  => 'resource',
        'expire'    => 'expire',
        'signature' => 'signature',
    ];

    public function validate()
    {
        Model::validateRequired('stackname', $this->stackname, true);
        Model::validateRequired('stackid', $this->stackid, true);
        Model::validateRequired('resource', $this->resource, true);
        Model::validateRequired('expire', $this->expire, true);
        Model::validateRequired('signature', $this->signature, true);
    }

    public function toMap()
    {
        $res              = [];
        $res['stackname'] = $this->stackname;
        $res['stackid']   = $this->stackid;
        $res['resource']  = $this->resource;
        $res['expire']    = $this->expire;
        $res['signature'] = $this->signature;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return WaitConditionsQuery
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['stackname'])) {
            $model->stackname = $map['stackname'];
        }
        if (isset($map['stackid'])) {
            $model->stackid = $map['stackid'];
        }
        if (isset($map['resource'])) {
            $model->resource = $map['resource'];
        }
        if (isset($map['expire'])) {
            $model->expire = $map['expire'];
        }
        if (isset($map['signature'])) {
            $model->signature = $map['signature'];
        }

        return $model;
    }
}
