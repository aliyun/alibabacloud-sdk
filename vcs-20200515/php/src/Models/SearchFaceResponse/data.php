<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vcs\V20200515\Models\SearchFaceResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vcs\V20200515\Models\SearchFaceResponse\data\records;

class data extends Model {
    protected $_name = [
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'totalCount' => 'TotalCount',
        'totalPage' => 'TotalPage',
        'records' => 'Records',
    ];
    public function validate() {
        Model::validateRequired('pageNo', $this->pageNo, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('totalPage', $this->totalPage, true);
        Model::validateRequired('records', $this->records, true);
    }
    public function toMap() {
        $res = [];
        $res['PageNo'] = $this->pageNo;
        $res['PageSize'] = $this->pageSize;
        $res['TotalCount'] = $this->totalCount;
        $res['TotalPage'] = $this->totalPage;
        $res['Records'] = [];
        if(null !== $this->records && is_array($this->records)){
            $n = 0;
            foreach($this->records as $item){
                $res['Records'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return data
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['PageNo'])){
            $model->pageNo = $map['PageNo'];
        }
        if(isset($map['PageSize'])){
            $model->pageSize = $map['PageSize'];
        }
        if(isset($map['TotalCount'])){
            $model->totalCount = $map['TotalCount'];
        }
        if(isset($map['TotalPage'])){
            $model->totalPage = $map['TotalPage'];
        }
        if(isset($map['Records'])){
            if(!empty($map['Records'])){
                $model->records = [];
                $n = 0;
                foreach($map['Records'] as $item) {
                    $model->records[$n++] = null !== $item ? records::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description pageNo
     * @var integer
     */
    public $pageNo;

    /**
     * @description pageSize
     * @var integer
     */
    public $pageSize;

    /**
     * @description totalCount
     * @var integer
     */
    public $totalCount;

    /**
     * @description totalPage
     * @var integer
     */
    public $totalPage;

    /**
     * @description records
     * @var array
     */
    public $records;

}
