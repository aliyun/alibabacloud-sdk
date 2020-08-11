// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class DeleteIpv6InternetBandwidthRequest : TeaModel {
        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("Ipv6AddressId")]
        [Validation(Required=false)]
        public string Ipv6AddressId { get; set; }

        [NameInMap("Ipv6InternetBandwidthId")]
        [Validation(Required=false)]
        public string Ipv6InternetBandwidthId { get; set; }

    }

}
