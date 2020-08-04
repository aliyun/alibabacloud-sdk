// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeInstanceMaintenanceAttributesResponse : TeaModel {
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

        [NameInMap("MaintenanceAttributes")]
        [Validation(Required=true)]
        public DescribeInstanceMaintenanceAttributesResponseMaintenanceAttributes MaintenanceAttributes { get; set; }
        public class DescribeInstanceMaintenanceAttributesResponseMaintenanceAttributes : TeaModel {
            [NameInMap("MaintenanceAttribute")]
            [Validation(Required=true)]
            public List<DescribeInstanceMaintenanceAttributesResponseMaintenanceAttributesMaintenanceAttribute> MaintenanceAttribute { get; set; }
            public class DescribeInstanceMaintenanceAttributesResponseMaintenanceAttributesMaintenanceAttribute : TeaModel {
                    public string InstanceId { get; set; }
                    public DescribeInstanceMaintenanceAttributesResponseMaintenanceAttributesMaintenanceAttributeMaintenanceWindows MaintenanceWindows { get; set; }
                    public class DescribeInstanceMaintenanceAttributesResponseMaintenanceAttributesMaintenanceAttributeMaintenanceWindows : TeaModel {
                        [NameInMap("MaintenanceWindow")]
                        [Validation(Required=true)]
                        public List<DescribeInstanceMaintenanceAttributesResponseMaintenanceAttributesMaintenanceAttributeMaintenanceWindowsMaintenanceWindow> MaintenanceWindow { get; set; }
                        public class DescribeInstanceMaintenanceAttributesResponseMaintenanceAttributesMaintenanceAttributeMaintenanceWindowsMaintenanceWindow : TeaModel {
                            [NameInMap("StartTime")]
                            [Validation(Required=true)]
                            public string StartTime { get; set; }

                            [NameInMap("EndTime")]
                            [Validation(Required=true)]
                            public string EndTime { get; set; }

                        }

                    }
                    public DescribeInstanceMaintenanceAttributesResponseMaintenanceAttributesMaintenanceAttributeActionOnMaintenance ActionOnMaintenance { get; set; }
                    public class DescribeInstanceMaintenanceAttributesResponseMaintenanceAttributesMaintenanceAttributeActionOnMaintenance : TeaModel {
                        [NameInMap("Value")]
                        [Validation(Required=true)]
                        public string Value { get; set; }

                        [NameInMap("DefaultValue")]
                        [Validation(Required=true)]
                        public string DefaultValue { get; set; }

                        [NameInMap("SupportedValues")]
                        [Validation(Required=true)]
                        public DescribeInstanceMaintenanceAttributesResponseMaintenanceAttributesMaintenanceAttributeActionOnMaintenanceSupportedValues SupportedValues { get; set; }
                        public class DescribeInstanceMaintenanceAttributesResponseMaintenanceAttributesMaintenanceAttributeActionOnMaintenanceSupportedValues : TeaModel {
                            [NameInMap("SupportedValue")]
                            [Validation(Required=true)]
                            public List<string> SupportedValue { get; set; }
                        };

                    }
            }
        };

    }

}
