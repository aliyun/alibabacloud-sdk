// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class DescribeVpnSslServerLogsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Count")]
        [Validation(Required=true)]
        public int? Count { get; set; }

        [NameInMap("IsCompleted")]
        [Validation(Required=true)]
        public bool? IsCompleted { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public int? PageSize { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public DescribeVpnSslServerLogsResponseData Data { get; set; }
        public class DescribeVpnSslServerLogsResponseData : TeaModel {
            [NameInMap("Logs")]
            [Validation(Required=true)]
            public List<string> Logs { get; set; }
        };

    }

}
