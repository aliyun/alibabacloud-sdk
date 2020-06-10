<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class SendBatchSmsRequest extends Model
{
    /**
     * @description appKey
     *
     * @var string
     */
    public $accessKeyId;

    /**
     * @description ownerId
     *
     * @var int
     */
    public $ownerId;

    /**
     * @description resourceOwnerAccount
     *
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @description resourceOwnerId
     *
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description phoneNumberJson
     *
     * @var string
     */
    public $phoneNumberJson;

    /**
     * @description signNameJson
     *
     * @var string
     */
    public $signNameJson;

    /**
     * @description templateCode
     *
     * @var string
     */
    public $templateCode;

    /**
     * @description templateParamJsonNew
     *
     * @var string
     */
    public $templateParamJson;

    /**
     * @description smsUpExtendCodeJson
     *
     * @var string
     */
    public $smsUpExtendCodeJson;
    protected $_name = [
        'accessKeyId'          => 'AccessKeyId',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'phoneNumberJson'      => 'PhoneNumberJson',
        'signNameJson'         => 'SignNameJson',
        'templateCode'         => 'TemplateCode',
        'templateParamJson'    => 'TemplateParamJson',
        'smsUpExtendCodeJson'  => 'SmsUpExtendCodeJson',
    ];

    public function validate()
    {
        Model::validateRequired('phoneNumberJson', $this->phoneNumberJson, true);
        Model::validateRequired('signNameJson', $this->signNameJson, true);
        Model::validateRequired('templateCode', $this->templateCode, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKeyId) {
            $res['AccessKeyId'] = $this->accessKeyId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->phoneNumberJson) {
            $res['PhoneNumberJson'] = $this->phoneNumberJson;
        }
        if (null !== $this->signNameJson) {
            $res['SignNameJson'] = $this->signNameJson;
        }
        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
        }
        if (null !== $this->templateParamJson) {
            $res['TemplateParamJson'] = $this->templateParamJson;
        }
        if (null !== $this->smsUpExtendCodeJson) {
            $res['SmsUpExtendCodeJson'] = $this->smsUpExtendCodeJson;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendBatchSmsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessKeyId'])) {
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['PhoneNumberJson'])) {
            $model->phoneNumberJson = $map['PhoneNumberJson'];
        }
        if (isset($map['SignNameJson'])) {
            $model->signNameJson = $map['SignNameJson'];
        }
        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
        }
        if (isset($map['TemplateParamJson'])) {
            $model->templateParamJson = $map['TemplateParamJson'];
        }
        if (isset($map['SmsUpExtendCodeJson'])) {
            $model->smsUpExtendCodeJson = $map['SmsUpExtendCodeJson'];
        }

        return $model;
    }
}
