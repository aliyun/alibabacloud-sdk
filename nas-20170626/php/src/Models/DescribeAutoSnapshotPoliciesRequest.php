<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class DescribeAutoSnapshotPoliciesRequest extends Model {
    protected $_name = [
        'autoSnapshotPolicyId' => 'AutoSnapshotPolicyId',
        'pageSize' => 'PageSize',
        'pageNumber' => 'PageNumber',
        'fileSystemType' => 'FileSystemType',
    ];
    public function validate() {
        Model::validateRequired('fileSystemType', $this->fileSystemType, true);
    }
    public function toMap() {
        $res = [];
        $res['AutoSnapshotPolicyId'] = $this->autoSnapshotPolicyId;
        $res['PageSize'] = $this->pageSize;
        $res['PageNumber'] = $this->pageNumber;
        $res['FileSystemType'] = $this->fileSystemType;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeAutoSnapshotPoliciesRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AutoSnapshotPolicyId'])){
            $model->autoSnapshotPolicyId = $map['AutoSnapshotPolicyId'];
        }
        if(isset($map['PageSize'])){
            $model->pageSize = $map['PageSize'];
        }
        if(isset($map['PageNumber'])){
            $model->pageNumber = $map['PageNumber'];
        }
        if(isset($map['FileSystemType'])){
            $model->fileSystemType = $map['FileSystemType'];
        }
        return $model;
    }
    /**
     * @description autoSnapshotPolicyId
     * @var string
     */
    public $autoSnapshotPolicyId;

    /**
     * @description pageSize
     * @var integer
     */
    public $pageSize;

    /**
     * @description pageNumber
     * @var integer
     */
    public $pageNumber;

    /**
     * @description fileSystemType
     * @var string
     */
    public $fileSystemType;

}
