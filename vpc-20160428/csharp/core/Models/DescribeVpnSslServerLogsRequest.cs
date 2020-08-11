// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class DescribeVpnSslServerLogsRequest : TeaModel {
        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("VpnSslServerId")]
        [Validation(Required=true)]
        public string VpnSslServerId { get; set; }

        [NameInMap("SslVpnClientCertId")]
        [Validation(Required=false)]
        public string SslVpnClientCertId { get; set; }

        [NameInMap("From")]
        [Validation(Required=false)]
        public int? From { get; set; }

        [NameInMap("To")]
        [Validation(Required=false)]
        public int? To { get; set; }

        [NameInMap("MinutePeriod")]
        [Validation(Required=false)]
        public int? MinutePeriod { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=false)]
        public int? PageNumber { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=false)]
        public int? PageSize { get; set; }

    }

}
