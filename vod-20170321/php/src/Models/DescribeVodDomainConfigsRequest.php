<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class DescribeVodDomainConfigsRequest extends Model
{
    /**
     * @description ownerId
     *
     * @var int
     */
    public $ownerId;

    /**
     * @description securityToken
     *
     * @var string
     */
    public $securityToken;

    /**
     * @description domainName
     *
     * @var string
     */
    public $domainName;

    /**
     * @description functionNames
     *
     * @var string
     */
    public $functionNames;
    protected $_name = [
        'ownerId'       => 'OwnerId',
        'securityToken' => 'SecurityToken',
        'domainName'    => 'DomainName',
        'functionNames' => 'FunctionNames',
    ];

    public function validate()
    {
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('functionNames', $this->functionNames, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->functionNames) {
            $res['FunctionNames'] = $this->functionNames;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVodDomainConfigsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['FunctionNames'])) {
            $model->functionNames = $map['FunctionNames'];
        }

        return $model;
    }
}
