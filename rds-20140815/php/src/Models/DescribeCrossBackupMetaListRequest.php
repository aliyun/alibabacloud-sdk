<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeCrossBackupMetaListRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'backupSetId' => 'BackupSetId',
        'getDbName' => 'GetDbName',
        'pattern' => 'Pattern',
        'pageSize' => 'PageSize',
        'pageIndex' => 'PageIndex',
        'region' => 'Region',
    ];
    public function validate() {
        Model::validateRequired('backupSetId', $this->backupSetId, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['BackupSetId'] = $this->backupSetId;
        $res['GetDbName'] = $this->getDbName;
        $res['Pattern'] = $this->pattern;
        $res['PageSize'] = $this->pageSize;
        $res['PageIndex'] = $this->pageIndex;
        $res['Region'] = $this->region;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeCrossBackupMetaListRequest
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
        if(isset($map['BackupSetId'])){
            $model->backupSetId = $map['BackupSetId'];
        }
        if(isset($map['GetDbName'])){
            $model->getDbName = $map['GetDbName'];
        }
        if(isset($map['Pattern'])){
            $model->pattern = $map['Pattern'];
        }
        if(isset($map['PageSize'])){
            $model->pageSize = $map['PageSize'];
        }
        if(isset($map['PageIndex'])){
            $model->pageIndex = $map['PageIndex'];
        }
        if(isset($map['Region'])){
            $model->region = $map['Region'];
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
     * @description backupSetId
     * @var string
     */
    public $backupSetId;

    /**
     * @description getDbName
     * @var string
     */
    public $getDbName;

    /**
     * @description pattern
     * @var string
     */
    public $pattern;

    /**
     * @description pageSize
     * @var string
     */
    public $pageSize;

    /**
     * @description pageIndex
     * @var string
     */
    public $pageIndex;

    /**
     * @description region
     * @var string
     */
    public $region;

}
