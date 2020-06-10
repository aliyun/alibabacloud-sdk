<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupsResponse\resources;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupsResponse\resources\resource\contactGroups;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupsResponse\resources\resource\tags;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupsResponse\resources\resource\templateIds;
use AlibabaCloud\Tea\Model;

class resource extends Model
{
    /**
     * @description id
     *
     * @var int
     */
    public $groupId;

    /**
     * @description name
     *
     * @var string
     */
    public $groupName;

    /**
     * @description serviceId
     *
     * @var string
     */
    public $serviceId;

    /**
     * @description type
     *
     * @var string
     */
    public $type;

    /**
     * @description gmtModified
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @description gmtCreate
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @description bindUrl
     *
     * @var string
     */
    public $bindUrl;

    /**
     * @description options.TagUUID
     *
     * @var string
     */
    public $dynamicTagRuleId;

    /**
     * @description options.TagKey
     *
     * @var string
     */
    public $groupFounderTagKey;

    /**
     * @description options.TagValue
     *
     * @var string
     */
    public $groupFounderTagValue;

    /**
     * @description contactGroups
     *
     * @var contactGroups
     */
    public $contactGroups;

    /**
     * @description tags
     *
     * @var tags
     */
    public $tags;

    /**
     * @description templateIds
     *
     * @var templateIds
     */
    public $templateIds;
    protected $_name = [
        'groupId'              => 'GroupId',
        'groupName'            => 'GroupName',
        'serviceId'            => 'ServiceId',
        'type'                 => 'Type',
        'gmtModified'          => 'GmtModified',
        'gmtCreate'            => 'GmtCreate',
        'bindUrl'              => 'BindUrl',
        'dynamicTagRuleId'     => 'DynamicTagRuleId',
        'groupFounderTagKey'   => 'GroupFounderTagKey',
        'groupFounderTagValue' => 'GroupFounderTagValue',
        'contactGroups'        => 'ContactGroups',
        'tags'                 => 'Tags',
        'templateIds'          => 'TemplateIds',
    ];

    public function validate()
    {
        Model::validateRequired('groupId', $this->groupId, true);
        Model::validateRequired('groupName', $this->groupName, true);
        Model::validateRequired('serviceId', $this->serviceId, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('gmtModified', $this->gmtModified, true);
        Model::validateRequired('gmtCreate', $this->gmtCreate, true);
        Model::validateRequired('bindUrl', $this->bindUrl, true);
        Model::validateRequired('dynamicTagRuleId', $this->dynamicTagRuleId, true);
        Model::validateRequired('groupFounderTagKey', $this->groupFounderTagKey, true);
        Model::validateRequired('groupFounderTagValue', $this->groupFounderTagValue, true);
        Model::validateRequired('contactGroups', $this->contactGroups, true);
        Model::validateRequired('tags', $this->tags, true);
        Model::validateRequired('templateIds', $this->templateIds, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->bindUrl) {
            $res['BindUrl'] = $this->bindUrl;
        }
        if (null !== $this->dynamicTagRuleId) {
            $res['DynamicTagRuleId'] = $this->dynamicTagRuleId;
        }
        if (null !== $this->groupFounderTagKey) {
            $res['GroupFounderTagKey'] = $this->groupFounderTagKey;
        }
        if (null !== $this->groupFounderTagValue) {
            $res['GroupFounderTagValue'] = $this->groupFounderTagValue;
        }
        if (null !== $this->contactGroups) {
            $res['ContactGroups'] = null !== $this->contactGroups ? $this->contactGroups->toMap() : null;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->templateIds) {
            $res['TemplateIds'] = null !== $this->templateIds ? $this->templateIds->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['BindUrl'])) {
            $model->bindUrl = $map['BindUrl'];
        }
        if (isset($map['DynamicTagRuleId'])) {
            $model->dynamicTagRuleId = $map['DynamicTagRuleId'];
        }
        if (isset($map['GroupFounderTagKey'])) {
            $model->groupFounderTagKey = $map['GroupFounderTagKey'];
        }
        if (isset($map['GroupFounderTagValue'])) {
            $model->groupFounderTagValue = $map['GroupFounderTagValue'];
        }
        if (isset($map['ContactGroups'])) {
            $model->contactGroups = contactGroups::fromMap($map['ContactGroups']);
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['TemplateIds'])) {
            $model->templateIds = templateIds::fromMap($map['TemplateIds']);
        }

        return $model;
    }
}
