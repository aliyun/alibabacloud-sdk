// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
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
                    public string PConnVbrExpireTime { get; set; }
                    public string EccId { get; set; }
                    public string Type { get; set; }
                    public long MinTxInterval { get; set; }
                    public long MinRxInterval { get; set; }
                    public long DetectMultiplier { get; set; }
                    public string LocalIpv6GatewayIp { get; set; }
                    public string PeerIpv6GatewayIp { get; set; }
                    public string PeeringIpv6SubnetMask { get; set; }
                    public bool? EnableIpv6 { get; set; }
                    public DescribeVirtualBorderRoutersResponseVirtualBorderRouterSetVirtualBorderRouterTypeAssociatedPhysicalConnections AssociatedPhysicalConnections { get; set; }
                    public class DescribeVirtualBorderRoutersResponseVirtualBorderRouterSetVirtualBorderRouterTypeAssociatedPhysicalConnections : TeaModel {
                        [NameInMap("AssociatedPhysicalConnection")]
                        [Validation(Required=true)]
                        public List<DescribeVirtualBorderRoutersResponseVirtualBorderRouterSetVirtualBorderRouterTypeAssociatedPhysicalConnectionsAssociatedPhysicalConnection> AssociatedPhysicalConnection { get; set; }
                        public class DescribeVirtualBorderRoutersResponseVirtualBorderRouterSetVirtualBorderRouterTypeAssociatedPhysicalConnectionsAssociatedPhysicalConnection : TeaModel {
                            [NameInMap("CircuitCode")]
                            [Validation(Required=true)]
                            public string CircuitCode { get; set; }

                            [NameInMap("VlanInterfaceId")]
                            [Validation(Required=true)]
                            public string VlanInterfaceId { get; set; }

                            [NameInMap("LocalGatewayIp")]
                            [Validation(Required=true)]
                            public string LocalGatewayIp { get; set; }

                            [NameInMap("PeerGatewayIp")]
                            [Validation(Required=true)]
                            public string PeerGatewayIp { get; set; }

                            [NameInMap("PeeringSubnetMask")]
                            [Validation(Required=true)]
                            public string PeeringSubnetMask { get; set; }

                            [NameInMap("PhysicalConnectionId")]
                            [Validation(Required=true)]
                            public string PhysicalConnectionId { get; set; }

                            [NameInMap("PhysicalConnectionStatus")]
                            [Validation(Required=true)]
                            public string PhysicalConnectionStatus { get; set; }

                            [NameInMap("PhysicalConnectionBusinessStatus")]
                            [Validation(Required=true)]
                            public string PhysicalConnectionBusinessStatus { get; set; }

                            [NameInMap("PhysicalConnectionOwnerUid")]
                            [Validation(Required=true)]
                            public string PhysicalConnectionOwnerUid { get; set; }

                            [NameInMap("VlanId")]
                            [Validation(Required=true)]
                            public string VlanId { get; set; }

                            [NameInMap("LocalIpv6GatewayIp")]
                            [Validation(Required=true)]
                            public string LocalIpv6GatewayIp { get; set; }

                            [NameInMap("PeerIpv6GatewayIp")]
                            [Validation(Required=true)]
                            public string PeerIpv6GatewayIp { get; set; }

                            [NameInMap("PeeringIpv6SubnetMask")]
                            [Validation(Required=true)]
                            public string PeeringIpv6SubnetMask { get; set; }

                            [NameInMap("Status")]
                            [Validation(Required=true)]
                            public string Status { get; set; }

                        }

                    }
                    public DescribeVirtualBorderRoutersResponseVirtualBorderRouterSetVirtualBorderRouterTypeAssociatedCens AssociatedCens { get; set; }
                    public class DescribeVirtualBorderRoutersResponseVirtualBorderRouterSetVirtualBorderRouterTypeAssociatedCens : TeaModel {
                        [NameInMap("AssociatedCen")]
                        [Validation(Required=true)]
                        public List<DescribeVirtualBorderRoutersResponseVirtualBorderRouterSetVirtualBorderRouterTypeAssociatedCensAssociatedCen> AssociatedCen { get; set; }
                        public class DescribeVirtualBorderRoutersResponseVirtualBorderRouterSetVirtualBorderRouterTypeAssociatedCensAssociatedCen : TeaModel {
                            [NameInMap("CenId")]
                            [Validation(Required=true)]
                            public string CenId { get; set; }

                            [NameInMap("CenOwnerId")]
                            [Validation(Required=true)]
                            public long CenOwnerId { get; set; }

                            [NameInMap("CenStatus")]
                            [Validation(Required=true)]
                            public string CenStatus { get; set; }

                        }

                    }
            }
        };

    }

}
