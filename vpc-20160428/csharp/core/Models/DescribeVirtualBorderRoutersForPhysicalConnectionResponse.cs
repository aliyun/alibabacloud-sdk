// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class DescribeVirtualBorderRoutersForPhysicalConnectionResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public int? PageSize { get; set; }

        [NameInMap("TotalCount")]
        [Validation(Required=true)]
        public int? TotalCount { get; set; }

        [NameInMap("VirtualBorderRouterForPhysicalConnectionSet")]
        [Validation(Required=true)]
        public DescribeVirtualBorderRoutersForPhysicalConnectionResponseVirtualBorderRouterForPhysicalConnectionSet VirtualBorderRouterForPhysicalConnectionSet { get; set; }
        public class DescribeVirtualBorderRoutersForPhysicalConnectionResponseVirtualBorderRouterForPhysicalConnectionSet : TeaModel {
            [NameInMap("VirtualBorderRouterForPhysicalConnectionType")]
            [Validation(Required=true)]
            public List<DescribeVirtualBorderRoutersForPhysicalConnectionResponseVirtualBorderRouterForPhysicalConnectionSetVirtualBorderRouterForPhysicalConnectionType> VirtualBorderRouterForPhysicalConnectionType { get; set; }
            public class DescribeVirtualBorderRoutersForPhysicalConnectionResponseVirtualBorderRouterForPhysicalConnectionSetVirtualBorderRouterForPhysicalConnectionType : TeaModel {
                    public string VbrId { get; set; }
                    public long VbrOwnerUid { get; set; }
                    public string EccId { get; set; }
                    public string Type { get; set; }
                    public string CreationTime { get; set; }
                    public string ActivationTime { get; set; }
                    public string TerminationTime { get; set; }
                    public string RecoveryTime { get; set; }
                    public int? VlanId { get; set; }
                    public string Status { get; set; }
                    public string CircuitCode { get; set; }
                    public string LocalGatewayIp { get; set; }
                    public string PeerGatewayIp { get; set; }
                    public string PeeringSubnetMask { get; set; }
                    public string PConnVbrChargeType { get; set; }
                    public string PConnVbrExpireTime { get; set; }
                    public string PConnVbrBussinessStatus { get; set; }
                    public string Bandwidth { get; set; }
                    public string LocalIpv6GatewayIp { get; set; }
                    public string PeerIpv6GatewayIp { get; set; }
                    public string PeeringIpv6SubnetMask { get; set; }
                    public bool? EnableIpv6 { get; set; }
            }
        };

    }

}
