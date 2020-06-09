<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class TransferDomainRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'lang' => 'Lang',
        'domainNames' => 'DomainNames',
        'remark' => 'Remark',
        'targetUserId' => 'TargetUserId',
    ];
    public function validate() {
        Model::validateRequired('domainNames', $this->domainNames, true);
        Model::validateRequired('targetUserId', $this->targetUserId, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['Lang'] = $this->lang;
        $res['DomainNames'] = $this->domainNames;
        $res['Remark'] = $this->remark;
        $res['TargetUserId'] = $this->targetUserId;
        return $res;
    }
    /**
     * @param array $map
     * @return TransferDomainRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AccessKeyId'])){
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if(isset($map['Lang'])){
            $model->lang = $map['Lang'];
        }
        if(isset($map['DomainNames'])){
            $model->domainNames = $map['DomainNames'];
        }
        if(isset($map['Remark'])){
            $model->remark = $map['Remark'];
        }
        if(isset($map['TargetUserId'])){
            $model->targetUserId = $map['TargetUserId'];
        }
        return $model;
    }
    /**
     * @description accessKeyId
     * @var string
     */
    public $accessKeyId;

    /**
     * @description lang
     * @var string
     */
    public $lang;

    /**
     * @description domainNames
     * @var string
     */
    public $domainNames;

    /**
     * @description remark
     * @var string
     */
    public $remark;

    /**
     * @description targetUserId
     * @var integer
     */
    public $targetUserId;

}
