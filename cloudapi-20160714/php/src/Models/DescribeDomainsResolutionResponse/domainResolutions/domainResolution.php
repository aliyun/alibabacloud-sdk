<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDomainsResolutionResponse\domainResolutions;

use AlibabaCloud\Tea\Model;

class domainResolution extends Model
{
    /**
     * @description domainName
     *
     * @var string
     */
    public $domainName;

    /**
     * @description domainNameResolution
     *
     * @var string
     */
    public $domainResolutionStatus;
    protected $_name = [
        'domainName'             => 'DomainName',
        'domainResolutionStatus' => 'DomainResolutionStatus',
    ];

    public function validate()
    {
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('domainResolutionStatus', $this->domainResolutionStatus, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->domainResolutionStatus) {
            $res['DomainResolutionStatus'] = $this->domainResolutionStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domainResolution
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['DomainResolutionStatus'])) {
            $model->domainResolutionStatus = $map['DomainResolutionStatus'];
        }

        return $model;
    }
}
