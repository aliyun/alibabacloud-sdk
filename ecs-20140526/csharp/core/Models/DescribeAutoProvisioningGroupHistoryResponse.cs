// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeAutoProvisioningGroupHistoryResponse : TeaModel {
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

        [NameInMap("AutoProvisioningGroupHistories")]
        [Validation(Required=true)]
        public DescribeAutoProvisioningGroupHistoryResponseAutoProvisioningGroupHistories AutoProvisioningGroupHistories { get; set; }
        public class DescribeAutoProvisioningGroupHistoryResponseAutoProvisioningGroupHistories : TeaModel {
            [NameInMap("AutoProvisioningGroupHistory")]
            [Validation(Required=true)]
            public List<DescribeAutoProvisioningGroupHistoryResponseAutoProvisioningGroupHistoriesAutoProvisioningGroupHistory> AutoProvisioningGroupHistory { get; set; }
            public class DescribeAutoProvisioningGroupHistoryResponseAutoProvisioningGroupHistoriesAutoProvisioningGroupHistory : TeaModel {
                    public string TaskId { get; set; }
                    public string Status { get; set; }
                    public string LastEventTime { get; set; }
                    public string StartTime { get; set; }
                    public DescribeAutoProvisioningGroupHistoryResponseAutoProvisioningGroupHistoriesAutoProvisioningGroupHistoryActivityDetails ActivityDetails { get; set; }
                    public class DescribeAutoProvisioningGroupHistoryResponseAutoProvisioningGroupHistoriesAutoProvisioningGroupHistoryActivityDetails : TeaModel {
                        [NameInMap("ActivityDetail")]
                        [Validation(Required=true)]
                        public List<DescribeAutoProvisioningGroupHistoryResponseAutoProvisioningGroupHistoriesAutoProvisioningGroupHistoryActivityDetailsActivityDetail> ActivityDetail { get; set; }
                        public class DescribeAutoProvisioningGroupHistoryResponseAutoProvisioningGroupHistoriesAutoProvisioningGroupHistoryActivityDetailsActivityDetail : TeaModel {
                            [NameInMap("Detail")]
                            [Validation(Required=true)]
                            public string Detail { get; set; }

                            [NameInMap("Status")]
                            [Validation(Required=true)]
                            public string Status { get; set; }

                        }

                    }
            }
        };

    }

}
