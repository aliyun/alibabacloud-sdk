// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class CreateNatGatewayRequest : TeaModel {
        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("VpcId")]
        [Validation(Required=true)]
        public string VpcId { get; set; }

        [NameInMap("Name")]
        [Validation(Required=false)]
        public string Name { get; set; }

        [NameInMap("Description")]
        [Validation(Required=false)]
        public string Description { get; set; }

        [NameInMap("ClientToken")]
        [Validation(Required=false)]
        public string ClientToken { get; set; }

        [NameInMap("Spec")]
        [Validation(Required=false)]
        public string Spec { get; set; }

        [NameInMap("BandwidthPackage")]
        [Validation(Required=false)]
        public List<CreateNatGatewayRequestBandwidthPackage> BandwidthPackage { get; set; }
        public class CreateNatGatewayRequestBandwidthPackage : TeaModel {
            [NameInMap("IpCount")]
            [Validation(Required=true)]
            public int? IpCount { get; set; }

            [NameInMap("Bandwidth")]
            [Validation(Required=true)]
            public int? Bandwidth { get; set; }

            [NameInMap("Zone")]
            [Validation(Required=true)]
            public string Zone { get; set; }

            [NameInMap("ISP")]
            [Validation(Required=true)]
            public string ISP { get; set; }

        }

        [NameInMap("InstanceChargeType")]
        [Validation(Required=false)]
        public string InstanceChargeType { get; set; }

        [NameInMap("PricingCycle")]
        [Validation(Required=false)]
        public string PricingCycle { get; set; }

        [NameInMap("Duration")]
        [Validation(Required=false)]
        public string Duration { get; set; }

        [NameInMap("AutoPay")]
        [Validation(Required=false)]
        public bool? AutoPay { get; set; }

        [NameInMap("VSwitchId")]
        [Validation(Required=false)]
        public string VSwitchId { get; set; }

        [NameInMap("NatType")]
        [Validation(Required=false)]
        public string NatType { get; set; }

        [NameInMap("InternetChargeType")]
        [Validation(Required=false)]
        public string InternetChargeType { get; set; }

    }

}
