<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class SubmitWorkflowJobRequest extends Model {
    protected $_name = [
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'workflowId' => 'WorkflowId',
        'mediaId' => 'MediaId',
        'fileUrl' => 'FileUrl',
    ];
    public function validate() {
        Model::validateRequired('workflowId', $this->workflowId, true);
    }
    public function toMap() {
        $res = [];
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['WorkflowId'] = $this->workflowId;
        $res['MediaId'] = $this->mediaId;
        $res['FileUrl'] = $this->fileUrl;
        return $res;
    }
    /**
     * @param array $map
     * @return SubmitWorkflowJobRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['OwnerId'])){
            $model->ownerId = $map['OwnerId'];
        }
        if(isset($map['ResourceOwnerAccount'])){
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if(isset($map['ResourceOwnerId'])){
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if(isset($map['WorkflowId'])){
            $model->workflowId = $map['WorkflowId'];
        }
        if(isset($map['MediaId'])){
            $model->mediaId = $map['MediaId'];
        }
        if(isset($map['FileUrl'])){
            $model->fileUrl = $map['FileUrl'];
        }
        return $model;
    }
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
     * @description workflowId
     * @var string
     */
    public $workflowId;

    /**
     * @description mediaId
     * @var string
     */
    public $mediaId;

    /**
     * @description fileUrl
     * @var string
     */
    public $fileUrl;

}
