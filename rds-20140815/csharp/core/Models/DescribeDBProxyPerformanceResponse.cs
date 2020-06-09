// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class DescribeDBProxyPerformanceResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("DBInstanceId")]
        [Validation(Required=true)]
        public string DBInstanceId { get; set; }

        [NameInMap("StartTime")]
        [Validation(Required=true)]
        public string StartTime { get; set; }

        [NameInMap("EndTime")]
        [Validation(Required=true)]
        public string EndTime { get; set; }

        [NameInMap("PerformanceKeys")]
        [Validation(Required=true)]
        public DescribeDBProxyPerformanceResponsePerformanceKeys PerformanceKeys { get; set; }
        public class DescribeDBProxyPerformanceResponsePerformanceKeys : TeaModel {
            [NameInMap("PerformanceKey")]
            [Validation(Required=true)]
            public List<DescribeDBProxyPerformanceResponsePerformanceKeysPerformanceKey> PerformanceKey { get; set; }
            public class DescribeDBProxyPerformanceResponsePerformanceKeysPerformanceKey : TeaModel {
                    public string Key { get; set; }
                    public string ValueFormat { get; set; }
            }
        };

    }

}
