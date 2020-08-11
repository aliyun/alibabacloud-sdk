// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class DescribeVpnConnectionsResponse : TeaModel {
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

        [NameInMap("VpnConnections")]
        [Validation(Required=true)]
        public DescribeVpnConnectionsResponseVpnConnections VpnConnections { get; set; }
        public class DescribeVpnConnectionsResponseVpnConnections : TeaModel {
            [NameInMap("VpnConnection")]
            [Validation(Required=true)]
            public List<DescribeVpnConnectionsResponseVpnConnectionsVpnConnection> VpnConnection { get; set; }
            public class DescribeVpnConnectionsResponseVpnConnectionsVpnConnection : TeaModel {
                    public string VpnConnectionId { get; set; }
                    public string CustomerGatewayId { get; set; }
                    public string VpnGatewayId { get; set; }
                    public string Name { get; set; }
                    public string LocalSubnet { get; set; }
                    public string RemoteSubnet { get; set; }
                    public long CreateTime { get; set; }
                    public bool? EffectImmediately { get; set; }
                    public string Status { get; set; }
                    public bool? EnableDpd { get; set; }
                    public bool? EnableNatTraversal { get; set; }
                    public DescribeVpnConnectionsResponseVpnConnectionsVpnConnectionIkeConfig IkeConfig { get; set; }
                    public class DescribeVpnConnectionsResponseVpnConnectionsVpnConnectionIkeConfig : TeaModel {
                        [NameInMap("Psk")]
                        [Validation(Required=true)]
                        public string Psk { get; set; }

                        [NameInMap("IkeVersion")]
                        [Validation(Required=true)]
                        public string IkeVersion { get; set; }

                        [NameInMap("IkeMode")]
                        [Validation(Required=true)]
                        public string IkeMode { get; set; }

                        [NameInMap("IkeEncAlg")]
                        [Validation(Required=true)]
                        public string IkeEncAlg { get; set; }

                        [NameInMap("IkeAuthAlg")]
                        [Validation(Required=true)]
                        public string IkeAuthAlg { get; set; }

                        [NameInMap("IkePfs")]
                        [Validation(Required=true)]
                        public string IkePfs { get; set; }

                        [NameInMap("IkeLifetime")]
                        [Validation(Required=true)]
                        public long IkeLifetime { get; set; }

                        [NameInMap("LocalId")]
                        [Validation(Required=true)]
                        public string LocalId { get; set; }

                        [NameInMap("RemoteId")]
                        [Validation(Required=true)]
                        public string RemoteId { get; set; }

                    }
                    public DescribeVpnConnectionsResponseVpnConnectionsVpnConnectionIpsecConfig IpsecConfig { get; set; }
                    public class DescribeVpnConnectionsResponseVpnConnectionsVpnConnectionIpsecConfig : TeaModel {
                        [NameInMap("IpsecEncAlg")]
                        [Validation(Required=true)]
                        public string IpsecEncAlg { get; set; }

                        [NameInMap("IpsecAuthAlg")]
                        [Validation(Required=true)]
                        public string IpsecAuthAlg { get; set; }

                        [NameInMap("IpsecPfs")]
                        [Validation(Required=true)]
                        public string IpsecPfs { get; set; }

                        [NameInMap("IpsecLifetime")]
                        [Validation(Required=true)]
                        public long IpsecLifetime { get; set; }

                    }
                    public DescribeVpnConnectionsResponseVpnConnectionsVpnConnectionVcoHealthCheck VcoHealthCheck { get; set; }
                    public class DescribeVpnConnectionsResponseVpnConnectionsVpnConnectionVcoHealthCheck : TeaModel {
                        [NameInMap("Enable")]
                        [Validation(Required=true)]
                        public string Enable { get; set; }

                        [NameInMap("Sip")]
                        [Validation(Required=true)]
                        public string Sip { get; set; }

                        [NameInMap("Dip")]
                        [Validation(Required=true)]
                        public string Dip { get; set; }

                        [NameInMap("Interval")]
                        [Validation(Required=true)]
                        public int? Interval { get; set; }

                        [NameInMap("Retry")]
                        [Validation(Required=true)]
                        public int? Retry { get; set; }

                        [NameInMap("Status")]
                        [Validation(Required=true)]
                        public string Status { get; set; }

                    }
                    public DescribeVpnConnectionsResponseVpnConnectionsVpnConnectionVpnBgpConfig VpnBgpConfig { get; set; }
                    public class DescribeVpnConnectionsResponseVpnConnectionsVpnConnectionVpnBgpConfig : TeaModel {
                        [NameInMap("TunnelCidr")]
                        [Validation(Required=true)]
                        public string TunnelCidr { get; set; }

                        [NameInMap("LocalBgpIp")]
                        [Validation(Required=true)]
                        public string LocalBgpIp { get; set; }

                        [NameInMap("PeerBgpIp")]
                        [Validation(Required=true)]
                        public string PeerBgpIp { get; set; }

                        [NameInMap("LocalAsn")]
                        [Validation(Required=true)]
                        public string LocalAsn { get; set; }

                        [NameInMap("PeerAsn")]
                        [Validation(Required=true)]
                        public string PeerAsn { get; set; }

                        [NameInMap("Status")]
                        [Validation(Required=true)]
                        public string Status { get; set; }

                    }
            }
        };

    }

}
