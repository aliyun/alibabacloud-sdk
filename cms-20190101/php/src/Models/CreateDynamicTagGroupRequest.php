<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\CreateDynamicTagGroupRequest\matchExpress;
use AlibabaCloud\Tea\Model;

class CreateDynamicTagGroupRequest extends Model
{
    /**
     * @description tagKey
     *
     * @var string
     */
    public $tagKey;

    /**
     * @description enableSubscribeEvent
     *
     * @var bool
     */
    public $enableSubscribeEvent;

    /**
     * @description enableInstallAgent
     *
     * @var bool
     */
    public $enableInstallAgent;

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
     * @description filterJson
     *
     * @var array
     */
    public $matchExpress;

    /**
     * @description contactList
     *
     * @var array
     */
    public $contactGroupList;

    /**
     * @description templateIdList
     *
     * @var array
     */
    public $templateIdList;
    protected $_name = [
        'tagKey'                     => 'TagKey',
        'enableSubscribeEvent'       => 'EnableSubscribeEvent',
        'enableInstallAgent'         => 'EnableInstallAgent',
        'regionId'                   => 'RegionId',
        'matchExpressFilterRelation' => 'MatchExpressFilterRelation',
        'matchExpress'               => 'MatchExpress',
        'contactGroupList'           => 'ContactGroupList',
        'templateIdList'             => 'TemplateIdList',
    ];

    public function validate()
    {
        Model::validateRequired('tagKey', $this->tagKey, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('contactGroupList', $this->contactGroupList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagKey) {
            $res['TagKey'] = $this->tagKey;
        }
        if (null !== $this->enableSubscribeEvent) {
            $res['EnableSubscribeEvent'] = $this->enableSubscribeEvent;
        }
        if (null !== $this->enableInstallAgent) {
            $res['EnableInstallAgent'] = $this->enableInstallAgent;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->matchExpressFilterRelation) {
            $res['MatchExpressFilterRelation'] = $this->matchExpressFilterRelation;
        }
        if (null !== $this->matchExpress) {
            $res['MatchExpress'] = [];
            if (null !== $this->matchExpress && \is_array($this->matchExpress)) {
                $n = 0;
                foreach ($this->matchExpress as $item) {
                    $res['MatchExpress'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->contactGroupList) {
            $res['ContactGroupList'] = [];
            if (null !== $this->contactGroupList) {
                $res['ContactGroupList'] = $this->contactGroupList;
            }
        }
        if (null !== $this->templateIdList) {
            $res['TemplateIdList'] = [];
            if (null !== $this->templateIdList) {
                $res['TemplateIdList'] = $this->templateIdList;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDynamicTagGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TagKey'])) {
            $model->tagKey = $map['TagKey'];
        }
        if (isset($map['EnableSubscribeEvent'])) {
            $model->enableSubscribeEvent = $map['EnableSubscribeEvent'];
        }
        if (isset($map['EnableInstallAgent'])) {
            $model->enableInstallAgent = $map['EnableInstallAgent'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['MatchExpressFilterRelation'])) {
            $model->matchExpressFilterRelation = $map['MatchExpressFilterRelation'];
        }
        if (isset($map['MatchExpress'])) {
            if (!empty($map['MatchExpress'])) {
                $model->matchExpress = [];
                $n                   = 0;
                foreach ($map['MatchExpress'] as $item) {
                    $model->matchExpress[$n++] = null !== $item ? matchExpress::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ContactGroupList'])) {
            if (!empty($map['ContactGroupList'])) {
                $model->contactGroupList = [];
                $model->contactGroupList = $map['ContactGroupList'];
            }
        }
        if (isset($map['TemplateIdList'])) {
            if (!empty($map['TemplateIdList'])) {
                $model->templateIdList = [];
                $model->templateIdList = $map['TemplateIdList'];
            }
        }

        return $model;
    }
}
