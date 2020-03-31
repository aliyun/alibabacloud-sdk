<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\CreateContainerGroupRequest;

use AlibabaCloud\Tea\Model;

class dnsConfig extends Model
{
    public $nameServer;
    public $search;
    public $option;
    protected $_name = [
        'nameServer' => 'NameServer',
        'search'     => 'Search',
        'option'     => 'Option',
    ];
    protected $_description = [
        'nameServer' => 'dnsConfigNameServers',
        'search'     => 'dnsConfigSearches',
        'option'     => 'dnsConfigOptions',
    ];
}
