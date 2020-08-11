// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class DescribeIpv6GatewaysResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("TotalCount")]
        [Validation(Required=true)]
        public int? TotalCount { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public int? PageSize { get; set; }

        [NameInMap("Ipv6Gateways")]
        [Validation(Required=true)]
        public DescribeIpv6GatewaysResponseIpv6Gateways Ipv6Gateways { get; set; }
        public class DescribeIpv6GatewaysResponseIpv6Gateways : TeaModel {
            [NameInMap("Ipv6Gateway")]
            [Validation(Required=true)]
            public List<DescribeIpv6GatewaysResponseIpv6GatewaysIpv6Gateway> Ipv6Gateway { get; set; }
            public class DescribeIpv6GatewaysResponseIpv6GatewaysIpv6Gateway : TeaModel {
                    public string RegionId { get; set; }
                    public string Ipv6GatewayId { get; set; }
                    public string VpcId { get; set; }
                    public string Status { get; set; }
                    public string Name { get; set; }
                    public string Description { get; set; }
                    public string Spec { get; set; }
                    public string InstanceChargeType { get; set; }
                    public string BusinessStatus { get; set; }
                    public string ExpiredTime { get; set; }
                    public string CreationTime { get; set; }
            }
        };

    }

}
