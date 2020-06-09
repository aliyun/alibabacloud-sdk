<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\NAS\V20170626\Models\AddTagsRequest\tag;

class AddTagsRequest extends Model {
    protected $_name = [
        'fileSystemId' => 'FileSystemId',
        'tag' => 'Tag',
    ];
    public function validate() {
        Model::validateRequired('fileSystemId', $this->fileSystemId, true);
        Model::validateRequired('tag', $this->tag, true);
    }
    public function toMap() {
        $res = [];
        $res['FileSystemId'] = $this->fileSystemId;
        $res['Tag'] = [];
        if(null !== $this->tag && is_array($this->tag)){
            $n = 0;
            foreach($this->tag as $item){
                $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return AddTagsRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['FileSystemId'])){
            $model->fileSystemId = $map['FileSystemId'];
        }
        if(isset($map['Tag'])){
            if(!empty($map['Tag'])){
                $model->tag = [];
                $n = 0;
                foreach($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description volume
     * @var string
     */
    public $fileSystemId;

    /**
     * @description tags
     * @var array
     */
    public $tag;

}
