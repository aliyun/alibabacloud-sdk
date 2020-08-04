// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeNatGatewaysResponse : TeaModel {
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

        [NameInMap("NatGateways")]
        [Validation(Required=true)]
        public DescribeNatGatewaysResponseNatGateways NatGateways { get; set; }
        public class DescribeNatGatewaysResponseNatGateways : TeaModel {
            [NameInMap("NatGateway")]
            [Validation(Required=true)]
            public List<DescribeNatGatewaysResponseNatGatewaysNatGateway> NatGateway { get; set; }
            public class DescribeNatGatewaysResponseNatGatewaysNatGateway : TeaModel {
                    public string NatGatewayId { get; set; }
                    public string RegionId { get; set; }
                    public string Name { get; set; }
                    public string Description { get; set; }
                    public string VpcId { get; set; }
                    public string Spec { get; set; }
                    public string InstanceChargeType { get; set; }
                    public string BusinessStatus { get; set; }
                    public string CreationTime { get; set; }
                    public string Status { get; set; }
                    public DescribeNatGatewaysResponseNatGatewaysNatGatewayForwardTableIds ForwardTableIds { get; set; }
                    public class DescribeNatGatewaysResponseNatGatewaysNatGatewayForwardTableIds : TeaModel {
                        [NameInMap("ForwardTableId")]
                        [Validation(Required=true)]
                        public List<string> ForwardTableId { get; set; }

                    }
                    public DescribeNatGatewaysResponseNatGatewaysNatGatewayBandwidthPackageIds BandwidthPackageIds { get; set; }
                    public class DescribeNatGatewaysResponseNatGatewaysNatGatewayBandwidthPackageIds : TeaModel {
                        [NameInMap("BandwidthPackageId")]
                        [Validation(Required=true)]
                        public List<string> BandwidthPackageId { get; set; }

                    }
            }
        };

    }

}
