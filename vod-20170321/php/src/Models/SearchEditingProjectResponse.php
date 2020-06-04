<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\SearchEditingProjectResponse\projectList;

class SearchEditingProjectResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'total' => 'Total',
        'projectList' => 'ProjectList',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('total', $this->total, true);
        Model::validateRequired('projectList', $this->projectList, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['Total'] = $this->total;
        $res['ProjectList'] = null !== $this->projectList ? $this->projectList->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return SearchEditingProjectResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['Total'])){
            $model->total = $map['Total'];
        }
        if(isset($map['ProjectList'])){
            $model->projectList = projectList::fromMap($map['ProjectList']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.total
     * @var integer
     */
    public $total;

    /**
     * @description data.projectDOList
     * @var projectList
     */
    public $projectList;

}
