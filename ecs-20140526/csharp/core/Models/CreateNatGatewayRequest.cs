// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
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

        [NameInMap("BandwidthPackage")]
        [Validation(Required=true)]
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

        }

    }

}
