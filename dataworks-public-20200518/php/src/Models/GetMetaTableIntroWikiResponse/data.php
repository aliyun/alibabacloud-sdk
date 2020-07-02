<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableIntroWikiResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description createTimestamp
     *
     * @var int
     */
    public $createTime;

    /**
     * @description modifiedTimestamp
     *
     * @var int
     */
    public $modifiedTime;

    /**
     * @description creator
     *
     * @var string
     */
    public $creator;

    /**
     * @description version
     *
     * @var int
     */
    public $version;

    /**
     * @description creatorName
     *
     * @var string
     */
    public $creatorName;

    /**
     * @description content
     *
     * @var string
     */
    public $content;
    protected $_name = [
        'createTime'   => 'CreateTime',
        'modifiedTime' => 'ModifiedTime',
        'creator'      => 'Creator',
        'version'      => 'Version',
        'creatorName'  => 'CreatorName',
        'content'      => 'Content',
    ];

    public function validate()
    {
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('modifiedTime', $this->modifiedTime, true);
        Model::validateRequired('creator', $this->creator, true);
        Model::validateRequired('version', $this->version, true);
        Model::validateRequired('creatorName', $this->creatorName, true);
        Model::validateRequired('content', $this->content, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->creatorName) {
            $res['CreatorName'] = $this->creatorName;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['CreatorName'])) {
            $model->creatorName = $map['CreatorName'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        return $model;
    }
}
