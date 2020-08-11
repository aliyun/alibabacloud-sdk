<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class DescribeLaunchTemplateVersionsRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $launchTemplateId;

    /**
     * @var string
     */
    public $launchTemplateName;

    /**
     * @var array
     */
    public $launchTemplateVersion;

    /**
     * @var int
     */
    public $minVersion;

    /**
     * @var int
     */
    public $maxVersion;

    /**
     * @var bool
     */
    public $defaultVersion;

    /**
     * @var bool
     */
    public $detailFlag;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'regionId'              => 'RegionId',
        'launchTemplateId'      => 'LaunchTemplateId',
        'launchTemplateName'    => 'LaunchTemplateName',
        'launchTemplateVersion' => 'LaunchTemplateVersion',
        'minVersion'            => 'MinVersion',
        'maxVersion'            => 'MaxVersion',
        'defaultVersion'        => 'DefaultVersion',
        'detailFlag'            => 'DetailFlag',
        'pageNumber'            => 'PageNumber',
        'pageSize'              => 'PageSize',
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
        if (null !== $this->launchTemplateId) {
            $res['LaunchTemplateId'] = $this->launchTemplateId;
        }
        if (null !== $this->launchTemplateName) {
            $res['LaunchTemplateName'] = $this->launchTemplateName;
        }
        if (null !== $this->launchTemplateVersion) {
            $res['LaunchTemplateVersion'] = $this->launchTemplateVersion;
        }
        if (null !== $this->minVersion) {
            $res['MinVersion'] = $this->minVersion;
        }
        if (null !== $this->maxVersion) {
            $res['MaxVersion'] = $this->maxVersion;
        }
        if (null !== $this->defaultVersion) {
            $res['DefaultVersion'] = $this->defaultVersion;
        }
        if (null !== $this->detailFlag) {
            $res['DetailFlag'] = $this->detailFlag;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLaunchTemplateVersionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['LaunchTemplateId'])) {
            $model->launchTemplateId = $map['LaunchTemplateId'];
        }
        if (isset($map['LaunchTemplateName'])) {
            $model->launchTemplateName = $map['LaunchTemplateName'];
        }
        if (isset($map['LaunchTemplateVersion'])) {
            if (!empty($map['LaunchTemplateVersion'])) {
                $model->launchTemplateVersion = $map['LaunchTemplateVersion'];
            }
        }
        if (isset($map['MinVersion'])) {
            $model->minVersion = $map['MinVersion'];
        }
        if (isset($map['MaxVersion'])) {
            $model->maxVersion = $map['MaxVersion'];
        }
        if (isset($map['DefaultVersion'])) {
            $model->defaultVersion = $map['DefaultVersion'];
        }
        if (isset($map['DetailFlag'])) {
            $model->detailFlag = $map['DetailFlag'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
