<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainRecordsRequest extends Model {
    protected $_name = [
        'lang' => 'Lang',
        'domainName' => 'DomainName',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'keyWord' => 'KeyWord',
        'RRKeyWord' => 'RRKeyWord',
        'typeKeyWord' => 'TypeKeyWord',
        'valueKeyWord' => 'ValueKeyWord',
        'orderBy' => 'OrderBy',
        'direction' => 'Direction',
        'searchMode' => 'SearchMode',
        'groupId' => 'GroupId',
        'type' => 'Type',
        'line' => 'Line',
        'status' => 'Status',
    ];
    public function validate() {
        Model::validateRequired('domainName', $this->domainName, true);
    }
    public function toMap() {
        $res = [];
        $res['Lang'] = $this->lang;
        $res['DomainName'] = $this->domainName;
        $res['PageNumber'] = $this->pageNumber;
        $res['PageSize'] = $this->pageSize;
        $res['KeyWord'] = $this->keyWord;
        $res['RRKeyWord'] = $this->RRKeyWord;
        $res['TypeKeyWord'] = $this->typeKeyWord;
        $res['ValueKeyWord'] = $this->valueKeyWord;
        $res['OrderBy'] = $this->orderBy;
        $res['Direction'] = $this->direction;
        $res['SearchMode'] = $this->searchMode;
        $res['GroupId'] = $this->groupId;
        $res['Type'] = $this->type;
        $res['Line'] = $this->line;
        $res['Status'] = $this->status;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeDomainRecordsRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Lang'])){
            $model->lang = $map['Lang'];
        }
        if(isset($map['DomainName'])){
            $model->domainName = $map['DomainName'];
        }
        if(isset($map['PageNumber'])){
            $model->pageNumber = $map['PageNumber'];
        }
        if(isset($map['PageSize'])){
            $model->pageSize = $map['PageSize'];
        }
        if(isset($map['KeyWord'])){
            $model->keyWord = $map['KeyWord'];
        }
        if(isset($map['RRKeyWord'])){
            $model->RRKeyWord = $map['RRKeyWord'];
        }
        if(isset($map['TypeKeyWord'])){
            $model->typeKeyWord = $map['TypeKeyWord'];
        }
        if(isset($map['ValueKeyWord'])){
            $model->valueKeyWord = $map['ValueKeyWord'];
        }
        if(isset($map['OrderBy'])){
            $model->orderBy = $map['OrderBy'];
        }
        if(isset($map['Direction'])){
            $model->direction = $map['Direction'];
        }
        if(isset($map['SearchMode'])){
            $model->searchMode = $map['SearchMode'];
        }
        if(isset($map['GroupId'])){
            $model->groupId = $map['GroupId'];
        }
        if(isset($map['Type'])){
            $model->type = $map['Type'];
        }
        if(isset($map['Line'])){
            $model->line = $map['Line'];
        }
        if(isset($map['Status'])){
            $model->status = $map['Status'];
        }
        return $model;
    }
    /**
     * @description lang
     * @var string
     */
    public $lang;

    /**
     * @description domainName
     * @var string
     */
    public $domainName;

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
    public $keyWord;

    /**
     * @description rrKeyword
     * @var string
     */
    public $RRKeyWord;

    /**
     * @description typeKeyword
     * @var string
     */
    public $typeKeyWord;

    /**
     * @description valueKeyword
     * @var string
     */
    public $valueKeyWord;

    /**
     * @description orderBy
     * @var string
     */
    public $orderBy;

    /**
     * @description direction
     * @var string
     */
    public $direction;

    /**
     * @description searchMode
     * @var string
     */
    public $searchMode;

    /**
     * @description groupId
     * @var integer
     */
    public $groupId;

    /**
     * @description type
     * @var string
     */
    public $type;

    /**
     * @description line
     * @var string
     */
    public $line;

    /**
     * @description status
     * @var string
     */
    public $status;

}
