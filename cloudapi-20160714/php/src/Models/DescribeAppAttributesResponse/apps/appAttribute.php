<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAppAttributesResponse\apps;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAppAttributesResponse\apps\appAttribute\tags;
use AlibabaCloud\Tea\Model;

class appAttribute extends Model
{
    /**
     * @description appId
     *
     * @var int
     */
    public $appId;

    /**
     * @description appName
     *
     * @var string
     */
    public $appName;

    /**
     * @description description
     *
     * @var string
     */
    public $description;

    /**
     * @description gmtCreate
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description gmtModified
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @description tags
     *
     * @var tags
     */
    public $tags;
    protected $_name = [
        'appId'        => 'AppId',
        'appName'      => 'AppName',
        'description'  => 'Description',
        'createdTime'  => 'CreatedTime',
        'modifiedTime' => 'ModifiedTime',
        'tags'         => 'Tags',
    ];

    public function validate()
    {
        Model::validateRequired('appId', $this->appId, true);
        Model::validateRequired('appName', $this->appName, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('createdTime', $this->createdTime, true);
        Model::validateRequired('modifiedTime', $this->modifiedTime, true);
        Model::validateRequired('tags', $this->tags, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appAttribute
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        return $model;
    }
}
