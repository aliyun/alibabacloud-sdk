<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterAttachScriptsBody;

use AlibabaCloud\Tea\Model;

class options extends Model
{
    /**
     * @description flannelIface
     *
     * @var string
     */
    public $flannelIface;

    /**
     * @description enableIptables
     *
     * @var bool
     */
    public $enableIptables;

    /**
     * @description manageRuntime
     *
     * @var bool
     */
    public $manageRuntime;

    /**
     * @description nodeNameStrategy
     *
     * @var string
     */
    public $nodeNameStrategy;

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
    protected $_name = [
        'flannelIface'     => 'flannelIface',
        'enableIptables'   => 'enableIptables',
        'manageRuntime'    => 'manageRuntime',
        'nodeNameStrategy' => 'nodeNameStrategy',
        'nodeName'         => 'nodeName',
        'nodeNamePrefix'   => 'nodeNamePrefix',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flannelIface) {
            $res['flannelIface'] = $this->flannelIface;
        }
        if (null !== $this->enableIptables) {
            $res['enableIptables'] = $this->enableIptables;
        }
        if (null !== $this->manageRuntime) {
            $res['manageRuntime'] = $this->manageRuntime;
        }
        if (null !== $this->nodeNameStrategy) {
            $res['nodeNameStrategy'] = $this->nodeNameStrategy;
        }
        if (null !== $this->nodeName) {
            $res['nodeName'] = $this->nodeName;
        }
        if (null !== $this->nodeNamePrefix) {
            $res['nodeNamePrefix'] = $this->nodeNamePrefix;
        }

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
        if (isset($map['flannelIface'])) {
            $model->flannelIface = $map['flannelIface'];
        }
        if (isset($map['enableIptables'])) {
            $model->enableIptables = $map['enableIptables'];
        }
        if (isset($map['manageRuntime'])) {
            $model->manageRuntime = $map['manageRuntime'];
        }
        if (isset($map['nodeNameStrategy'])) {
            $model->nodeNameStrategy = $map['nodeNameStrategy'];
        }
        if (isset($map['nodeName'])) {
            $model->nodeName = $map['nodeName'];
        }
        if (isset($map['nodeNamePrefix'])) {
            $model->nodeNamePrefix = $map['nodeNamePrefix'];
        }

        return $model;
    }
}
