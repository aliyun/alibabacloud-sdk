<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class DescribeAccessGroupsRequest extends Model {
    protected $_name = [
        'accessGroupName' => 'AccessGroupName',
        'pageSize' => 'PageSize',
        'pageNumber' => 'PageNumber',
        'useUTCDateTime' => 'UseUTCDateTime',
        'fileSystemType' => 'FileSystemType',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['AccessGroupName'] = $this->accessGroupName;
        $res['PageSize'] = $this->pageSize;
        $res['PageNumber'] = $this->pageNumber;
        $res['UseUTCDateTime'] = $this->useUTCDateTime;
        $res['FileSystemType'] = $this->fileSystemType;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeAccessGroupsRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AccessGroupName'])){
            $model->accessGroupName = $map['AccessGroupName'];
        }
        if(isset($map['PageSize'])){
            $model->pageSize = $map['PageSize'];
        }
        if(isset($map['PageNumber'])){
            $model->pageNumber = $map['PageNumber'];
        }
        if(isset($map['UseUTCDateTime'])){
            $model->useUTCDateTime = $map['UseUTCDateTime'];
        }
        if(isset($map['FileSystemType'])){
            $model->fileSystemType = $map['FileSystemType'];
        }
        return $model;
    }
    /**
     * @description accessGroupName
     * @var string
     */
    public $accessGroupName;

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
     * @description useUTCDateTime
     * @var bool
     */
    public $useUTCDateTime;

    /**
     * @description fileSystemType
     * @var string
     */
    public $fileSystemType;

}
