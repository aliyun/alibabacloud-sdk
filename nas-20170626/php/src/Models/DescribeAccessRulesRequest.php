<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class DescribeAccessRulesRequest extends Model {
    protected $_name = [
        'accessGroupName' => 'AccessGroupName',
        'accessRuleId' => 'AccessRuleId',
        'pageSize' => 'PageSize',
        'pageNumber' => 'PageNumber',
        'fileSystemType' => 'FileSystemType',
    ];
    public function validate() {
        Model::validateRequired('accessGroupName', $this->accessGroupName, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessGroupName'] = $this->accessGroupName;
        $res['AccessRuleId'] = $this->accessRuleId;
        $res['PageSize'] = $this->pageSize;
        $res['PageNumber'] = $this->pageNumber;
        $res['FileSystemType'] = $this->fileSystemType;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeAccessRulesRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AccessGroupName'])){
            $model->accessGroupName = $map['AccessGroupName'];
        }
        if(isset($map['AccessRuleId'])){
            $model->accessRuleId = $map['AccessRuleId'];
        }
        if(isset($map['PageSize'])){
            $model->pageSize = $map['PageSize'];
        }
        if(isset($map['PageNumber'])){
            $model->pageNumber = $map['PageNumber'];
        }
        if(isset($map['FileSystemType'])){
            $model->fileSystemType = $map['FileSystemType'];
        }
        return $model;
    }
    /**
     * @description accessGroupName
     * @var string
     */
    public $accessGroupName;

    /**
     * @description ruleId
     * @var string
     */
    public $accessRuleId;

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
     * @description fileSystemType
     * @var string
     */
    public $fileSystemType;

}
