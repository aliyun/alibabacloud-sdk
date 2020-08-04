// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeTaskAttributeResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("TaskId")]
        [Validation(Required=true)]
        public string TaskId { get; set; }

        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("TaskAction")]
        [Validation(Required=true)]
        public string TaskAction { get; set; }

        [NameInMap("TaskStatus")]
        [Validation(Required=true)]
        public string TaskStatus { get; set; }

        [NameInMap("TaskProcess")]
        [Validation(Required=true)]
        public string TaskProcess { get; set; }

        [NameInMap("SupportCancel")]
        [Validation(Required=true)]
        public string SupportCancel { get; set; }

        [NameInMap("TotalCount")]
        [Validation(Required=true)]
        public int? TotalCount { get; set; }

        [NameInMap("SuccessCount")]
        [Validation(Required=true)]
        public int? SuccessCount { get; set; }

        [NameInMap("FailedCount")]
        [Validation(Required=true)]
        public int? FailedCount { get; set; }

        [NameInMap("CreationTime")]
        [Validation(Required=true)]
        public string CreationTime { get; set; }

        [NameInMap("FinishedTime")]
        [Validation(Required=true)]
        public string FinishedTime { get; set; }

        [NameInMap("OperationProgressSet")]
        [Validation(Required=true)]
        public DescribeTaskAttributeResponseOperationProgressSet OperationProgressSet { get; set; }
        public class DescribeTaskAttributeResponseOperationProgressSet : TeaModel {
            [NameInMap("OperationProgress")]
            [Validation(Required=true)]
            public List<DescribeTaskAttributeResponseOperationProgressSetOperationProgress> OperationProgress { get; set; }
            public class DescribeTaskAttributeResponseOperationProgressSetOperationProgress : TeaModel {
                    public string OperationStatus { get; set; }
                    public string ErrorCode { get; set; }
                    public string ErrorMsg { get; set; }
                    public DescribeTaskAttributeResponseOperationProgressSetOperationProgressRelatedItemSet RelatedItemSet { get; set; }
                    public class DescribeTaskAttributeResponseOperationProgressSetOperationProgressRelatedItemSet : TeaModel {
                        [NameInMap("RelatedItem")]
                        [Validation(Required=true)]
                        public List<DescribeTaskAttributeResponseOperationProgressSetOperationProgressRelatedItemSetRelatedItem> RelatedItem { get; set; }
                        public class DescribeTaskAttributeResponseOperationProgressSetOperationProgressRelatedItemSetRelatedItem : TeaModel {
                            [NameInMap("Name")]
                            [Validation(Required=true)]
                            public string Name { get; set; }

                            [NameInMap("Value")]
                            [Validation(Required=true)]
                            public string Value { get; set; }

                        }

                    }
            }
        };

    }

}
