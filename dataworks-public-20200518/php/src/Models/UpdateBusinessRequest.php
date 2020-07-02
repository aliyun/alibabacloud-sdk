<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class UpdateBusinessRequest extends Model
{
    /**
     * @description ProjectId
     *
     * @var int
     */
    public $projectId;

    /**
     * @description ProjectIdentifier
     *
     * @var string
     */
    public $projectIdentifier;

    /**
     * @description BizName
     *
     * @var string
     */
    public $businessName;

    /**
     * @description Description
     *
     * @var string
     */
    public $description;

    /**
     * @description Owner
     *
     * @var string
     */
    public $owner;

    /**
     * @description BizId
     *
     * @var int
     */
    public $businessId;
    protected $_name = [
        'projectId'         => 'ProjectId',
        'projectIdentifier' => 'ProjectIdentifier',
        'businessName'      => 'BusinessName',
        'description'       => 'Description',
        'owner'             => 'Owner',
        'businessId'        => 'BusinessId',
    ];

    public function validate()
    {
        Model::validateRequired('businessId', $this->businessId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->projectIdentifier) {
            $res['ProjectIdentifier'] = $this->projectIdentifier;
        }
        if (null !== $this->businessName) {
            $res['BusinessName'] = $this->businessName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->businessId) {
            $res['BusinessId'] = $this->businessId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateBusinessRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ProjectIdentifier'])) {
            $model->projectIdentifier = $map['ProjectIdentifier'];
        }
        if (isset($map['BusinessName'])) {
            $model->businessName = $map['BusinessName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['BusinessId'])) {
            $model->businessId = $map['BusinessId'];
        }

        return $model;
    }
}
