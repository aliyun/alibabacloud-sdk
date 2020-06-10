<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class SendSmsRequest extends Model
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
     * @description phoneNumbers
     *
     * @var string
     */
    public $phoneNumbers;

    /**
     * @description signName
     *
     * @var string
     */
    public $signName;

    /**
     * @description templateCode
     *
     * @var string
     */
    public $templateCode;

    /**
     * @description templateParam
     *
     * @var string
     */
    public $templateParam;

    /**
     * @description smsUpExtendCode
     *
     * @var string
     */
    public $smsUpExtendCode;

    /**
     * @description outId
     *
     * @var string
     */
    public $outId;
    protected $_name = [
        'accessKeyId'          => 'AccessKeyId',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'phoneNumbers'         => 'PhoneNumbers',
        'signName'             => 'SignName',
        'templateCode'         => 'TemplateCode',
        'templateParam'        => 'TemplateParam',
        'smsUpExtendCode'      => 'SmsUpExtendCode',
        'outId'                => 'OutId',
    ];

    public function validate()
    {
        Model::validateRequired('phoneNumbers', $this->phoneNumbers, true);
        Model::validateRequired('signName', $this->signName, true);
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
        if (null !== $this->phoneNumbers) {
            $res['PhoneNumbers'] = $this->phoneNumbers;
        }
        if (null !== $this->signName) {
            $res['SignName'] = $this->signName;
        }
        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
        }
        if (null !== $this->templateParam) {
            $res['TemplateParam'] = $this->templateParam;
        }
        if (null !== $this->smsUpExtendCode) {
            $res['SmsUpExtendCode'] = $this->smsUpExtendCode;
        }
        if (null !== $this->outId) {
            $res['OutId'] = $this->outId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendSmsRequest
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
        if (isset($map['PhoneNumbers'])) {
            $model->phoneNumbers = $map['PhoneNumbers'];
        }
        if (isset($map['SignName'])) {
            $model->signName = $map['SignName'];
        }
        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
        }
        if (isset($map['TemplateParam'])) {
            $model->templateParam = $map['TemplateParam'];
        }
        if (isset($map['SmsUpExtendCode'])) {
            $model->smsUpExtendCode = $map['SmsUpExtendCode'];
        }
        if (isset($map['OutId'])) {
            $model->outId = $map['OutId'];
        }

        return $model;
    }
}
