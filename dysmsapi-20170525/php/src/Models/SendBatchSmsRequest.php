<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class SendBatchSmsRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'phoneNumberJson' => 'PhoneNumberJson',
        'signNameJson' => 'SignNameJson',
        'templateCode' => 'TemplateCode',
        'templateParamJson' => 'TemplateParamJson',
        'smsUpExtendCodeJson' => 'SmsUpExtendCodeJson',
    ];
    public function validate() {
        Model::validateRequired('phoneNumberJson', $this->phoneNumberJson, true);
        Model::validateRequired('signNameJson', $this->signNameJson, true);
        Model::validateRequired('templateCode', $this->templateCode, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['PhoneNumberJson'] = $this->phoneNumberJson;
        $res['SignNameJson'] = $this->signNameJson;
        $res['TemplateCode'] = $this->templateCode;
        $res['TemplateParamJson'] = $this->templateParamJson;
        $res['SmsUpExtendCodeJson'] = $this->smsUpExtendCodeJson;
        return $res;
    }
    /**
     * @param array $map
     * @return SendBatchSmsRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AccessKeyId'])){
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if(isset($map['OwnerId'])){
            $model->ownerId = $map['OwnerId'];
        }
        if(isset($map['ResourceOwnerAccount'])){
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if(isset($map['ResourceOwnerId'])){
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if(isset($map['PhoneNumberJson'])){
            $model->phoneNumberJson = $map['PhoneNumberJson'];
        }
        if(isset($map['SignNameJson'])){
            $model->signNameJson = $map['SignNameJson'];
        }
        if(isset($map['TemplateCode'])){
            $model->templateCode = $map['TemplateCode'];
        }
        if(isset($map['TemplateParamJson'])){
            $model->templateParamJson = $map['TemplateParamJson'];
        }
        if(isset($map['SmsUpExtendCodeJson'])){
            $model->smsUpExtendCodeJson = $map['SmsUpExtendCodeJson'];
        }
        return $model;
    }
    /**
     * @description appKey
     * @var string
     */
    public $accessKeyId;

    /**
     * @description ownerId
     * @var integer
     */
    public $ownerId;

    /**
     * @description resourceOwnerAccount
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @description resourceOwnerId
     * @var integer
     */
    public $resourceOwnerId;

    /**
     * @description phoneNumberJson
     * @var string
     */
    public $phoneNumberJson;

    /**
     * @description signNameJson
     * @var string
     */
    public $signNameJson;

    /**
     * @description templateCode
     * @var string
     */
    public $templateCode;

    /**
     * @description templateParamJsonNew
     * @var string
     */
    public $templateParamJson;

    /**
     * @description smsUpExtendCodeJson
     * @var string
     */
    public $smsUpExtendCodeJson;

}
