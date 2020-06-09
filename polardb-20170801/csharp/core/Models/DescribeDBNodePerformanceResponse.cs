// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Polardb20170801.Models
{
    public class DescribeDBNodePerformanceResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("DBNodeId")]
        [Validation(Required=true)]
        public string DBNodeId { get; set; }

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
        public DescribeDBNodePerformanceResponsePerformanceKeys PerformanceKeys { get; set; }
        public class DescribeDBNodePerformanceResponsePerformanceKeys : TeaModel {
            [NameInMap("PerformanceItem")]
            [Validation(Required=true)]
            public List<DescribeDBNodePerformanceResponsePerformanceKeysPerformanceItem> PerformanceItem { get; set; }
            public class DescribeDBNodePerformanceResponsePerformanceKeysPerformanceItem : TeaModel {
                    public string MetricName { get; set; }
                    public string Measurement { get; set; }
                    public DescribeDBNodePerformanceResponsePerformanceKeysPerformanceItemPoints Points { get; set; }
                    public class DescribeDBNodePerformanceResponsePerformanceKeysPerformanceItemPoints : TeaModel {
                        [NameInMap("PerformanceItemValue")]
                        [Validation(Required=true)]
                        public List<DescribeDBNodePerformanceResponsePerformanceKeysPerformanceItemPointsPerformanceItemValue> PerformanceItemValue { get; set; }
                        public class DescribeDBNodePerformanceResponsePerformanceKeysPerformanceItemPointsPerformanceItemValue : TeaModel {
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
