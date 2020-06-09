// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Alidns20150109.Models
{
    public class DescribeGtmRecoveryPlansResponse : TeaModel {
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

        [NameInMap("RecoveryPlans")]
        [Validation(Required=true)]
        public DescribeGtmRecoveryPlansResponseRecoveryPlans RecoveryPlans { get; set; }
        public class DescribeGtmRecoveryPlansResponseRecoveryPlans : TeaModel {
            [NameInMap("RecoveryPlan")]
            [Validation(Required=true)]
            public List<DescribeGtmRecoveryPlansResponseRecoveryPlansRecoveryPlan> RecoveryPlan { get; set; }
            public class DescribeGtmRecoveryPlansResponseRecoveryPlansRecoveryPlan : TeaModel {
                    public long RecoveryPlanId { get; set; }
                    public string Name { get; set; }
                    public string Remark { get; set; }
                    public int? FaultAddrPoolNum { get; set; }
                    public string LastExecuteTime { get; set; }
                    public long LastExecuteTimestamp { get; set; }
                    public string LastRollbackTime { get; set; }
                    public long LastRollbackTimestamp { get; set; }
                    public string CreateTime { get; set; }
                    public long CreateTimestamp { get; set; }
                    public string UpdateTime { get; set; }
                    public long UpdateTimestamp { get; set; }
                    public string Status { get; set; }
            }
        };

    }

}
