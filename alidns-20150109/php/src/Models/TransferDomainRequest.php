<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class TransferDomainRequest extends Model
{
    /**
     * @description accessKeyId
     *
     * @var string
     */
    public $accessKeyId;

    /**
     * @description lang
     *
     * @var string
     */
    public $lang;

    /**
     * @description domainNames
     *
     * @var string
     */
    public $domainNames;

    /**
     * @description remark
     *
     * @var string
     */
    public $remark;

    /**
     * @description targetUserId
     *
     * @var int
     */
    public $targetUserId;
    protected $_name = [
        'accessKeyId'  => 'AccessKeyId',
        'lang'         => 'Lang',
        'domainNames'  => 'DomainNames',
        'remark'       => 'Remark',
        'targetUserId' => 'TargetUserId',
    ];

    public function validate()
    {
        Model::validateRequired('domainNames', $this->domainNames, true);
        Model::validateRequired('targetUserId', $this->targetUserId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKeyId) {
            $res['AccessKeyId'] = $this->accessKeyId;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->domainNames) {
            $res['DomainNames'] = $this->domainNames;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->targetUserId) {
            $res['TargetUserId'] = $this->targetUserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TransferDomainRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessKeyId'])) {
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['DomainNames'])) {
            $model->domainNames = $map['DomainNames'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['TargetUserId'])) {
            $model->targetUserId = $map['TargetUserId'];
        }

        return $model;
    }
}
