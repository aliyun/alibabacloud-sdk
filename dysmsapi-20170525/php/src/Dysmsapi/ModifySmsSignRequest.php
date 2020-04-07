<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Dysmsapi;

use AlibabaCloud\Tea\Model;

class ModifySmsSignRequest extends Model
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
     * @description signName
     *
     * @var string
     */
    public $signName;
    /**
     * @description signSource
     *
     * @var int
     */
    public $signSource;
    /**
     * @description signFileList
     *
     * @var array
     */
    public $signFileList;
    /**
     * @description remark
     *
     * @var string
     */
    public $remark;
    protected $_name = [
        'accessKeyId'          => 'AccessKeyId',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'signName'             => 'SignName',
        'signSource'           => 'SignSource',
        'signFileList'         => 'SignFileList',
        'remark'               => 'Remark',
    ];

    public function validate()
    {
        Model::validateRequired('signName', $this->signName, true);
        Model::validateRequired('signSource', $this->signSource, true);
        Model::validateRequired('signFileList', $this->signFileList, true);
        Model::validateRequired('remark', $this->remark, true);
    }

    public function toMap()
    {
        $res                         = [];
        $res['AccessKeyId']          = $this->accessKeyId;
        $res['OwnerId']              = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId']      = $this->resourceOwnerId;
        $res['SignName']             = $this->signName;
        $res['SignSource']           = $this->signSource;
        $res['SignFileList']         = [];
        if (null !== $this->signFileList && \is_array($this->signFileList)) {
            $n = 0;
            foreach ($this->signFileList as $item) {
                $res['SignFileList'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['Remark'] = $this->remark;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifySmsSignRequest
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
        if (isset($map['SignName'])) {
            $model->signName = $map['SignName'];
        }
        if (isset($map['SignSource'])) {
            $model->signSource = $map['SignSource'];
        }
        if (isset($map['SignFileList'])) {
            if (!empty($map['SignFileList'])) {
                $model->signFileList = [];
                $n                   = 0;
                foreach ($map['SignFileList'] as $item) {
                    $model->signFileList[$n++] = null !== $item ? ModifySmsSignRequest\signFileList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        return $model;
    }
}
