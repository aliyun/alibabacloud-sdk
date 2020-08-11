// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class DescribeRouterInterfaceAttributeResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Code")]
        [Validation(Required=true)]
        public string Code { get; set; }

        [NameInMap("Message")]
        [Validation(Required=true)]
        public string Message { get; set; }

        [NameInMap("Success")]
        [Validation(Required=true)]
        public bool? Success { get; set; }

        [NameInMap("RouterInterfaceId")]
        [Validation(Required=true)]
        public string RouterInterfaceId { get; set; }

        [NameInMap("OppositeRegionId")]
        [Validation(Required=true)]
        public string OppositeRegionId { get; set; }

        [NameInMap("Role")]
        [Validation(Required=true)]
        public string Role { get; set; }

        [NameInMap("Spec")]
        [Validation(Required=true)]
        public string Spec { get; set; }

        [NameInMap("Name")]
        [Validation(Required=true)]
        public string Name { get; set; }

        [NameInMap("Description")]
        [Validation(Required=true)]
        public string Description { get; set; }

        [NameInMap("RouterId")]
        [Validation(Required=true)]
        public string RouterId { get; set; }

        [NameInMap("RouterType")]
        [Validation(Required=true)]
        public string RouterType { get; set; }

        [NameInMap("CreationTime")]
        [Validation(Required=true)]
        public string CreationTime { get; set; }

        [NameInMap("GmtModified")]
        [Validation(Required=true)]
        public string GmtModified { get; set; }

        [NameInMap("EndTime")]
        [Validation(Required=true)]
        public string EndTime { get; set; }

        [NameInMap("ChargeType")]
        [Validation(Required=true)]
        public string ChargeType { get; set; }

        [NameInMap("Status")]
        [Validation(Required=true)]
        public string Status { get; set; }

        [NameInMap("BusinessStatus")]
        [Validation(Required=true)]
        public string BusinessStatus { get; set; }

        [NameInMap("ConnectedTime")]
        [Validation(Required=true)]
        public string ConnectedTime { get; set; }

        [NameInMap("OppositeInterfaceId")]
        [Validation(Required=true)]
        public string OppositeInterfaceId { get; set; }

        [NameInMap("OppositeInterfaceSpec")]
        [Validation(Required=true)]
        public string OppositeInterfaceSpec { get; set; }

        [NameInMap("OppositeInterfaceStatus")]
        [Validation(Required=true)]
        public string OppositeInterfaceStatus { get; set; }

        [NameInMap("OppositeInterfaceBusinessStatus")]
        [Validation(Required=true)]
        public string OppositeInterfaceBusinessStatus { get; set; }

        [NameInMap("OppositeRouterId")]
        [Validation(Required=true)]
        public string OppositeRouterId { get; set; }

        [NameInMap("OppositeRouterType")]
        [Validation(Required=true)]
        public string OppositeRouterType { get; set; }

        [NameInMap("OppositeInterfaceOwnerId")]
        [Validation(Required=true)]
        public string OppositeInterfaceOwnerId { get; set; }

        [NameInMap("AccessPointId")]
        [Validation(Required=true)]
        public string AccessPointId { get; set; }

        [NameInMap("OppositeAccessPointId")]
        [Validation(Required=true)]
        public string OppositeAccessPointId { get; set; }

        [NameInMap("HealthCheckSourceIp")]
        [Validation(Required=true)]
        public string HealthCheckSourceIp { get; set; }

        [NameInMap("HealthCheckTargetIp")]
        [Validation(Required=true)]
        public string HealthCheckTargetIp { get; set; }

        [NameInMap("OppositeVpcInstanceId")]
        [Validation(Required=true)]
        public string OppositeVpcInstanceId { get; set; }

        [NameInMap("Bandwidth")]
        [Validation(Required=true)]
        public int? Bandwidth { get; set; }

        [NameInMap("VpcInstanceId")]
        [Validation(Required=true)]
        public string VpcInstanceId { get; set; }

        [NameInMap("OppositeBandwidth")]
        [Validation(Required=true)]
        public int? OppositeBandwidth { get; set; }

        [NameInMap("HasReservationData")]
        [Validation(Required=true)]
        public string HasReservationData { get; set; }

        [NameInMap("ReservationBandwidth")]
        [Validation(Required=true)]
        public string ReservationBandwidth { get; set; }

        [NameInMap("ReservationInternetChargeType")]
        [Validation(Required=true)]
        public string ReservationInternetChargeType { get; set; }

        [NameInMap("ReservationActiveTime")]
        [Validation(Required=true)]
        public string ReservationActiveTime { get; set; }

        [NameInMap("ReservationOrderType")]
        [Validation(Required=true)]
        public string ReservationOrderType { get; set; }

        [NameInMap("CrossBorder")]
        [Validation(Required=true)]
        public bool? CrossBorder { get; set; }

        [NameInMap("HcThreshold")]
        [Validation(Required=true)]
        public int? HcThreshold { get; set; }

        [NameInMap("HcRate")]
        [Validation(Required=true)]
        public int? HcRate { get; set; }

        [NameInMap("HealthCheckStatus")]
        [Validation(Required=true)]
        public string HealthCheckStatus { get; set; }

    }

}
