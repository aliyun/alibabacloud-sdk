// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class AllocateIpv6InternetBandwidthRequest : TeaModel {
        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("Ipv6GatewayId")]
        [Validation(Required=true)]
        public string Ipv6GatewayId { get; set; }

        [NameInMap("Ipv6AddressId")]
        [Validation(Required=true)]
        public string Ipv6AddressId { get; set; }

        [NameInMap("InternetChargeType")]
        [Validation(Required=false)]
        public string InternetChargeType { get; set; }

        [NameInMap("Bandwidth")]
        [Validation(Required=true)]
        public int? Bandwidth { get; set; }

        [NameInMap("ClientToken")]
        [Validation(Required=false)]
        public string ClientToken { get; set; }

    }

}
