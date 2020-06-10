<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDNSSLBSubDomainsResponse\slbSubDomains;

use AlibabaCloud\Tea\Model;

class slbSubDomain extends Model
{
    /**
     * @description subDomain
     *
     * @var string
     */
    public $subDomain;

    /**
     * @description recordCount
     *
     * @var int
     */
    public $recordCount;

    /**
     * @description open
     *
     * @var bool
     */
    public $open;

    /**
     * @description type
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'subDomain'   => 'SubDomain',
        'recordCount' => 'RecordCount',
        'open'        => 'Open',
        'type'        => 'Type',
    ];

    public function validate()
    {
        Model::validateRequired('subDomain', $this->subDomain, true);
        Model::validateRequired('recordCount', $this->recordCount, true);
        Model::validateRequired('open', $this->open, true);
        Model::validateRequired('type', $this->type, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->subDomain) {
            $res['SubDomain'] = $this->subDomain;
        }
        if (null !== $this->recordCount) {
            $res['RecordCount'] = $this->recordCount;
        }
        if (null !== $this->open) {
            $res['Open'] = $this->open;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return slbSubDomain
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SubDomain'])) {
            $model->subDomain = $map['SubDomain'];
        }
        if (isset($map['RecordCount'])) {
            $model->recordCount = $map['RecordCount'];
        }
        if (isset($map['Open'])) {
            $model->open = $map['Open'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
