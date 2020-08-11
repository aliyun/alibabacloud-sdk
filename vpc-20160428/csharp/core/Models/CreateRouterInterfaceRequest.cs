// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class CreateRouterInterfaceRequest : TeaModel {
        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("Role")]
        [Validation(Required=true)]
        public string Role { get; set; }

        [NameInMap("OppositeRegionId")]
        [Validation(Required=true)]
        public string OppositeRegionId { get; set; }

        [NameInMap("Spec")]
        [Validation(Required=true)]
        public string Spec { get; set; }

        [NameInMap("RouterType")]
        [Validation(Required=true)]
        public string RouterType { get; set; }

        [NameInMap("RouterId")]
        [Validation(Required=true)]
        public string RouterId { get; set; }

        [NameInMap("OppositeInterfaceId")]
        [Validation(Required=false)]
        public string OppositeInterfaceId { get; set; }

        [NameInMap("OppositeRouterId")]
        [Validation(Required=false)]
        public string OppositeRouterId { get; set; }

        [NameInMap("OppositeRouterType")]
        [Validation(Required=false)]
        public string OppositeRouterType { get; set; }

        [NameInMap("OppositeInterfaceOwnerId")]
        [Validation(Required=false)]
        public string OppositeInterfaceOwnerId { get; set; }

        [NameInMap("HealthCheckSourceIp")]
        [Validation(Required=false)]
        public string HealthCheckSourceIp { get; set; }

        [NameInMap("HealthCheckTargetIp")]
        [Validation(Required=false)]
        public string HealthCheckTargetIp { get; set; }

        [NameInMap("AccessPointId")]
        [Validation(Required=false)]
        public string AccessPointId { get; set; }

        [NameInMap("OppositeAccessPointId")]
        [Validation(Required=false)]
        public string OppositeAccessPointId { get; set; }

        [NameInMap("Description")]
        [Validation(Required=false)]
        public string Description { get; set; }

        [NameInMap("Name")]
        [Validation(Required=false)]
        public string Name { get; set; }

        [NameInMap("Period")]
        [Validation(Required=false)]
        public int? Period { get; set; }

        [NameInMap("InstanceChargeType")]
        [Validation(Required=false)]
        public string InstanceChargeType { get; set; }

        [NameInMap("AutoPay")]
        [Validation(Required=false)]
        public bool? AutoPay { get; set; }

        [NameInMap("PricingCycle")]
        [Validation(Required=false)]
        public string PricingCycle { get; set; }

        [NameInMap("ClientToken")]
        [Validation(Required=false)]
        public string ClientToken { get; set; }

    }

}
