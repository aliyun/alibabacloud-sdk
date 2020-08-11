// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class DescribeSslVpnServersResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("TotalCount")]
        [Validation(Required=true)]
        public int? TotalCount { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public int? PageSize { get; set; }

        [NameInMap("SslVpnServers")]
        [Validation(Required=true)]
        public DescribeSslVpnServersResponseSslVpnServers SslVpnServers { get; set; }
        public class DescribeSslVpnServersResponseSslVpnServers : TeaModel {
            [NameInMap("SslVpnServer")]
            [Validation(Required=true)]
            public List<DescribeSslVpnServersResponseSslVpnServersSslVpnServer> SslVpnServer { get; set; }
            public class DescribeSslVpnServersResponseSslVpnServersSslVpnServer : TeaModel {
                    public string RegionId { get; set; }
                    public string SslVpnServerId { get; set; }
                    public string VpnGatewayId { get; set; }
                    public string Name { get; set; }
                    public string LocalSubnet { get; set; }
                    public string ClientIpPool { get; set; }
                    public long CreateTime { get; set; }
                    public string Cipher { get; set; }
                    public string Proto { get; set; }
                    public int? Port { get; set; }
                    public bool? Compress { get; set; }
                    public int? Connections { get; set; }
                    public int? MaxConnections { get; set; }
                    public string InternetIp { get; set; }
                    public bool? EnableMultiFactorAuth { get; set; }
                    public string IDaaSInstanceId { get; set; }
            }
        };

    }

}
