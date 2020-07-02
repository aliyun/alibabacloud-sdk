<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListBusinessResponse\data;

use AlibabaCloud\Tea\Model;

class business extends Model
{
    /**
     * @description bizId
     *
     * @var int
     */
    public $businessId;

    /**
     * @description bizName
     *
     * @var string
     */
    public $businessName;

    /**
     * @description appId
     *
     * @var int
     */
    public $projectId;

    /**
     * @description owner
     *
     * @var string
     */
    public $owner;

    /**
     * @description description
     *
     * @var string
     */
    public $description;

    /**
     * @description useType
     *
     * @var string
     */
    public $useType;
    protected $_name = [
        'businessId'   => 'BusinessId',
        'businessName' => 'BusinessName',
        'projectId'    => 'ProjectId',
        'owner'        => 'Owner',
        'description'  => 'Description',
        'useType'      => 'UseType',
    ];

    public function validate()
    {
        Model::validateRequired('businessId', $this->businessId, true);
        Model::validateRequired('businessName', $this->businessName, true);
        Model::validateRequired('projectId', $this->projectId, true);
        Model::validateRequired('owner', $this->owner, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('useType', $this->useType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessId) {
            $res['BusinessId'] = $this->businessId;
        }
        if (null !== $this->businessName) {
            $res['BusinessName'] = $this->businessName;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->useType) {
            $res['UseType'] = $this->useType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return business
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessId'])) {
            $model->businessId = $map['BusinessId'];
        }
        if (isset($map['BusinessName'])) {
            $model->businessName = $map['BusinessName'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['UseType'])) {
            $model->useType = $map['UseType'];
        }

        return $model;
    }
}
