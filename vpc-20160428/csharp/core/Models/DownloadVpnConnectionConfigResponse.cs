// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class DownloadVpnConnectionConfigResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("VpnConnectionConfig")]
        [Validation(Required=true)]
        public DownloadVpnConnectionConfigResponseVpnConnectionConfig VpnConnectionConfig { get; set; }
        public class DownloadVpnConnectionConfigResponseVpnConnectionConfig : TeaModel {
            [NameInMap("LocalSubnet")]
            [Validation(Required=true)]
            public string LocalSubnet { get; set; }
            [NameInMap("RemoteSubnet")]
            [Validation(Required=true)]
            public string RemoteSubnet { get; set; }
            [NameInMap("Local")]
            [Validation(Required=true)]
            public string Local { get; set; }
            [NameInMap("Remote")]
            [Validation(Required=true)]
            public string Remote { get; set; }
            [NameInMap("IkeConfig")]
            [Validation(Required=true)]
            public DownloadVpnConnectionConfigResponseVpnConnectionConfigIkeConfig IkeConfig { get; set; }
            public class DownloadVpnConnectionConfigResponseVpnConnectionConfigIkeConfig : TeaModel {
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
            [NameInMap("IpsecConfig")]
            [Validation(Required=true)]
            public DownloadVpnConnectionConfigResponseVpnConnectionConfigIpsecConfig IpsecConfig { get; set; }
            public class DownloadVpnConnectionConfigResponseVpnConnectionConfigIpsecConfig : TeaModel {
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
        };

    }

}
