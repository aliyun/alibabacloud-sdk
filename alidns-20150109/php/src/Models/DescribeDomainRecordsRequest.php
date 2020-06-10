<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainRecordsRequest extends Model
{
    /**
     * @description lang
     *
     * @var string
     */
    public $lang;

    /**
     * @description domainName
     *
     * @var string
     */
    public $domainName;

    /**
     * @description pageNumber
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description pageSize
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description keyword
     *
     * @var string
     */
    public $keyWord;

    /**
     * @description rrKeyword
     *
     * @var string
     */
    public $RRKeyWord;

    /**
     * @description typeKeyword
     *
     * @var string
     */
    public $typeKeyWord;

    /**
     * @description valueKeyword
     *
     * @var string
     */
    public $valueKeyWord;

    /**
     * @description orderBy
     *
     * @var string
     */
    public $orderBy;

    /**
     * @description direction
     *
     * @var string
     */
    public $direction;

    /**
     * @description searchMode
     *
     * @var string
     */
    public $searchMode;

    /**
     * @description groupId
     *
     * @var int
     */
    public $groupId;

    /**
     * @description type
     *
     * @var string
     */
    public $type;

    /**
     * @description line
     *
     * @var string
     */
    public $line;

    /**
     * @description status
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'lang'         => 'Lang',
        'domainName'   => 'DomainName',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'keyWord'      => 'KeyWord',
        'RRKeyWord'    => 'RRKeyWord',
        'typeKeyWord'  => 'TypeKeyWord',
        'valueKeyWord' => 'ValueKeyWord',
        'orderBy'      => 'OrderBy',
        'direction'    => 'Direction',
        'searchMode'   => 'SearchMode',
        'groupId'      => 'GroupId',
        'type'         => 'Type',
        'line'         => 'Line',
        'status'       => 'Status',
    ];

    public function validate()
    {
        Model::validateRequired('domainName', $this->domainName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->keyWord) {
            $res['KeyWord'] = $this->keyWord;
        }
        if (null !== $this->RRKeyWord) {
            $res['RRKeyWord'] = $this->RRKeyWord;
        }
        if (null !== $this->typeKeyWord) {
            $res['TypeKeyWord'] = $this->typeKeyWord;
        }
        if (null !== $this->valueKeyWord) {
            $res['ValueKeyWord'] = $this->valueKeyWord;
        }
        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }
        if (null !== $this->searchMode) {
            $res['SearchMode'] = $this->searchMode;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->line) {
            $res['Line'] = $this->line;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainRecordsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['KeyWord'])) {
            $model->keyWord = $map['KeyWord'];
        }
        if (isset($map['RRKeyWord'])) {
            $model->RRKeyWord = $map['RRKeyWord'];
        }
        if (isset($map['TypeKeyWord'])) {
            $model->typeKeyWord = $map['TypeKeyWord'];
        }
        if (isset($map['ValueKeyWord'])) {
            $model->valueKeyWord = $map['ValueKeyWord'];
        }
        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }
        if (isset($map['SearchMode'])) {
            $model->searchMode = $map['SearchMode'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Line'])) {
            $model->line = $map['Line'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
