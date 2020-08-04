// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeInstancesFullStatusResponse : TeaModel {
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

        [NameInMap("InstanceFullStatusSet")]
        [Validation(Required=true)]
        public DescribeInstancesFullStatusResponseInstanceFullStatusSet InstanceFullStatusSet { get; set; }
        public class DescribeInstancesFullStatusResponseInstanceFullStatusSet : TeaModel {
            [NameInMap("InstanceFullStatusType")]
            [Validation(Required=true)]
            public List<DescribeInstancesFullStatusResponseInstanceFullStatusSetInstanceFullStatusType> InstanceFullStatusType { get; set; }
            public class DescribeInstancesFullStatusResponseInstanceFullStatusSetInstanceFullStatusType : TeaModel {
                    public string InstanceId { get; set; }
                    public DescribeInstancesFullStatusResponseInstanceFullStatusSetInstanceFullStatusTypeScheduledSystemEventSet ScheduledSystemEventSet { get; set; }
                    public class DescribeInstancesFullStatusResponseInstanceFullStatusSetInstanceFullStatusTypeScheduledSystemEventSet : TeaModel {
                        [NameInMap("ScheduledSystemEventType")]
                        [Validation(Required=true)]
                        public List<DescribeInstancesFullStatusResponseInstanceFullStatusSetInstanceFullStatusTypeScheduledSystemEventSetScheduledSystemEventType> ScheduledSystemEventType { get; set; }
                        public class DescribeInstancesFullStatusResponseInstanceFullStatusSetInstanceFullStatusTypeScheduledSystemEventSetScheduledSystemEventType : TeaModel {
                            [NameInMap("EventId")]
                            [Validation(Required=true)]
                            public string EventId { get; set; }

                            [NameInMap("EventPublishTime")]
                            [Validation(Required=true)]
                            public string EventPublishTime { get; set; }

                            [NameInMap("NotBefore")]
                            [Validation(Required=true)]
                            public string NotBefore { get; set; }

                            [NameInMap("Reason")]
                            [Validation(Required=true)]
                            public string Reason { get; set; }

                            [NameInMap("ImpactLevel")]
                            [Validation(Required=true)]
                            public string ImpactLevel { get; set; }

                            [NameInMap("EventCycleStatus")]
                            [Validation(Required=true)]
                            public DescribeInstancesFullStatusResponseInstanceFullStatusSetInstanceFullStatusTypeScheduledSystemEventSetScheduledSystemEventTypeEventCycleStatus EventCycleStatus { get; set; }
                            public class DescribeInstancesFullStatusResponseInstanceFullStatusSetInstanceFullStatusTypeScheduledSystemEventSetScheduledSystemEventTypeEventCycleStatus : TeaModel {
                                [NameInMap("Code")]
                                [Validation(Required=true)]
                                public int? Code { get; set; }
                                [NameInMap("Name")]
                                [Validation(Required=true)]
                                public string Name { get; set; }
                            };

                            [NameInMap("EventType")]
                            [Validation(Required=true)]
                            public DescribeInstancesFullStatusResponseInstanceFullStatusSetInstanceFullStatusTypeScheduledSystemEventSetScheduledSystemEventTypeEventType EventType { get; set; }
                            public class DescribeInstancesFullStatusResponseInstanceFullStatusSetInstanceFullStatusTypeScheduledSystemEventSetScheduledSystemEventTypeEventType : TeaModel {
                                [NameInMap("Code")]
                                [Validation(Required=true)]
                                public int? Code { get; set; }
                                [NameInMap("Name")]
                                [Validation(Required=true)]
                                public string Name { get; set; }
                            };

                            [NameInMap("ExtendedAttribute")]
                            [Validation(Required=true)]
                            public DescribeInstancesFullStatusResponseInstanceFullStatusSetInstanceFullStatusTypeScheduledSystemEventSetScheduledSystemEventTypeExtendedAttribute ExtendedAttribute { get; set; }
                            public class DescribeInstancesFullStatusResponseInstanceFullStatusSetInstanceFullStatusTypeScheduledSystemEventSetScheduledSystemEventTypeExtendedAttribute : TeaModel {
                                [NameInMap("DiskId")]
                                [Validation(Required=true)]
                                public string DiskId { get; set; }
                                [NameInMap("Device")]
                                [Validation(Required=true)]
                                public string Device { get; set; }
                                [NameInMap("InactiveDisks")]
                                [Validation(Required=true)]
                                public DescribeInstancesFullStatusResponseInstanceFullStatusSetInstanceFullStatusTypeScheduledSystemEventSetScheduledSystemEventTypeExtendedAttributeInactiveDisks InactiveDisks { get; set; }
                                public class DescribeInstancesFullStatusResponseInstanceFullStatusSetInstanceFullStatusTypeScheduledSystemEventSetScheduledSystemEventTypeExtendedAttributeInactiveDisks : TeaModel {
                                    [NameInMap("InactiveDisk")]
                                    [Validation(Required=true)]
                                    public List<DescribeInstancesFullStatusResponseInstanceFullStatusSetInstanceFullStatusTypeScheduledSystemEventSetScheduledSystemEventTypeExtendedAttributeInactiveDisksInactiveDisk> InactiveDisk { get; set; }
                                    public class DescribeInstancesFullStatusResponseInstanceFullStatusSetInstanceFullStatusTypeScheduledSystemEventSetScheduledSystemEventTypeExtendedAttributeInactiveDisksInactiveDisk : TeaModel {
                                        [NameInMap("CreationTime")]
                                        [Validation(Required=true)]
                                        public string CreationTime { get; set; }

                                        [NameInMap("ReleaseTime")]
                                        [Validation(Required=true)]
                                        public string ReleaseTime { get; set; }

                                        [NameInMap("DeviceType")]
                                        [Validation(Required=true)]
                                        public string DeviceType { get; set; }

                                        [NameInMap("DeviceCategory")]
                                        [Validation(Required=true)]
                                        public string DeviceCategory { get; set; }

                                        [NameInMap("DeviceSize")]
                                        [Validation(Required=true)]
                                        public string DeviceSize { get; set; }

                                    }

                                }
                            };

                        }

                    }
                    public DescribeInstancesFullStatusResponseInstanceFullStatusSetInstanceFullStatusTypeStatus Status { get; set; }
                    public class DescribeInstancesFullStatusResponseInstanceFullStatusSetInstanceFullStatusTypeStatus : TeaModel {
                        [NameInMap("Code")]
                        [Validation(Required=true)]
                        public int? Code { get; set; }

                        [NameInMap("Name")]
                        [Validation(Required=true)]
                        public string Name { get; set; }

                    }
                    public DescribeInstancesFullStatusResponseInstanceFullStatusSetInstanceFullStatusTypeHealthStatus HealthStatus { get; set; }
                    public class DescribeInstancesFullStatusResponseInstanceFullStatusSetInstanceFullStatusTypeHealthStatus : TeaModel {
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
