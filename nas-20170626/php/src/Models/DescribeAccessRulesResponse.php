<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAccessRulesResponse\accessRules;

class DescribeAccessRulesResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
        'pageSize' => 'PageSize',
        'pageNumber' => 'PageNumber',
        'accessRules' => 'AccessRules',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('accessRules', $this->accessRules, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['TotalCount'] = $this->totalCount;
        $res['PageSize'] = $this->pageSize;
        $res['PageNumber'] = $this->pageNumber;
        $res['AccessRules'] = null !== $this->accessRules ? $this->accessRules->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeAccessRulesResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['TotalCount'])){
            $model->totalCount = $map['TotalCount'];
        }
        if(isset($map['PageSize'])){
            $model->pageSize = $map['PageSize'];
        }
        if(isset($map['PageNumber'])){
            $model->pageNumber = $map['PageNumber'];
        }
        if(isset($map['AccessRules'])){
            $model->accessRules = accessRules::fromMap($map['AccessRules']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description totalCount
     * @var integer
     */
    public $totalCount;

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
     * @description data
     * @var accessRules
     */
    public $accessRules;

}
