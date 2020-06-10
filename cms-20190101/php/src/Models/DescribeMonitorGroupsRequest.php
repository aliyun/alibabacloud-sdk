<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupsRequest\tag;
use AlibabaCloud\Tea\Model;

class DescribeMonitorGroupsRequest extends Model
{
    /**
     * @description selectContactGroups
     *
     * @var bool
     */
    public $selectContactGroups;

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
    public $keyword;

    /**
     * @description instanceId
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description name
     *
     * @var string
     */
    public $groupName;

    /**
     * @description hasTemplateHistory
     *
     * @var bool
     */
    public $includeTemplateHistory;

    /**
     * @description tags
     *
     * @var array
     */
    public $tag;

    /**
     * @description type
     *
     * @var string
     */
    public $type;

    /**
     * @description tagUUID
     *
     * @var string
     */
    public $dynamicTagRuleId;

    /**
     * @description id
     *
     * @var string
     */
    public $groupId;

    /**
     * @description serviceId
     *
     * @var string
     */
    public $serviceId;
    protected $_name = [
        'selectContactGroups'    => 'SelectContactGroups',
        'pageNumber'             => 'PageNumber',
        'pageSize'               => 'PageSize',
        'keyword'                => 'Keyword',
        'instanceId'             => 'InstanceId',
        'groupName'              => 'GroupName',
        'includeTemplateHistory' => 'IncludeTemplateHistory',
        'tag'                    => 'Tag',
        'type'                   => 'Type',
        'dynamicTagRuleId'       => 'DynamicTagRuleId',
        'groupId'                => 'GroupId',
        'serviceId'              => 'ServiceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->selectContactGroups) {
            $res['SelectContactGroups'] = $this->selectContactGroups;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->includeTemplateHistory) {
            $res['IncludeTemplateHistory'] = $this->includeTemplateHistory;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->dynamicTagRuleId) {
            $res['DynamicTagRuleId'] = $this->dynamicTagRuleId;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMonitorGroupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SelectContactGroups'])) {
            $model->selectContactGroups = $map['SelectContactGroups'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['IncludeTemplateHistory'])) {
            $model->includeTemplateHistory = $map['IncludeTemplateHistory'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['DynamicTagRuleId'])) {
            $model->dynamicTagRuleId = $map['DynamicTagRuleId'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }

        return $model;
    }
}
