// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class ModifyVpnConnectionAttributeResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("VpnConnectionId")]
        [Validation(Required=true)]
        public string VpnConnectionId { get; set; }

        [NameInMap("CustomerGatewayId")]
        [Validation(Required=true)]
        public string CustomerGatewayId { get; set; }

        [NameInMap("VpnGatewayId")]
        [Validation(Required=true)]
        public string VpnGatewayId { get; set; }

        [NameInMap("Name")]
        [Validation(Required=true)]
        public string Name { get; set; }

        [NameInMap("Description")]
        [Validation(Required=true)]
        public string Description { get; set; }

        [NameInMap("LocalSubnet")]
        [Validation(Required=true)]
        public string LocalSubnet { get; set; }

        [NameInMap("RemoteSubnet")]
        [Validation(Required=true)]
        public string RemoteSubnet { get; set; }

        [NameInMap("CreateTime")]
        [Validation(Required=true)]
        public long CreateTime { get; set; }

        [NameInMap("EffectImmediately")]
        [Validation(Required=true)]
        public bool? EffectImmediately { get; set; }

        [NameInMap("EnableDpd")]
        [Validation(Required=true)]
        public bool? EnableDpd { get; set; }

        [NameInMap("EnableNatTraversal")]
        [Validation(Required=true)]
        public bool? EnableNatTraversal { get; set; }

        [NameInMap("IkeConfig")]
        [Validation(Required=true)]
        public ModifyVpnConnectionAttributeResponseIkeConfig IkeConfig { get; set; }
        public class ModifyVpnConnectionAttributeResponseIkeConfig : TeaModel {
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
        };

        [NameInMap("IpsecConfig")]
        [Validation(Required=true)]
        public ModifyVpnConnectionAttributeResponseIpsecConfig IpsecConfig { get; set; }
        public class ModifyVpnConnectionAttributeResponseIpsecConfig : TeaModel {
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
        };

        [NameInMap("VcoHealthCheck")]
        [Validation(Required=true)]
        public ModifyVpnConnectionAttributeResponseVcoHealthCheck VcoHealthCheck { get; set; }
        public class ModifyVpnConnectionAttributeResponseVcoHealthCheck : TeaModel {
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
        };

        [NameInMap("VpnBgpConfig")]
        [Validation(Required=true)]
        public ModifyVpnConnectionAttributeResponseVpnBgpConfig VpnBgpConfig { get; set; }
        public class ModifyVpnConnectionAttributeResponseVpnBgpConfig : TeaModel {
            [NameInMap("EnableBgp")]
            [Validation(Required=true)]
            public string EnableBgp { get; set; }
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
            public int? LocalAsn { get; set; }
            [NameInMap("PeerAsn")]
            [Validation(Required=true)]
            public int? PeerAsn { get; set; }
            [NameInMap("Status")]
            [Validation(Required=true)]
            public string Status { get; set; }
        };

    }

}
