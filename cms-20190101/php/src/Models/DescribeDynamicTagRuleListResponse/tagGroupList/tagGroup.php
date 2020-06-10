<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeDynamicTagRuleListResponse\tagGroupList;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeDynamicTagRuleListResponse\tagGroupList\tagGroup\matchExpress;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeDynamicTagRuleListResponse\tagGroupList\tagGroup\templateIdList;
use AlibabaCloud\Tea\Model;

class tagGroup extends Model
{
    /**
     * @description uuid
     *
     * @var string
     */
    public $dynamicTagRuleId;

    /**
     * @description tagKey
     *
     * @var string
     */
    public $tagKey;

    /**
     * @description regionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @description filterRelation
     *
     * @var string
     */
    public $matchExpressFilterRelation;

    /**
     * @description runningStatus
     *
     * @var string
     */
    public $status;

    /**
     * @description filters
     *
     * @var matchExpress
     */
    public $matchExpress;

    /**
     * @description templateList
     *
     * @var templateIdList
     */
    public $templateIdList;
    protected $_name = [
        'dynamicTagRuleId'           => 'DynamicTagRuleId',
        'tagKey'                     => 'TagKey',
        'regionId'                   => 'RegionId',
        'matchExpressFilterRelation' => 'MatchExpressFilterRelation',
        'status'                     => 'Status',
        'matchExpress'               => 'MatchExpress',
        'templateIdList'             => 'TemplateIdList',
    ];

    public function validate()
    {
        Model::validateRequired('dynamicTagRuleId', $this->dynamicTagRuleId, true);
        Model::validateRequired('tagKey', $this->tagKey, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('matchExpressFilterRelation', $this->matchExpressFilterRelation, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('matchExpress', $this->matchExpress, true);
        Model::validateRequired('templateIdList', $this->templateIdList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dynamicTagRuleId) {
            $res['DynamicTagRuleId'] = $this->dynamicTagRuleId;
        }
        if (null !== $this->tagKey) {
            $res['TagKey'] = $this->tagKey;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->matchExpressFilterRelation) {
            $res['MatchExpressFilterRelation'] = $this->matchExpressFilterRelation;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->matchExpress) {
            $res['MatchExpress'] = null !== $this->matchExpress ? $this->matchExpress->toMap() : null;
        }
        if (null !== $this->templateIdList) {
            $res['TemplateIdList'] = null !== $this->templateIdList ? $this->templateIdList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tagGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DynamicTagRuleId'])) {
            $model->dynamicTagRuleId = $map['DynamicTagRuleId'];
        }
        if (isset($map['TagKey'])) {
            $model->tagKey = $map['TagKey'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['MatchExpressFilterRelation'])) {
            $model->matchExpressFilterRelation = $map['MatchExpressFilterRelation'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['MatchExpress'])) {
            $model->matchExpress = matchExpress::fromMap($map['MatchExpress']);
        }
        if (isset($map['TemplateIdList'])) {
            $model->templateIdList = templateIdList::fromMap($map['TemplateIdList']);
        }

        return $model;
    }
}
