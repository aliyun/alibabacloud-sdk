<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\CS;

use AlibabaCloud\Tea\Model;

class DescribeClusterUserKubeconfigQuery extends Model
{
    /**
     * @description PrivateIpAddress
     *
     * @var bool
     */
    public $privateIpAddress;
    protected $_name = [
        'privateIpAddress' => 'PrivateIpAddress',
    ];

    public function toMap()
    {
        $res                     = [];
        $res['PrivateIpAddress'] = $this->privateIpAddress;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClusterUserKubeconfigQuery
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }

        return $model;
    }
}
