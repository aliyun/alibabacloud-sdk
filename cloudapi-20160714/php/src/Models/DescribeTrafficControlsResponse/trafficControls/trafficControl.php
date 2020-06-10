<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeTrafficControlsResponse\trafficControls;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeTrafficControlsResponse\trafficControls\trafficControl\specialPolicies;
use AlibabaCloud\Tea\Model;

class trafficControl extends Model
{
    /**
     * @description trafficControlId
     *
     * @var string
     */
    public $trafficControlId;

    /**
     * @description trafficControlName
     *
     * @var string
     */
    public $trafficControlName;

    /**
     * @description description
     *
     * @var string
     */
    public $description;

    /**
     * @description trafficControlUnit
     *
     * @var string
     */
    public $trafficControlUnit;

    /**
     * @description apiDefault
     *
     * @var int
     */
    public $apiDefault;

    /**
     * @description userDefault
     *
     * @var int
     */
    public $userDefault;

    /**
     * @description appDefault
     *
     * @var int
     */
    public $appDefault;

    /**
     * @description createTime
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description modifiedTime
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @description trafficSpecialPolicies
     *
     * @var specialPolicies
     */
    public $specialPolicies;
    protected $_name = [
        'trafficControlId'   => 'TrafficControlId',
        'trafficControlName' => 'TrafficControlName',
        'description'        => 'Description',
        'trafficControlUnit' => 'TrafficControlUnit',
        'apiDefault'         => 'ApiDefault',
        'userDefault'        => 'UserDefault',
        'appDefault'         => 'AppDefault',
        'createdTime'        => 'CreatedTime',
        'modifiedTime'       => 'ModifiedTime',
        'specialPolicies'    => 'SpecialPolicies',
    ];

    public function validate()
    {
        Model::validateRequired('trafficControlId', $this->trafficControlId, true);
        Model::validateRequired('trafficControlName', $this->trafficControlName, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('trafficControlUnit', $this->trafficControlUnit, true);
        Model::validateRequired('apiDefault', $this->apiDefault, true);
        Model::validateRequired('userDefault', $this->userDefault, true);
        Model::validateRequired('appDefault', $this->appDefault, true);
        Model::validateRequired('createdTime', $this->createdTime, true);
        Model::validateRequired('modifiedTime', $this->modifiedTime, true);
        Model::validateRequired('specialPolicies', $this->specialPolicies, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->trafficControlId) {
            $res['TrafficControlId'] = $this->trafficControlId;
        }
        if (null !== $this->trafficControlName) {
            $res['TrafficControlName'] = $this->trafficControlName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->trafficControlUnit) {
            $res['TrafficControlUnit'] = $this->trafficControlUnit;
        }
        if (null !== $this->apiDefault) {
            $res['ApiDefault'] = $this->apiDefault;
        }
        if (null !== $this->userDefault) {
            $res['UserDefault'] = $this->userDefault;
        }
        if (null !== $this->appDefault) {
            $res['AppDefault'] = $this->appDefault;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->specialPolicies) {
            $res['SpecialPolicies'] = null !== $this->specialPolicies ? $this->specialPolicies->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return trafficControl
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TrafficControlId'])) {
            $model->trafficControlId = $map['TrafficControlId'];
        }
        if (isset($map['TrafficControlName'])) {
            $model->trafficControlName = $map['TrafficControlName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['TrafficControlUnit'])) {
            $model->trafficControlUnit = $map['TrafficControlUnit'];
        }
        if (isset($map['ApiDefault'])) {
            $model->apiDefault = $map['ApiDefault'];
        }
        if (isset($map['UserDefault'])) {
            $model->userDefault = $map['UserDefault'];
        }
        if (isset($map['AppDefault'])) {
            $model->appDefault = $map['AppDefault'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['SpecialPolicies'])) {
            $model->specialPolicies = specialPolicies::fromMap($map['SpecialPolicies']);
        }

        return $model;
    }
}
