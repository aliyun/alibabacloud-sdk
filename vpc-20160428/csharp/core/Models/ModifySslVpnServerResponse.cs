// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class ModifySslVpnServerResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("SslVpnServerId")]
        [Validation(Required=true)]
        public string SslVpnServerId { get; set; }

        [NameInMap("VpnGatewayId")]
        [Validation(Required=true)]
        public string VpnGatewayId { get; set; }

        [NameInMap("Name")]
        [Validation(Required=true)]
        public string Name { get; set; }

        [NameInMap("LocalSubnet")]
        [Validation(Required=true)]
        public string LocalSubnet { get; set; }

        [NameInMap("ClientIpPool")]
        [Validation(Required=true)]
        public string ClientIpPool { get; set; }

        [NameInMap("CreateTime")]
        [Validation(Required=true)]
        public long CreateTime { get; set; }

        [NameInMap("Cipher")]
        [Validation(Required=true)]
        public string Cipher { get; set; }

        [NameInMap("Proto")]
        [Validation(Required=true)]
        public string Proto { get; set; }

        [NameInMap("Port")]
        [Validation(Required=true)]
        public int? Port { get; set; }

        [NameInMap("Compress")]
        [Validation(Required=true)]
        public bool? Compress { get; set; }

        [NameInMap("Connections")]
        [Validation(Required=true)]
        public int? Connections { get; set; }

        [NameInMap("MaxConnections")]
        [Validation(Required=true)]
        public int? MaxConnections { get; set; }

        [NameInMap("InternetIp")]
        [Validation(Required=true)]
        public string InternetIp { get; set; }

        [NameInMap("EnableMultiFactorAuth")]
        [Validation(Required=true)]
        public bool? EnableMultiFactorAuth { get; set; }

        [NameInMap("IDaaSInstanceId")]
        [Validation(Required=true)]
        public string IDaaSInstanceId { get; set; }

    }

}
