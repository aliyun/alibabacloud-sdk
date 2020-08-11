<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeLaunchTemplatesRequest\templateTag;
use AlibabaCloud\Tea\Model;

class DescribeLaunchTemplatesRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var array
     */
    public $templateTag;

    /**
     * @var array
     */
    public $launchTemplateId;

    /**
     * @var array
     */
    public $launchTemplateName;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $templateResourceGroupId;
    protected $_name = [
        'regionId'                => 'RegionId',
        'templateTag'             => 'TemplateTag',
        'launchTemplateId'        => 'LaunchTemplateId',
        'launchTemplateName'      => 'LaunchTemplateName',
        'pageNumber'              => 'PageNumber',
        'pageSize'                => 'PageSize',
        'templateResourceGroupId' => 'TemplateResourceGroupId',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->templateTag) {
            $res['TemplateTag'] = [];
            if (null !== $this->templateTag && \is_array($this->templateTag)) {
                $n = 0;
                foreach ($this->templateTag as $item) {
                    $res['TemplateTag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->launchTemplateId) {
            $res['LaunchTemplateId'] = $this->launchTemplateId;
        }
        if (null !== $this->launchTemplateName) {
            $res['LaunchTemplateName'] = $this->launchTemplateName;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->templateResourceGroupId) {
            $res['TemplateResourceGroupId'] = $this->templateResourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLaunchTemplatesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TemplateTag'])) {
            if (!empty($map['TemplateTag'])) {
                $model->templateTag = [];
                $n                  = 0;
                foreach ($map['TemplateTag'] as $item) {
                    $model->templateTag[$n++] = null !== $item ? templateTag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['LaunchTemplateId'])) {
            if (!empty($map['LaunchTemplateId'])) {
                $model->launchTemplateId = $map['LaunchTemplateId'];
            }
        }
        if (isset($map['LaunchTemplateName'])) {
            if (!empty($map['LaunchTemplateName'])) {
                $model->launchTemplateName = $map['LaunchTemplateName'];
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TemplateResourceGroupId'])) {
            $model->templateResourceGroupId = $map['TemplateResourceGroupId'];
        }

        return $model;
    }
}
