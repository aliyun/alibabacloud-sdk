// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeDisksFullStatusResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("TotalCount")]
        [Validation(Required=true)]
        public int? TotalCount { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public int? PageSize { get; set; }

        [NameInMap("DiskFullStatusSet")]
        [Validation(Required=true)]
        public DescribeDisksFullStatusResponseDiskFullStatusSet DiskFullStatusSet { get; set; }
        public class DescribeDisksFullStatusResponseDiskFullStatusSet : TeaModel {
            [NameInMap("DiskFullStatusType")]
            [Validation(Required=true)]
            public List<DescribeDisksFullStatusResponseDiskFullStatusSetDiskFullStatusType> DiskFullStatusType { get; set; }
            public class DescribeDisksFullStatusResponseDiskFullStatusSetDiskFullStatusType : TeaModel {
                    public string DiskId { get; set; }
                    public string InstanceId { get; set; }
                    public string Device { get; set; }
                    public DescribeDisksFullStatusResponseDiskFullStatusSetDiskFullStatusTypeDiskEventSet DiskEventSet { get; set; }
                    public class DescribeDisksFullStatusResponseDiskFullStatusSetDiskFullStatusTypeDiskEventSet : TeaModel {
                        [NameInMap("DiskEventType")]
                        [Validation(Required=true)]
                        public List<DescribeDisksFullStatusResponseDiskFullStatusSetDiskFullStatusTypeDiskEventSetDiskEventType> DiskEventType { get; set; }
                        public class DescribeDisksFullStatusResponseDiskFullStatusSetDiskFullStatusTypeDiskEventSetDiskEventType : TeaModel {
                            [NameInMap("EventId")]
                            [Validation(Required=true)]
                            public string EventId { get; set; }

                            [NameInMap("EventTime")]
                            [Validation(Required=true)]
                            public string EventTime { get; set; }

                            [NameInMap("EventEndTime")]
                            [Validation(Required=true)]
                            public string EventEndTime { get; set; }

                            [NameInMap("ImpactLevel")]
                            [Validation(Required=true)]
                            public string ImpactLevel { get; set; }

                            [NameInMap("EventType")]
                            [Validation(Required=true)]
                            public DescribeDisksFullStatusResponseDiskFullStatusSetDiskFullStatusTypeDiskEventSetDiskEventTypeEventType EventType { get; set; }
                            public class DescribeDisksFullStatusResponseDiskFullStatusSetDiskFullStatusTypeDiskEventSetDiskEventTypeEventType : TeaModel {
                                [NameInMap("Code")]
                                [Validation(Required=true)]
                                public int? Code { get; set; }
                                [NameInMap("Name")]
                                [Validation(Required=true)]
                                public string Name { get; set; }
                            };

                        }

                    }
                    public DescribeDisksFullStatusResponseDiskFullStatusSetDiskFullStatusTypeStatus Status { get; set; }
                    public class DescribeDisksFullStatusResponseDiskFullStatusSetDiskFullStatusTypeStatus : TeaModel {
                        [NameInMap("Code")]
                        [Validation(Required=true)]
                        public int? Code { get; set; }

                        [NameInMap("Name")]
                        [Validation(Required=true)]
                        public string Name { get; set; }

                    }
                    public DescribeDisksFullStatusResponseDiskFullStatusSetDiskFullStatusTypeHealthStatus HealthStatus { get; set; }
                    public class DescribeDisksFullStatusResponseDiskFullStatusSetDiskFullStatusTypeHealthStatus : TeaModel {
                        [NameInMap("Code")]
                        [Validation(Required=true)]
                        public int? Code { get; set; }

                        [NameInMap("Name")]
                        [Validation(Required=true)]
                        public string Name { get; set; }

                    }
            }
        };

    }

}
