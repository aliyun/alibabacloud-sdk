// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class DescribeSslVpnClientCertResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("SslVpnClientCertId")]
        [Validation(Required=true)]
        public string SslVpnClientCertId { get; set; }

        [NameInMap("Name")]
        [Validation(Required=true)]
        public string Name { get; set; }

        [NameInMap("SslVpnServerId")]
        [Validation(Required=true)]
        public string SslVpnServerId { get; set; }

        [NameInMap("CaCert")]
        [Validation(Required=true)]
        public string CaCert { get; set; }

        [NameInMap("ClientCert")]
        [Validation(Required=true)]
        public string ClientCert { get; set; }

        [NameInMap("ClientKey")]
        [Validation(Required=true)]
        public string ClientKey { get; set; }

        [NameInMap("ClientConfig")]
        [Validation(Required=true)]
        public string ClientConfig { get; set; }

        [NameInMap("CreateTime")]
        [Validation(Required=true)]
        public long CreateTime { get; set; }

        [NameInMap("EndTime")]
        [Validation(Required=true)]
        public long EndTime { get; set; }

        [NameInMap("Status")]
        [Validation(Required=true)]
        public string Status { get; set; }

    }

}
