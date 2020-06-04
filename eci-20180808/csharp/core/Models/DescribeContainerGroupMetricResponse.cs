// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Eci20180808.Models
{
    public class DescribeContainerGroupMetricResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("ContainerGroupId")]
        [Validation(Required=true)]
        public string ContainerGroupId { get; set; }

        [NameInMap("Records")]
        [Validation(Required=true)]
        public List<DescribeContainerGroupMetricResponseRecords> Records { get; set; }
        public class DescribeContainerGroupMetricResponseRecords : TeaModel {
            [NameInMap("Timestamp")]
            [Validation(Required=true)]
            public string Timestamp { get; set; }

            [NameInMap("Containers")]
            [Validation(Required=true)]
            public List<DescribeContainerGroupMetricResponseRecordsContainers> Containers { get; set; }
            public class DescribeContainerGroupMetricResponseRecordsContainers : TeaModel {
                [NameInMap("Name")]
                [Validation(Required=true)]
                public string Name { get; set; }

                [NameInMap("CPU")]
                [Validation(Required=true)]
                public DescribeContainerGroupMetricResponseRecordsContainersCPU CPU { get; set; }
                public class DescribeContainerGroupMetricResponseRecordsContainersCPU : TeaModel {
                    [NameInMap("UsageNanoCores")]
                    [Validation(Required=true)]
                    public long UsageNanoCores { get; set; }
                    [NameInMap("UsageCoreNanoSeconds")]
                    [Validation(Required=true)]
                    public long UsageCoreNanoSeconds { get; set; }
                    [NameInMap("Load")]
                    [Validation(Required=true)]
                    public long Load { get; set; }
                    [NameInMap("Limit")]
                    [Validation(Required=true)]
                    public long Limit { get; set; }
                };

                [NameInMap("Memory")]
                [Validation(Required=true)]
                public DescribeContainerGroupMetricResponseRecordsContainersMemory Memory { get; set; }
                public class DescribeContainerGroupMetricResponseRecordsContainersMemory : TeaModel {
                    [NameInMap("AvailableBytes")]
                    [Validation(Required=true)]
                    public long AvailableBytes { get; set; }
                    [NameInMap("UsageBytes")]
                    [Validation(Required=true)]
                    public long UsageBytes { get; set; }
                    [NameInMap("Cache")]
                    [Validation(Required=true)]
                    public long Cache { get; set; }
                    [NameInMap("WorkingSet")]
                    [Validation(Required=true)]
                    public long WorkingSet { get; set; }
                    [NameInMap("Rss")]
                    [Validation(Required=true)]
                    public long Rss { get; set; }
                };

            }

            [NameInMap("CPU")]
            [Validation(Required=true)]
            public DescribeContainerGroupMetricResponseRecordsCPU CPU { get; set; }
            public class DescribeContainerGroupMetricResponseRecordsCPU : TeaModel {
                [NameInMap("UsageNanoCores")]
                [Validation(Required=true)]
                public long UsageNanoCores { get; set; }
                [NameInMap("UsageCoreNanoSeconds")]
                [Validation(Required=true)]
                public long UsageCoreNanoSeconds { get; set; }
                [NameInMap("Load")]
                [Validation(Required=true)]
                public long Load { get; set; }
                [NameInMap("Limit")]
                [Validation(Required=true)]
                public long Limit { get; set; }
            };

            [NameInMap("Memory")]
            [Validation(Required=true)]
            public DescribeContainerGroupMetricResponseRecordsMemory Memory { get; set; }
            public class DescribeContainerGroupMetricResponseRecordsMemory : TeaModel {
                [NameInMap("AvailableBytes")]
                [Validation(Required=true)]
                public long AvailableBytes { get; set; }
                [NameInMap("UsageBytes")]
                [Validation(Required=true)]
                public long UsageBytes { get; set; }
                [NameInMap("Cache")]
                [Validation(Required=true)]
                public long Cache { get; set; }
                [NameInMap("WorkingSet")]
                [Validation(Required=true)]
                public long WorkingSet { get; set; }
                [NameInMap("Rss")]
                [Validation(Required=true)]
                public long Rss { get; set; }
            };

            [NameInMap("Network")]
            [Validation(Required=true)]
            public DescribeContainerGroupMetricResponseRecordsNetwork Network { get; set; }
            public class DescribeContainerGroupMetricResponseRecordsNetwork : TeaModel {
                [NameInMap("Interfaces")]
                [Validation(Required=true)]
                public List<DescribeContainerGroupMetricResponseRecordsNetworkInterfaces> Interfaces { get; set; }
                public class DescribeContainerGroupMetricResponseRecordsNetworkInterfaces : TeaModel {
                        public long TxBytes { get; set; }
                        public long RxBytes { get; set; }
                        public long TxErrors { get; set; }
                        public long RxErrors { get; set; }
                        public string Name { get; set; }
                }
            };

        }

    }

}
