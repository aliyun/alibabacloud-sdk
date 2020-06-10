<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeIpControlsResponse\ipControlInfos;

use AlibabaCloud\Tea\Model;

class ipControlInfo extends Model
{
    /**
     * @description ipControlId
     *
     * @var string
     */
    public $ipControlId;

    /**
     * @description ipControlName
     *
     * @var string
     */
    public $ipControlName;

    /**
     * @description controlType
     *
     * @var string
     */
    public $ipControlType;

    /**
     * @description description
     *
     * @var string
     */
    public $description;

    /**
     * @description createTime
     *
     * @var string
     */
    public $createTime;

    /**
     * @description modifiedTime
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @description regionId
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'ipControlId'   => 'IpControlId',
        'ipControlName' => 'IpControlName',
        'ipControlType' => 'IpControlType',
        'description'   => 'Description',
        'createTime'    => 'CreateTime',
        'modifiedTime'  => 'ModifiedTime',
        'regionId'      => 'RegionId',
    ];

    public function validate()
    {
        Model::validateRequired('ipControlId', $this->ipControlId, true);
        Model::validateRequired('ipControlName', $this->ipControlName, true);
        Model::validateRequired('ipControlType', $this->ipControlType, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('modifiedTime', $this->modifiedTime, true);
        Model::validateRequired('regionId', $this->regionId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipControlId) {
            $res['IpControlId'] = $this->ipControlId;
        }
        if (null !== $this->ipControlName) {
            $res['IpControlName'] = $this->ipControlName;
        }
        if (null !== $this->ipControlType) {
            $res['IpControlType'] = $this->ipControlType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipControlInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IpControlId'])) {
            $model->ipControlId = $map['IpControlId'];
        }
        if (isset($map['IpControlName'])) {
            $model->ipControlName = $map['IpControlName'];
        }
        if (isset($map['IpControlType'])) {
            $model->ipControlType = $map['IpControlType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
