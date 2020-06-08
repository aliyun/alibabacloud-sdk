// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class DescribeDBInstanceSSLResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("ConnectionString")]
        [Validation(Required=true)]
        public string ConnectionString { get; set; }

        [NameInMap("SSLExpireTime")]
        [Validation(Required=true)]
        public string SSLExpireTime { get; set; }

        [NameInMap("RequireUpdate")]
        [Validation(Required=true)]
        public string RequireUpdate { get; set; }

        [NameInMap("RequireUpdateReason")]
        [Validation(Required=true)]
        public string RequireUpdateReason { get; set; }

    }

}
