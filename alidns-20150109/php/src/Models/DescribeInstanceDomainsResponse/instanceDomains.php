<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeInstanceDomainsResponse;

use AlibabaCloud\Tea\Model;

class instanceDomains extends Model
{
    /**
     * @description domainName
     *
     * @var string
     */
    public $domainName;

    /**
     * @description createTime
     *
     * @var string
     */
    public $createTime;

    /**
     * @description createTimestamp
     *
     * @var int
     */
    public $createTimestamp;
    protected $_name = [
        'domainName'      => 'DomainName',
        'createTime'      => 'CreateTime',
        'createTimestamp' => 'CreateTimestamp',
    ];

    public function validate()
    {
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('createTimestamp', $this->createTimestamp, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceDomains
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }

        return $model;
    }
}
