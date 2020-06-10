<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class SetWildcardDomainPatternsRequest extends Model
{
    /**
     * @description securityToken
     *
     * @var string
     */
    public $securityToken;

    /**
     * @description accessKeyId
     *
     * @var string
     */
    public $accessKeyId;

    /**
     * @description groupId
     *
     * @var string
     */
    public $groupId;

    /**
     * @description domainName
     *
     * @var string
     */
    public $domainName;

    /**
     * @description wildcardDomainPatternsParam
     *
     * @var string
     */
    public $wildcardDomainPatterns;
    protected $_name = [
        'securityToken'          => 'SecurityToken',
        'accessKeyId'            => 'AccessKeyId',
        'groupId'                => 'GroupId',
        'domainName'             => 'DomainName',
        'wildcardDomainPatterns' => 'WildcardDomainPatterns',
    ];

    public function validate()
    {
        Model::validateRequired('groupId', $this->groupId, true);
        Model::validateRequired('domainName', $this->domainName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->accessKeyId) {
            $res['AccessKeyId'] = $this->accessKeyId;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->wildcardDomainPatterns) {
            $res['WildcardDomainPatterns'] = $this->wildcardDomainPatterns;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetWildcardDomainPatternsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['AccessKeyId'])) {
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['WildcardDomainPatterns'])) {
            $model->wildcardDomainPatterns = $map['WildcardDomainPatterns'];
        }

        return $model;
    }
}
