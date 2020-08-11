<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\GetDhcpOptionsSetResponse;

use AlibabaCloud\Tea\Model;

class dhcpOptions extends Model
{
    /**
     * @var string
     */
    public $domainNameServers;

    /**
     * @var string
     */
    public $domainName;
    protected $_name = [
        'domainNameServers' => 'DomainNameServers',
        'domainName'        => 'DomainName',
    ];

    public function validate()
    {
        Model::validateRequired('domainNameServers', $this->domainNameServers, true);
        Model::validateRequired('domainName', $this->domainName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainNameServers) {
            $res['DomainNameServers'] = $this->domainNameServers;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dhcpOptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainNameServers'])) {
            $model->domainNameServers = $map['DomainNameServers'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        return $model;
    }
}
