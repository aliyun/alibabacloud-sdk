// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class DescribeRouterInterfacesResponse : TeaModel {
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

        [NameInMap("RouterInterfaceSet")]
        [Validation(Required=true)]
        public DescribeRouterInterfacesResponseRouterInterfaceSet RouterInterfaceSet { get; set; }
        public class DescribeRouterInterfacesResponseRouterInterfaceSet : TeaModel {
            [NameInMap("RouterInterfaceType")]
            [Validation(Required=true)]
            public List<DescribeRouterInterfacesResponseRouterInterfaceSetRouterInterfaceType> RouterInterfaceType { get; set; }
            public class DescribeRouterInterfacesResponseRouterInterfaceSetRouterInterfaceType : TeaModel {
                    public string RouterInterfaceId { get; set; }
                    public string OppositeRegionId { get; set; }
                    public string Role { get; set; }
                    public string Spec { get; set; }
                    public string Name { get; set; }
                    public string Description { get; set; }
                    public string RouterId { get; set; }
                    public string RouterType { get; set; }
                    public string CreationTime { get; set; }
                    public string EndTime { get; set; }
                    public string ChargeType { get; set; }
                    public string Status { get; set; }
                    public string BusinessStatus { get; set; }
                    public string ConnectedTime { get; set; }
                    public string OppositeInterfaceId { get; set; }
                    public string OppositeInterfaceSpec { get; set; }
                    public string OppositeInterfaceStatus { get; set; }
                    public string OppositeInterfaceBusinessStatus { get; set; }
                    public string OppositeRouterId { get; set; }
                    public string OppositeRouterType { get; set; }
                    public string OppositeInterfaceOwnerId { get; set; }
                    public string AccessPointId { get; set; }
                    public string OppositeAccessPointId { get; set; }
                    public string HealthCheckSourceIp { get; set; }
                    public string HealthCheckTargetIp { get; set; }
                    public string OppositeVpcInstanceId { get; set; }
                    public int? Bandwidth { get; set; }
                    public string VpcInstanceId { get; set; }
                    public int? OppositeBandwidth { get; set; }
                    public string HasReservationData { get; set; }
                    public string ReservationBandwidth { get; set; }
                    public string ReservationInternetChargeType { get; set; }
                    public string ReservationActiveTime { get; set; }
                    public string ReservationOrderType { get; set; }
                    public bool? CrossBorder { get; set; }
                    public int? HcThreshold { get; set; }
                    public int? HcRate { get; set; }
            }
        };

    }

}
