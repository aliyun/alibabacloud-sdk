// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Polardb20170801.Models
{
    public class DescribeDBClusterPerformanceResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("DBClusterId")]
        [Validation(Required=true)]
        public string DBClusterId { get; set; }

        [NameInMap("Engine")]
        [Validation(Required=true)]
        public string Engine { get; set; }

        [NameInMap("DBType")]
        [Validation(Required=true)]
        public string DBType { get; set; }

        [NameInMap("DBVersion")]
        [Validation(Required=true)]
        public string DBVersion { get; set; }

        [NameInMap("StartTime")]
        [Validation(Required=true)]
        public string StartTime { get; set; }

        [NameInMap("EndTime")]
        [Validation(Required=true)]
        public string EndTime { get; set; }

        [NameInMap("PerformanceKeys")]
        [Validation(Required=true)]
        public DescribeDBClusterPerformanceResponsePerformanceKeys PerformanceKeys { get; set; }
        public class DescribeDBClusterPerformanceResponsePerformanceKeys : TeaModel {
            [NameInMap("PerformanceItem")]
            [Validation(Required=true)]
            public List<DescribeDBClusterPerformanceResponsePerformanceKeysPerformanceItem> PerformanceItem { get; set; }
            public class DescribeDBClusterPerformanceResponsePerformanceKeysPerformanceItem : TeaModel {
                    public string DBNodeId { get; set; }
                    public string Measurement { get; set; }
                    public string MetricName { get; set; }
                    public DescribeDBClusterPerformanceResponsePerformanceKeysPerformanceItemPoints Points { get; set; }
                    public class DescribeDBClusterPerformanceResponsePerformanceKeysPerformanceItemPoints : TeaModel {
                        [NameInMap("PerformanceItemValue")]
                        [Validation(Required=true)]
                        public List<DescribeDBClusterPerformanceResponsePerformanceKeysPerformanceItemPointsPerformanceItemValue> PerformanceItemValue { get; set; }
                        public class DescribeDBClusterPerformanceResponsePerformanceKeysPerformanceItemPointsPerformanceItemValue : TeaModel {
                            [NameInMap("Value")]
                            [Validation(Required=true)]
                            public string Value { get; set; }

                            [NameInMap("Timestamp")]
                            [Validation(Required=true)]
                            public long Timestamp { get; set; }

                        }

                    }
            }
        };

    }

}
