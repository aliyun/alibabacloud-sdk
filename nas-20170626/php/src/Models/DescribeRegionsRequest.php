<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class DescribeRegionsRequest extends Model {
    protected $_name = [
        'pageSize' => 'PageSize',
        'pageNumber' => 'PageNumber',
        'fileSystemType' => 'FileSystemType',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['PageSize'] = $this->pageSize;
        $res['PageNumber'] = $this->pageNumber;
        $res['FileSystemType'] = $this->fileSystemType;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeRegionsRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
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
