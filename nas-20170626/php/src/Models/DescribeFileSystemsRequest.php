<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class DescribeFileSystemsRequest extends Model {
    protected $_name = [
        'fileSystemId' => 'FileSystemId',
        'fileSystemType' => 'FileSystemType',
        'vpcId' => 'VpcId',
        'pageSize' => 'PageSize',
        'pageNumber' => 'PageNumber',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['FileSystemId'] = $this->fileSystemId;
        $res['FileSystemType'] = $this->fileSystemType;
        $res['VpcId'] = $this->vpcId;
        $res['PageSize'] = $this->pageSize;
        $res['PageNumber'] = $this->pageNumber;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeFileSystemsRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['FileSystemId'])){
            $model->fileSystemId = $map['FileSystemId'];
        }
        if(isset($map['FileSystemType'])){
            $model->fileSystemType = $map['FileSystemType'];
        }
        if(isset($map['VpcId'])){
            $model->vpcId = $map['VpcId'];
        }
        if(isset($map['PageSize'])){
            $model->pageSize = $map['PageSize'];
        }
        if(isset($map['PageNumber'])){
            $model->pageNumber = $map['PageNumber'];
        }
        return $model;
    }
    /**
     * @description volume
     * @var string
     */
    public $fileSystemId;

    /**
     * @description fileSystemType
     * @var string
     */
    public $fileSystemType;

    /**
     * @description vpcId
     * @var string
     */
    public $vpcId;

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

}
