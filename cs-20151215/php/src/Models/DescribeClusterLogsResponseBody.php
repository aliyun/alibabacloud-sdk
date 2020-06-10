<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DescribeClusterLogsResponseBody extends Model
{
    /**
     * @description cluster_id
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description cluster_log
     *
     * @var string
     */
    public $clusterLog;

    /**
     * @description log_level
     *
     * @var string
     */
    public $logLevel;

    /**
     * @description created
     *
     * @var string
     */
    public $created;
    protected $_name = [
        'clusterId'  => 'cluster_id',
        'clusterLog' => 'cluster_log',
        'logLevel'   => 'log_level',
        'created'    => 'created',
    ];

    public function validate()
    {
        Model::validateRequired('clusterId', $this->clusterId, true);
        Model::validateRequired('clusterLog', $this->clusterLog, true);
        Model::validateRequired('logLevel', $this->logLevel, true);
        Model::validateRequired('created', $this->created, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['cluster_id'] = $this->clusterId;
        }
        if (null !== $this->clusterLog) {
            $res['cluster_log'] = $this->clusterLog;
        }
        if (null !== $this->logLevel) {
            $res['log_level'] = $this->logLevel;
        }
        if (null !== $this->created) {
            $res['created'] = $this->created;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClusterLogsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cluster_id'])) {
            $model->clusterId = $map['cluster_id'];
        }
        if (isset($map['cluster_log'])) {
            $model->clusterLog = $map['cluster_log'];
        }
        if (isset($map['log_level'])) {
            $model->logLevel = $map['log_level'];
        }
        if (isset($map['created'])) {
            $model->created = $map['created'];
        }

        return $model;
    }
}
