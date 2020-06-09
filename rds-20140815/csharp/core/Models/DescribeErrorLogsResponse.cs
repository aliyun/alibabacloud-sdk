// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class DescribeErrorLogsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("TotalRecordCount")]
        [Validation(Required=true)]
        public int? TotalRecordCount { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("PageRecordCount")]
        [Validation(Required=true)]
        public int? PageRecordCount { get; set; }

        [NameInMap("Items")]
        [Validation(Required=true)]
        public DescribeErrorLogsResponseItems Items { get; set; }
        public class DescribeErrorLogsResponseItems : TeaModel {
            [NameInMap("ErrorLog")]
            [Validation(Required=true)]
            public List<DescribeErrorLogsResponseItemsErrorLog> ErrorLog { get; set; }
            public class DescribeErrorLogsResponseItemsErrorLog : TeaModel {
                    public string ErrorInfo { get; set; }
                    public string CreateTime { get; set; }
            }
        };

    }

}
