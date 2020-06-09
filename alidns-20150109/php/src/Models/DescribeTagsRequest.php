<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeTagsRequest extends Model {
    protected $_name = [
        'lang' => 'Lang',
        'resourceType' => 'ResourceType',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
    ];
    public function validate() {
        Model::validateRequired('resourceType', $this->resourceType, true);
    }
    public function toMap() {
        $res = [];
        $res['Lang'] = $this->lang;
        $res['ResourceType'] = $this->resourceType;
        $res['PageNumber'] = $this->pageNumber;
        $res['PageSize'] = $this->pageSize;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeTagsRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Lang'])){
            $model->lang = $map['Lang'];
        }
        if(isset($map['ResourceType'])){
            $model->resourceType = $map['ResourceType'];
        }
        if(isset($map['PageNumber'])){
            $model->pageNumber = $map['PageNumber'];
        }
        if(isset($map['PageSize'])){
            $model->pageSize = $map['PageSize'];
        }
        return $model;
    }
    /**
     * @description lang
     * @var string
     */
    public $lang;

    /**
     * @description resourceType
     * @var string
     */
    public $resourceType;

    /**
     * @description pageNumber
     * @var integer
     */
    public $pageNumber;

    /**
     * @description pageSize
     * @var integer
     */
    public $pageSize;

}
