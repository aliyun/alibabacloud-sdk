// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Polardb20170801.Models
{
    public class DescribeDBClusterSSLResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Items")]
        [Validation(Required=true)]
        public List<DescribeDBClusterSSLResponseItems> Items { get; set; }
        public class DescribeDBClusterSSLResponseItems : TeaModel {
            [NameInMap("DBEndpointId")]
            [Validation(Required=true)]
            public string DBEndpointId { get; set; }

            [NameInMap("SSLEnabled")]
            [Validation(Required=true)]
            public string SSLEnabled { get; set; }

            [NameInMap("SSLConnectionString")]
            [Validation(Required=true)]
            public string SSLConnectionString { get; set; }

            [NameInMap("SSLExpireTime")]
            [Validation(Required=true)]
            public string SSLExpireTime { get; set; }

        }

    }

}
