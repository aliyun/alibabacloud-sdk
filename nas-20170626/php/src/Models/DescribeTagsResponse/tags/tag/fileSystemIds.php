<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeTagsResponse\tags\tag;

use AlibabaCloud\Tea\Model;

class fileSystemIds extends Model {
    protected $_name = [
        'fileSystemId' => 'FileSystemId',
    ];
    public function validate() {
        Model::validateRequired('fileSystemId', $this->fileSystemId, true);
    }
    public function toMap() {
        $res = [];
        $res['FileSystemId'] = [];
        if(null !== $this->fileSystemId){
            $res['FileSystemId'] = $this->fileSystemId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return fileSystemIds
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['FileSystemId'])){
            if(!empty($map['FileSystemId'])){
                $model->fileSystemId = [];
                $model->fileSystemId = $map['FileSystemId'];
            }
        }
        return $model;
    }
    /**
     * @description FileSystemId
     * @var array
     */
    public $fileSystemId;

}
