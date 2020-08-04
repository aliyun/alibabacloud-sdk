// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeInstanceHistoryEventsResponse : TeaModel {
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

        [NameInMap("InstanceSystemEventSet")]
        [Validation(Required=true)]
        public DescribeInstanceHistoryEventsResponseInstanceSystemEventSet InstanceSystemEventSet { get; set; }
        public class DescribeInstanceHistoryEventsResponseInstanceSystemEventSet : TeaModel {
            [NameInMap("InstanceSystemEventType")]
            [Validation(Required=true)]
            public List<DescribeInstanceHistoryEventsResponseInstanceSystemEventSetInstanceSystemEventType> InstanceSystemEventType { get; set; }
            public class DescribeInstanceHistoryEventsResponseInstanceSystemEventSetInstanceSystemEventType : TeaModel {
                    public string InstanceId { get; set; }
                    public string EventId { get; set; }
                    public string EventPublishTime { get; set; }
                    public string NotBefore { get; set; }
                    public string EventFinishTime { get; set; }
                    public string Reason { get; set; }
                    public string ImpactLevel { get; set; }
                    public DescribeInstanceHistoryEventsResponseInstanceSystemEventSetInstanceSystemEventTypeEventType EventType { get; set; }
                    public class DescribeInstanceHistoryEventsResponseInstanceSystemEventSetInstanceSystemEventTypeEventType : TeaModel {
                        [NameInMap("Code")]
                        [Validation(Required=true)]
                        public int? Code { get; set; }

                        [NameInMap("Name")]
                        [Validation(Required=true)]
                        public string Name { get; set; }

                    }
                    public DescribeInstanceHistoryEventsResponseInstanceSystemEventSetInstanceSystemEventTypeEventCycleStatus EventCycleStatus { get; set; }
                    public class DescribeInstanceHistoryEventsResponseInstanceSystemEventSetInstanceSystemEventTypeEventCycleStatus : TeaModel {
                        [NameInMap("Code")]
                        [Validation(Required=true)]
                        public int? Code { get; set; }

                        [NameInMap("Name")]
                        [Validation(Required=true)]
                        public string Name { get; set; }

                    }
                    public DescribeInstanceHistoryEventsResponseInstanceSystemEventSetInstanceSystemEventTypeExtendedAttribute ExtendedAttribute { get; set; }
                    public class DescribeInstanceHistoryEventsResponseInstanceSystemEventSetInstanceSystemEventTypeExtendedAttribute : TeaModel {
                        [NameInMap("DiskId")]
                        [Validation(Required=true)]
                        public string DiskId { get; set; }

                        [NameInMap("Device")]
                        [Validation(Required=true)]
                        public string Device { get; set; }

                        [NameInMap("InactiveDisks")]
                        [Validation(Required=true)]
                        public DescribeInstanceHistoryEventsResponseInstanceSystemEventSetInstanceSystemEventTypeExtendedAttributeInactiveDisks InactiveDisks { get; set; }
                        public class DescribeInstanceHistoryEventsResponseInstanceSystemEventSetInstanceSystemEventTypeExtendedAttributeInactiveDisks : TeaModel {
                            [NameInMap("InactiveDisk")]
                            [Validation(Required=true)]
                            public List<DescribeInstanceHistoryEventsResponseInstanceSystemEventSetInstanceSystemEventTypeExtendedAttributeInactiveDisksInactiveDisk> InactiveDisk { get; set; }
                            public class DescribeInstanceHistoryEventsResponseInstanceSystemEventSetInstanceSystemEventTypeExtendedAttributeInactiveDisksInactiveDisk : TeaModel {
                                    public string CreationTime { get; set; }
                                    public string ReleaseTime { get; set; }
                                    public string DeviceType { get; set; }
                                    public string DeviceCategory { get; set; }
                                    public string DeviceSize { get; set; }
                            }
                        };

                    }
            }
        };

    }

}
