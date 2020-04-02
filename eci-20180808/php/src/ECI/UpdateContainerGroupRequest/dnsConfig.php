<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\UpdateContainerGroupRequest;

use AlibabaCloud\Tea\Model;

class dnsConfig extends Model
{
    /**
     * @description dnsConfigNameServers
     *
     * @var array
     */
    public $nameServer;
    /**
     * @description dnsConfigSearches
     *
     * @var array
     */
    public $search;
    /**
     * @description dnsConfigOptions
     *
     * @var array
     */
    public $option;
    protected $_name = [
        'nameServer' => 'NameServer',
        'search'     => 'Search',
        'option'     => 'Option',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res               = [];
        $res['NameServer'] = [];
        if (null !== $this->nameServer) {
            $res['NameServer'] = $this->nameServer;
        }
        $res['Search'] = [];
        if (null !== $this->search) {
            $res['Search'] = $this->search;
        }
        $res['Option'] = [];
        if (null !== $this->option && \is_array($this->option)) {
            $n = 0;
            foreach ($this->option as $item) {
                $res['Option'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dnsConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NameServer'])) {
            if (!empty($map['NameServer'])) {
                $model->nameServer = [];
                $model->nameServer = $map['NameServer'];
            }
        }
        if (isset($map['Search'])) {
            if (!empty($map['Search'])) {
                $model->search = [];
                $model->search = $map['Search'];
            }
        }
        if (isset($map['Option'])) {
            if (!empty($map['Option'])) {
                $model->option = [];
                $n             = 0;
                foreach ($map['Option'] as $item) {
                    $model->option[$n++] = null !== $item ? UpdateContainerGroupRequest\dnsConfig\option::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
