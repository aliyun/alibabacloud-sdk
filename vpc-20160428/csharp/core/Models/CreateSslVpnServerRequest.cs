// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class CreateSslVpnServerRequest : TeaModel {
        [NameInMap("ClientToken")]
        [Validation(Required=false)]
        public string ClientToken { get; set; }

        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("VpnGatewayId")]
        [Validation(Required=true)]
        public string VpnGatewayId { get; set; }

        [NameInMap("Name")]
        [Validation(Required=false)]
        public string Name { get; set; }

        [NameInMap("ClientIpPool")]
        [Validation(Required=true)]
        public string ClientIpPool { get; set; }

        [NameInMap("LocalSubnet")]
        [Validation(Required=true)]
        public string LocalSubnet { get; set; }

        [NameInMap("Proto")]
        [Validation(Required=false)]
        public string Proto { get; set; }

        [NameInMap("Cipher")]
        [Validation(Required=false)]
        public string Cipher { get; set; }

        [NameInMap("Port")]
        [Validation(Required=false)]
        public int? Port { get; set; }

        [NameInMap("Compress")]
        [Validation(Required=false)]
        public bool? Compress { get; set; }

        [NameInMap("EnableMultiFactorAuth")]
        [Validation(Required=false)]
        public bool? EnableMultiFactorAuth { get; set; }

        [NameInMap("IDaaSInstanceId")]
        [Validation(Required=false)]
        public string IDaaSInstanceId { get; set; }

    }

}
