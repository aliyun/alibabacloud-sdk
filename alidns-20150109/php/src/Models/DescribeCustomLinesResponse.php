<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCustomLinesResponse\customLines;

class DescribeCustomLinesResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'totalItems' => 'TotalItems',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'totalPages' => 'TotalPages',
        'customLines' => 'CustomLines',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('totalItems', $this->totalItems, true);
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('totalPages', $this->totalPages, true);
        Model::validateRequired('customLines', $this->customLines, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['TotalItems'] = $this->totalItems;
        $res['PageNumber'] = $this->pageNumber;
        $res['PageSize'] = $this->pageSize;
        $res['TotalPages'] = $this->totalPages;
        $res['CustomLines'] = [];
        if(null !== $this->customLines && is_array($this->customLines)){
            $n = 0;
            foreach($this->customLines as $item){
                $res['CustomLines'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeCustomLinesResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['TotalItems'])){
            $model->totalItems = $map['TotalItems'];
        }
        if(isset($map['PageNumber'])){
            $model->pageNumber = $map['PageNumber'];
        }
        if(isset($map['PageSize'])){
            $model->pageSize = $map['PageSize'];
        }
        if(isset($map['TotalPages'])){
            $model->totalPages = $map['TotalPages'];
        }
        if(isset($map['CustomLines'])){
            if(!empty($map['CustomLines'])){
                $model->customLines = [];
                $n = 0;
                foreach($map['CustomLines'] as $item) {
                    $model->customLines[$n++] = null !== $item ? customLines::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description module.totalItems
     * @var integer
     */
    public $totalItems;

    /**
     * @description module.pageNumber
     * @var integer
     */
    public $pageNumber;

    /**
     * @description module.pageSize
     * @var integer
     */
    public $pageSize;

    /**
     * @description module.totalPages
     * @var integer
     */
    public $totalPages;

    /**
     * @description module.data
     * @var array
     */
    public $customLines;

}
