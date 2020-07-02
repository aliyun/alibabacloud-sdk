<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ListRemindsRequest extends Model
{
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
     * @description founder
     *
     * @var string
     */
    public $founder;

    /**
     * @description nodeId
     *
     * @var int
     */
    public $nodeId;

    /**
     * @description remindTypes
     *
     * @var string
     */
    public $remindTypes;

    /**
     * @description alertTarget
     *
     * @var string
     */
    public $alertTarget;

    /**
     * @description searchText
     *
     * @var string
     */
    public $searchText;
    protected $_name = [
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'founder'     => 'Founder',
        'nodeId'      => 'NodeId',
        'remindTypes' => 'RemindTypes',
        'alertTarget' => 'AlertTarget',
        'searchText'  => 'SearchText',
    ];

    public function validate()
    {
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->founder) {
            $res['Founder'] = $this->founder;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->remindTypes) {
            $res['RemindTypes'] = $this->remindTypes;
        }
        if (null !== $this->alertTarget) {
            $res['AlertTarget'] = $this->alertTarget;
        }
        if (null !== $this->searchText) {
            $res['SearchText'] = $this->searchText;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRemindsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Founder'])) {
            $model->founder = $map['Founder'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['RemindTypes'])) {
            $model->remindTypes = $map['RemindTypes'];
        }
        if (isset($map['AlertTarget'])) {
            $model->alertTarget = $map['AlertTarget'];
        }
        if (isset($map['SearchText'])) {
            $model->searchText = $map['SearchText'];
        }

        return $model;
    }
}
