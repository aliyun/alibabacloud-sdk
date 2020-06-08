// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class DescribeDBInstancePerformanceResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("DBInstanceId")]
        [Validation(Required=true)]
        public string DBInstanceId { get; set; }

        [NameInMap("Engine")]
        [Validation(Required=true)]
        public string Engine { get; set; }

        [NameInMap("StartTime")]
        [Validation(Required=true)]
        public string StartTime { get; set; }

        [NameInMap("EndTime")]
        [Validation(Required=true)]
        public string EndTime { get; set; }

        [NameInMap("PerformanceKeys")]
        [Validation(Required=true)]
        public DescribeDBInstancePerformanceResponsePerformanceKeys PerformanceKeys { get; set; }
        public class DescribeDBInstancePerformanceResponsePerformanceKeys : TeaModel {
            [NameInMap("PerformanceKey")]
            [Validation(Required=true)]
            public List<DescribeDBInstancePerformanceResponsePerformanceKeysPerformanceKey> PerformanceKey { get; set; }
            public class DescribeDBInstancePerformanceResponsePerformanceKeysPerformanceKey : TeaModel {
                    public string Key { get; set; }
                    public string Unit { get; set; }
                    public string ValueFormat { get; set; }
            }
        };

    }

}
