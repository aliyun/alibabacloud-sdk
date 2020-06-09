<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class DescribeDirQuotasRequest extends Model {
    protected $_name = [
        'fileSystemId' => 'FileSystemId',
        'path' => 'Path',
        'pageSize' => 'PageSize',
        'pageNumber' => 'PageNumber',
    ];
    public function validate() {
        Model::validateRequired('fileSystemId', $this->fileSystemId, true);
    }
    public function toMap() {
        $res = [];
        $res['FileSystemId'] = $this->fileSystemId;
        $res['Path'] = $this->path;
        $res['PageSize'] = $this->pageSize;
        $res['PageNumber'] = $this->pageNumber;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeDirQuotasRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['FileSystemId'])){
            $model->fileSystemId = $map['FileSystemId'];
        }
        if(isset($map['Path'])){
            $model->path = $map['Path'];
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
     * @description path
     * @var string
     */
    public $path;

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
