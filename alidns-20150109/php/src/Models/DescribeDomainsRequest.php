<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainsRequest extends Model
{
    /**
     * @description lang
     *
     * @var string
     */
    public $lang;

    /**
     * @description keyword
     *
     * @var string
     */
    public $keyWord;

    /**
     * @description groupId
     *
     * @var string
     */
    public $groupId;

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
     * @description searchMode
     *
     * @var string
     */
    public $searchMode;

    /**
     * @description resourceGroupId
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description starmark
     *
     * @var bool
     */
    public $starmark;
    protected $_name = [
        'lang'            => 'Lang',
        'keyWord'         => 'KeyWord',
        'groupId'         => 'GroupId',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'searchMode'      => 'SearchMode',
        'resourceGroupId' => 'ResourceGroupId',
        'starmark'        => 'Starmark',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->keyWord) {
            $res['KeyWord'] = $this->keyWord;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->searchMode) {
            $res['SearchMode'] = $this->searchMode;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->starmark) {
            $res['Starmark'] = $this->starmark;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['KeyWord'])) {
            $model->keyWord = $map['KeyWord'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SearchMode'])) {
            $model->searchMode = $map['SearchMode'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Starmark'])) {
            $model->starmark = $map['Starmark'];
        }

        return $model;
    }
}
