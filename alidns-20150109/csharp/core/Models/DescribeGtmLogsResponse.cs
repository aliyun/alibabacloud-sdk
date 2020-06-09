// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Alidns20150109.Models
{
    public class DescribeGtmLogsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("TotalItems")]
        [Validation(Required=true)]
        public int? TotalItems { get; set; }

        [NameInMap("TotalPages")]
        [Validation(Required=true)]
        public int? TotalPages { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public int? PageSize { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("Logs")]
        [Validation(Required=true)]
        public DescribeGtmLogsResponseLogs Logs { get; set; }
        public class DescribeGtmLogsResponseLogs : TeaModel {
            [NameInMap("Log")]
            [Validation(Required=true)]
            public List<DescribeGtmLogsResponseLogsLog> Log { get; set; }
            public class DescribeGtmLogsResponseLogsLog : TeaModel {
                    public string OperTime { get; set; }
                    public string OperAction { get; set; }
                    public string EntityType { get; set; }
                    public string EntityId { get; set; }
                    public string EntityName { get; set; }
                    public string OperIp { get; set; }
                    public long OperTimestamp { get; set; }
                    public long Id { get; set; }
                    public string Content { get; set; }
            }
        };

    }

}
