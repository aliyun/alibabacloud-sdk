// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class DescribeSslVpnClientCertsResponse : TeaModel {
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

        [NameInMap("SslVpnClientCertKeys")]
        [Validation(Required=true)]
        public DescribeSslVpnClientCertsResponseSslVpnClientCertKeys SslVpnClientCertKeys { get; set; }
        public class DescribeSslVpnClientCertsResponseSslVpnClientCertKeys : TeaModel {
            [NameInMap("SslVpnClientCertKey")]
            [Validation(Required=true)]
            public List<DescribeSslVpnClientCertsResponseSslVpnClientCertKeysSslVpnClientCertKey> SslVpnClientCertKey { get; set; }
            public class DescribeSslVpnClientCertsResponseSslVpnClientCertKeysSslVpnClientCertKey : TeaModel {
                    public string RegionId { get; set; }
                    public string SslVpnClientCertId { get; set; }
                    public string Name { get; set; }
                    public string SslVpnServerId { get; set; }
                    public long CreateTime { get; set; }
                    public long EndTime { get; set; }
                    public string Status { get; set; }
            }
        };

    }

}
