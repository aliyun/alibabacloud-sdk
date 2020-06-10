<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeContactGroupListResponse\contactGroupList;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeContactGroupListResponse\contactGroupList\contactGroup\contacts;
use AlibabaCloud\Tea\Model;

class contactGroup extends Model
{
    /**
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description desc
     *
     * @var string
     */
    public $describe;

    /**
     * @description gmtCreate
     *
     * @var int
     */
    public $createTime;

    /**
     * @description gmtUpdate
     *
     * @var int
     */
    public $updateTime;

    /**
     * @description wrEnabled
     *
     * @var bool
     */
    public $enabledWeeklyReport;

    /**
     * @description wrSubscribed
     *
     * @var bool
     */
    public $enableSubscribed;

    /**
     * @description contacts
     *
     * @var contacts
     */
    public $contacts;
    protected $_name = [
        'name'                => 'Name',
        'describe'            => 'Describe',
        'createTime'          => 'CreateTime',
        'updateTime'          => 'UpdateTime',
        'enabledWeeklyReport' => 'EnabledWeeklyReport',
        'enableSubscribed'    => 'EnableSubscribed',
        'contacts'            => 'Contacts',
    ];

    public function validate()
    {
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('describe', $this->describe, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('updateTime', $this->updateTime, true);
        Model::validateRequired('enabledWeeklyReport', $this->enabledWeeklyReport, true);
        Model::validateRequired('enableSubscribed', $this->enableSubscribed, true);
        Model::validateRequired('contacts', $this->contacts, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->describe) {
            $res['Describe'] = $this->describe;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->enabledWeeklyReport) {
            $res['EnabledWeeklyReport'] = $this->enabledWeeklyReport;
        }
        if (null !== $this->enableSubscribed) {
            $res['EnableSubscribed'] = $this->enableSubscribed;
        }
        if (null !== $this->contacts) {
            $res['Contacts'] = null !== $this->contacts ? $this->contacts->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return contactGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Describe'])) {
            $model->describe = $map['Describe'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['EnabledWeeklyReport'])) {
            $model->enabledWeeklyReport = $map['EnabledWeeklyReport'];
        }
        if (isset($map['EnableSubscribed'])) {
            $model->enableSubscribed = $map['EnableSubscribed'];
        }
        if (isset($map['Contacts'])) {
            $model->contacts = contacts::fromMap($map['Contacts']);
        }

        return $model;
    }
}
