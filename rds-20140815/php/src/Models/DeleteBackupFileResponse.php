<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Rds\V20140815\Models\DeleteBackupFileResponse\deletedBaksetIds;

class DeleteBackupFileResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'deletedBaksetIds' => 'DeletedBaksetIds',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('deletedBaksetIds', $this->deletedBaksetIds, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['DeletedBaksetIds'] = null !== $this->deletedBaksetIds ? $this->deletedBaksetIds->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DeleteBackupFileResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['DeletedBaksetIds'])){
            $model->deletedBaksetIds = deletedBaksetIds::fromMap($map['DeletedBaksetIds']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.deletedBaksetIds
     * @var deletedBaksetIds
     */
    public $deletedBaksetIds;

}
