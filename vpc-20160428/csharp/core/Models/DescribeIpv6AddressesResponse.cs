// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class DescribeIpv6AddressesResponse : TeaModel {
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

        [NameInMap("Ipv6Addresses")]
        [Validation(Required=true)]
        public DescribeIpv6AddressesResponseIpv6Addresses Ipv6Addresses { get; set; }
        public class DescribeIpv6AddressesResponseIpv6Addresses : TeaModel {
            [NameInMap("Ipv6Address")]
            [Validation(Required=true)]
            public List<DescribeIpv6AddressesResponseIpv6AddressesIpv6Address> Ipv6Address { get; set; }
            public class DescribeIpv6AddressesResponseIpv6AddressesIpv6Address : TeaModel {
                    public string Ipv6AddressId { get; set; }
                    public string Ipv6AddressName { get; set; }
                    public string VSwitchId { get; set; }
                    public string VpcId { get; set; }
                    public string Ipv6GatewayId { get; set; }
                    public string Ipv6Address { get; set; }
                    public string AssociatedInstanceId { get; set; }
                    public string AssociatedInstanceType { get; set; }
                    public string Status { get; set; }
                    public string NetworkType { get; set; }
                    public int? RealBandwidth { get; set; }
                    public string AllocationTime { get; set; }
                    public DescribeIpv6AddressesResponseIpv6AddressesIpv6AddressIpv6InternetBandwidth Ipv6InternetBandwidth { get; set; }
                    public class DescribeIpv6AddressesResponseIpv6AddressesIpv6AddressIpv6InternetBandwidth : TeaModel {
                        [NameInMap("Bandwidth")]
                        [Validation(Required=true)]
                        public int? Bandwidth { get; set; }

                        [NameInMap("InstanceChargeType")]
                        [Validation(Required=true)]
                        public string InstanceChargeType { get; set; }

                        [NameInMap("InternetChargeType")]
                        [Validation(Required=true)]
                        public string InternetChargeType { get; set; }

                        [NameInMap("BusinessStatus")]
                        [Validation(Required=true)]
                        public string BusinessStatus { get; set; }

                        [NameInMap("Ipv6InternetBandwidthId")]
                        [Validation(Required=true)]
                        public string Ipv6InternetBandwidthId { get; set; }

                    }
            }
        };

    }

}
