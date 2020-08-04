// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeVirtualBorderRoutersResponse : TeaModel {
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

        [NameInMap("VirtualBorderRouterSet")]
        [Validation(Required=true)]
        public DescribeVirtualBorderRoutersResponseVirtualBorderRouterSet VirtualBorderRouterSet { get; set; }
        public class DescribeVirtualBorderRoutersResponseVirtualBorderRouterSet : TeaModel {
            [NameInMap("VirtualBorderRouterType")]
            [Validation(Required=true)]
            public List<DescribeVirtualBorderRoutersResponseVirtualBorderRouterSetVirtualBorderRouterType> VirtualBorderRouterType { get; set; }
            public class DescribeVirtualBorderRoutersResponseVirtualBorderRouterSetVirtualBorderRouterType : TeaModel {
                    public string VbrId { get; set; }
                    public string CreationTime { get; set; }
                    public string ActivationTime { get; set; }
                    public string TerminationTime { get; set; }
                    public string RecoveryTime { get; set; }
                    public string Status { get; set; }
                    public int? VlanId { get; set; }
                    public string CircuitCode { get; set; }
                    public string RouteTableId { get; set; }
                    public string VlanInterfaceId { get; set; }
                    public string LocalGatewayIp { get; set; }
                    public string PeerGatewayIp { get; set; }
                    public string PeeringSubnetMask { get; set; }
                    public string PhysicalConnectionId { get; set; }
                    public string PhysicalConnectionStatus { get; set; }
                    public string PhysicalConnectionBusinessStatus { get; set; }
                    public string PhysicalConnectionOwnerUid { get; set; }
                    public string AccessPointId { get; set; }
                    public string Name { get; set; }
                    public string Description { get; set; }
            }
        };

    }

}
