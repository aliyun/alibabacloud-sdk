<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DescribeUserQuotaResponseBody extends Model {
    protected $_name = [
        'clusterQuota' => 'cluster_quota',
        'nodeQuota' => 'node_quota',
        'askClusterQuota' => 'ask_cluster_quota',
        'amkClusterQuota' => 'amk_cluster_quota',
    ];
    public function validate() {
        Model::validateRequired('clusterQuota', $this->clusterQuota, true);
        Model::validateRequired('nodeQuota', $this->nodeQuota, true);
        Model::validateRequired('askClusterQuota', $this->askClusterQuota, true);
        Model::validateRequired('amkClusterQuota', $this->amkClusterQuota, true);
    }
    public function toMap() {
        $res = [];
        $res['cluster_quota'] = $this->clusterQuota;
        $res['node_quota'] = $this->nodeQuota;
        $res['ask_cluster_quota'] = $this->askClusterQuota;
        $res['amk_cluster_quota'] = $this->amkClusterQuota;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeUserQuotaResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['cluster_quota'])){
            $model->clusterQuota = $map['cluster_quota'];
        }
        if(isset($map['node_quota'])){
            $model->nodeQuota = $map['node_quota'];
        }
        if(isset($map['ask_cluster_quota'])){
            $model->askClusterQuota = $map['ask_cluster_quota'];
        }
        if(isset($map['amk_cluster_quota'])){
            $model->amkClusterQuota = $map['amk_cluster_quota'];
        }
        return $model;
    }
    /**
     * @description cluster_quota
     * @var integer
     */
    public $clusterQuota;

    /**
     * @description node_quota
     * @var integer
     */
    public $nodeQuota;

    /**
     * @description ask_cluster_quota
     * @var integer
     */
    public $askClusterQuota;

    /**
     * @description amk_cluster_quota
     * @var integer
     */
    public $amkClusterQuota;

}
