// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class AllocateIpv6InternetBandwidthResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Ipv6AddressId")]
        [Validation(Required=true)]
        public string Ipv6AddressId { get; set; }

        [NameInMap("InternetBandwidthId")]
        [Validation(Required=true)]
        public string InternetBandwidthId { get; set; }

    }

}
