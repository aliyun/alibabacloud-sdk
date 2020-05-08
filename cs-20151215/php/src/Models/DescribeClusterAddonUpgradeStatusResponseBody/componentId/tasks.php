<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterAddonUpgradeStatusResponseBody\componentId;

use AlibabaCloud\Tea\Model;

class tasks extends Model
{
    /**
     * @description finished_at
     *
     * @var string
     */
    public $finishedAt;

    /**
     * @description master_url
     *
     * @var string
     */
    public $masterUrl;

    /**
     * @description created_at
     *
     * @var string
     */
    public $createdAt;

    /**
     * @description status
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'finishedAt' => 'finished_at',
        'masterUrl'  => 'master_url',
        'createdAt'  => 'created_at',
        'status'     => 'status',
    ];

    public function validate()
    {
        Model::validateRequired('finishedAt', $this->finishedAt, true);
        Model::validateRequired('masterUrl', $this->masterUrl, true);
        Model::validateRequired('createdAt', $this->createdAt, true);
        Model::validateRequired('status', $this->status, true);
    }

    public function toMap()
    {
        $res                = [];
        $res['finished_at'] = $this->finishedAt;
        $res['master_url']  = $this->masterUrl;
        $res['created_at']  = $this->createdAt;
        $res['status']      = $this->status;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tasks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['finished_at'])) {
            $model->finishedAt = $map['finished_at'];
        }
        if (isset($map['master_url'])) {
            $model->masterUrl = $map['master_url'];
        }
        if (isset($map['created_at'])) {
            $model->createdAt = $map['created_at'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
