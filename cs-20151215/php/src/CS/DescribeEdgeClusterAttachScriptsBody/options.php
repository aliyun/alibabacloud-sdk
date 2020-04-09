<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\CS\DescribeEdgeClusterAttachScriptsBody;

use AlibabaCloud\Tea\Model;

class options extends Model
{
    /**
     * @description enableIptables
     *
     * @var bool
     */
    public $enableIptables;
    /**
     * @description flannelIface
     *
     * @var string
     */
    public $flannelIface;
    /**
     * @description gpuVersion
     *
     * @var string
     */
    public $gpuVersion;
    /**
     * @description manageRuntime
     *
     * @var bool
     */
    public $manageRuntime;
    /**
     * @description nodeName
     *
     * @var string
     */
    public $nodeName;
    /**
     * @description nodeNamePrefix
     *
     * @var string
     */
    public $nodeNamePrefix;
    /**
     * @description nodeNameStrategy
     *
     * @var bool
     */
    public $nodeNameStrategy;
    protected $_name = [
        'enableIptables'   => 'enableIptables',
        'flannelIface'     => 'flannelIface',
        'gpuVersion'       => 'gpuVersion',
        'manageRuntime'    => 'manageRuntime',
        'nodeName'         => 'nodeName',
        'nodeNamePrefix'   => 'nodeNamePrefix',
        'nodeNameStrategy' => 'nodeNameStrategy',
    ];

    public function validate()
    {
        Model::validateRequired('enableIptables', $this->enableIptables, true);
        Model::validateRequired('flannelIface', $this->flannelIface, true);
        Model::validateRequired('gpuVersion', $this->gpuVersion, true);
        Model::validateRequired('manageRuntime', $this->manageRuntime, true);
        Model::validateRequired('nodeName', $this->nodeName, true);
        Model::validateRequired('nodeNamePrefix', $this->nodeNamePrefix, true);
        Model::validateRequired('nodeNameStrategy', $this->nodeNameStrategy, true);
    }

    public function toMap()
    {
        $res                     = [];
        $res['enableIptables']   = $this->enableIptables;
        $res['flannelIface']     = $this->flannelIface;
        $res['gpuVersion']       = $this->gpuVersion;
        $res['manageRuntime']    = $this->manageRuntime;
        $res['nodeName']         = $this->nodeName;
        $res['nodeNamePrefix']   = $this->nodeNamePrefix;
        $res['nodeNameStrategy'] = $this->nodeNameStrategy;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return options
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['enableIptables'])) {
            $model->enableIptables = $map['enableIptables'];
        }
        if (isset($map['flannelIface'])) {
            $model->flannelIface = $map['flannelIface'];
        }
        if (isset($map['gpuVersion'])) {
            $model->gpuVersion = $map['gpuVersion'];
        }
        if (isset($map['manageRuntime'])) {
            $model->manageRuntime = $map['manageRuntime'];
        }
        if (isset($map['nodeName'])) {
            $model->nodeName = $map['nodeName'];
        }
        if (isset($map['nodeNamePrefix'])) {
            $model->nodeNamePrefix = $map['nodeNamePrefix'];
        }
        if (isset($map['nodeNameStrategy'])) {
            $model->nodeNameStrategy = $map['nodeNameStrategy'];
        }

        return $model;
    }
}
