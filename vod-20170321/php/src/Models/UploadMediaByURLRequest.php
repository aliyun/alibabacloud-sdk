<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class UploadMediaByURLRequest extends Model
{
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
     * @description uploadURLs
     *
     * @var string
     */
    public $uploadURLs;

    /**
     * @description templateGroupId
     *
     * @var string
     */
    public $templateGroupId;

    /**
     * @description storageLocation
     *
     * @var string
     */
    public $storageLocation;

    /**
     * @description uploadMetadatas
     *
     * @var string
     */
    public $uploadMetadatas;

    /**
     * @description priority
     *
     * @var string
     */
    public $priority;

    /**
     * @description messageCallback
     *
     * @var string
     */
    public $messageCallback;

    /**
     * @description userData
     *
     * @var string
     */
    public $userData;

    /**
     * @description appId
     *
     * @var string
     */
    public $appId;

    /**
     * @description workflowId
     *
     * @var string
     */
    public $workflowId;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'uploadURLs'           => 'UploadURLs',
        'templateGroupId'      => 'TemplateGroupId',
        'storageLocation'      => 'StorageLocation',
        'uploadMetadatas'      => 'UploadMetadatas',
        'priority'             => 'Priority',
        'messageCallback'      => 'MessageCallback',
        'userData'             => 'UserData',
        'appId'                => 'AppId',
        'workflowId'           => 'WorkflowId',
    ];

    public function validate()
    {
        Model::validateRequired('uploadURLs', $this->uploadURLs, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->uploadURLs) {
            $res['UploadURLs'] = $this->uploadURLs;
        }
        if (null !== $this->templateGroupId) {
            $res['TemplateGroupId'] = $this->templateGroupId;
        }
        if (null !== $this->storageLocation) {
            $res['StorageLocation'] = $this->storageLocation;
        }
        if (null !== $this->uploadMetadatas) {
            $res['UploadMetadatas'] = $this->uploadMetadatas;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->messageCallback) {
            $res['MessageCallback'] = $this->messageCallback;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->workflowId) {
            $res['WorkflowId'] = $this->workflowId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadMediaByURLRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['UploadURLs'])) {
            $model->uploadURLs = $map['UploadURLs'];
        }
        if (isset($map['TemplateGroupId'])) {
            $model->templateGroupId = $map['TemplateGroupId'];
        }
        if (isset($map['StorageLocation'])) {
            $model->storageLocation = $map['StorageLocation'];
        }
        if (isset($map['UploadMetadatas'])) {
            $model->uploadMetadatas = $map['UploadMetadatas'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['MessageCallback'])) {
            $model->messageCallback = $map['MessageCallback'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['WorkflowId'])) {
            $model->workflowId = $map['WorkflowId'];
        }

        return $model;
    }
}
