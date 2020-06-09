// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Alidns20150109.Models
{
    public class DescribeGtmAccessStrategiesResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("TotalItems")]
        [Validation(Required=true)]
        public int? TotalItems { get; set; }

        [NameInMap("TotalPages")]
        [Validation(Required=true)]
        public int? TotalPages { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public int? PageSize { get; set; }

        [NameInMap("Strategies")]
        [Validation(Required=true)]
        public DescribeGtmAccessStrategiesResponseStrategies Strategies { get; set; }
        public class DescribeGtmAccessStrategiesResponseStrategies : TeaModel {
            [NameInMap("Strategy")]
            [Validation(Required=true)]
            public List<DescribeGtmAccessStrategiesResponseStrategiesStrategy> Strategy { get; set; }
            public class DescribeGtmAccessStrategiesResponseStrategiesStrategy : TeaModel {
                    public string StrategyId { get; set; }
                    public string StrategyName { get; set; }
                    public string CreateTime { get; set; }
                    public long CreateTimestamp { get; set; }
                    public string DefaultAddrPoolId { get; set; }
                    public string DefaultAddrPoolName { get; set; }
                    public string FailoverAddrPoolId { get; set; }
                    public string FailoverAddrPoolName { get; set; }
                    public string AccessMode { get; set; }
                    public string AccessStatus { get; set; }
                    public string StrategyMode { get; set; }
                    public string InstanceId { get; set; }
                    public string DefaultAddrPoolStatus { get; set; }
                    public string FailoverAddrPoolStatus { get; set; }
                    public string DefaultAddrPoolMonitorStatus { get; set; }
                    public string FailoverAddrPoolMonitorStatus { get; set; }
                    public DescribeGtmAccessStrategiesResponseStrategiesStrategyLines Lines { get; set; }
                    public class DescribeGtmAccessStrategiesResponseStrategiesStrategyLines : TeaModel {
                        [NameInMap("Line")]
                        [Validation(Required=true)]
                        public List<DescribeGtmAccessStrategiesResponseStrategiesStrategyLinesLine> Line { get; set; }
                        public class DescribeGtmAccessStrategiesResponseStrategiesStrategyLinesLine : TeaModel {
                            [NameInMap("LineCode")]
                            [Validation(Required=true)]
                            public string LineCode { get; set; }

                            [NameInMap("LineName")]
                            [Validation(Required=true)]
                            public string LineName { get; set; }

                            [NameInMap("GroupCode")]
                            [Validation(Required=true)]
                            public string GroupCode { get; set; }

                            [NameInMap("GroupName")]
                            [Validation(Required=true)]
                            public string GroupName { get; set; }

                        }

                    }
            }
        };

    }

}
