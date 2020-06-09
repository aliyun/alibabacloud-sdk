<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeGtmInstancesRequest extends Model {
    protected $_name = [
        'lang' => 'Lang',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'keyword' => 'Keyword',
        'resourceGroupId' => 'ResourceGroupId',
        'needDetailAttributes' => 'NeedDetailAttributes',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['Lang'] = $this->lang;
        $res['PageNumber'] = $this->pageNumber;
        $res['PageSize'] = $this->pageSize;
        $res['Keyword'] = $this->keyword;
        $res['ResourceGroupId'] = $this->resourceGroupId;
        $res['NeedDetailAttributes'] = $this->needDetailAttributes;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeGtmInstancesRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Lang'])){
            $model->lang = $map['Lang'];
        }
        if(isset($map['PageNumber'])){
            $model->pageNumber = $map['PageNumber'];
        }
        if(isset($map['PageSize'])){
            $model->pageSize = $map['PageSize'];
        }
        if(isset($map['Keyword'])){
            $model->keyword = $map['Keyword'];
        }
        if(isset($map['ResourceGroupId'])){
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if(isset($map['NeedDetailAttributes'])){
            $model->needDetailAttributes = $map['NeedDetailAttributes'];
        }
        return $model;
    }
    /**
     * @description lang
     * @var string
     */
    public $lang;

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

    /**
     * @description keyword
     * @var string
     */
    public $keyword;

    /**
     * @description resourceGroupId
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description needDetailAttributes
     * @var bool
     */
    public $needDetailAttributes;

}
