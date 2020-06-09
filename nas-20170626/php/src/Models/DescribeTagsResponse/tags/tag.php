<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeTagsResponse\tags;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeTagsResponse\tags\tag\fileSystemIds;

class tag extends Model {
    protected $_name = [
        'key' => 'Key',
        'value' => 'Value',
        'fileSystemIds' => 'FileSystemIds',
    ];
    public function validate() {
        Model::validateRequired('key', $this->key, true);
        Model::validateRequired('value', $this->value, true);
        Model::validateRequired('fileSystemIds', $this->fileSystemIds, true);
    }
    public function toMap() {
        $res = [];
        $res['Key'] = $this->key;
        $res['Value'] = $this->value;
        $res['FileSystemIds'] = null !== $this->fileSystemIds ? $this->fileSystemIds->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return tag
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Key'])){
            $model->key = $map['Key'];
        }
        if(isset($map['Value'])){
            $model->value = $map['Value'];
        }
        if(isset($map['FileSystemIds'])){
            $model->fileSystemIds = fileSystemIds::fromMap($map['FileSystemIds']);
        }
        return $model;
    }
    /**
     * @description key
     * @var string
     */
    public $key;

    /**
     * @description value
     * @var string
     */
    public $value;

    /**
     * @description volumes
     * @var fileSystemIds
     */
    public $fileSystemIds;

}
