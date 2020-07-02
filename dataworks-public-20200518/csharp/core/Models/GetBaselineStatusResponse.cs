// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dataworks_public20200518.Models
{
    public class GetBaselineStatusResponse : TeaModel {
        [NameInMap("Success")]
        [Validation(Required=true)]
        public bool? Success { get; set; }

        [NameInMap("ErrorCode")]
        [Validation(Required=true)]
        public string ErrorCode { get; set; }

        [NameInMap("ErrorMessage")]
        [Validation(Required=true)]
        public string ErrorMessage { get; set; }

        [NameInMap("HttpStatusCode")]
        [Validation(Required=true)]
        public int? HttpStatusCode { get; set; }

        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public GetBaselineStatusResponseData Data { get; set; }
        public class GetBaselineStatusResponseData : TeaModel {
            [NameInMap("BaselineName")]
            [Validation(Required=true)]
            public string BaselineName { get; set; }
            [NameInMap("BaselineId")]
            [Validation(Required=true)]
            public long BaselineId { get; set; }
            [NameInMap("Bizdate")]
            [Validation(Required=true)]
            public long Bizdate { get; set; }
            [NameInMap("Owner")]
            [Validation(Required=true)]
            public string Owner { get; set; }
            [NameInMap("ExpTime")]
            [Validation(Required=true)]
            public long ExpTime { get; set; }
            [NameInMap("FinishTime")]
            [Validation(Required=true)]
            public long FinishTime { get; set; }
            [NameInMap("EndCast")]
            [Validation(Required=true)]
            public long EndCast { get; set; }
            [NameInMap("SlaTime")]
            [Validation(Required=true)]
            public long SlaTime { get; set; }
            [NameInMap("Priority")]
            [Validation(Required=true)]
            public int? Priority { get; set; }
            [NameInMap("ProjectId")]
            [Validation(Required=true)]
            public long ProjectId { get; set; }
            [NameInMap("Buffer")]
            [Validation(Required=true)]
            public float? Buffer { get; set; }
            [NameInMap("Status")]
            [Validation(Required=true)]
            public string Status { get; set; }
            [NameInMap("FinishStatus")]
            [Validation(Required=true)]
            public string FinishStatus { get; set; }
            [NameInMap("InGroupId")]
            [Validation(Required=true)]
            public int? InGroupId { get; set; }
            [NameInMap("LastInstance")]
            [Validation(Required=true)]
            public GetBaselineStatusResponseDataLastInstance LastInstance { get; set; }
            public class GetBaselineStatusResponseDataLastInstance : TeaModel {
                [NameInMap("InstanceId")]
                [Validation(Required=true)]
                public long InstanceId { get; set; }

                [NameInMap("Status")]
                [Validation(Required=true)]
                public string Status { get; set; }

                [NameInMap("ProjectId")]
                [Validation(Required=true)]
                public long ProjectId { get; set; }

                [NameInMap("Owner")]
                [Validation(Required=true)]
                public string Owner { get; set; }

                [NameInMap("NodeId")]
                [Validation(Required=true)]
                public long NodeId { get; set; }

                [NameInMap("FinishTime")]
                [Validation(Required=true)]
                public long FinishTime { get; set; }

                [NameInMap("EndCast")]
                [Validation(Required=true)]
                public long EndCast { get; set; }

                [NameInMap("NodeName")]
                [Validation(Required=true)]
                public string NodeName { get; set; }

            }
            [NameInMap("BlockInstance")]
            [Validation(Required=true)]
            public GetBaselineStatusResponseDataBlockInstance BlockInstance { get; set; }
            public class GetBaselineStatusResponseDataBlockInstance : TeaModel {
                [NameInMap("InstanceId")]
                [Validation(Required=true)]
                public long InstanceId { get; set; }

                [NameInMap("Status")]
                [Validation(Required=true)]
                public string Status { get; set; }

                [NameInMap("ProjectId")]
                [Validation(Required=true)]
                public long ProjectId { get; set; }

                [NameInMap("Owner")]
                [Validation(Required=true)]
                public string Owner { get; set; }

                [NameInMap("NodeId")]
                [Validation(Required=true)]
                public long NodeId { get; set; }

                [NameInMap("FinishTime")]
                [Validation(Required=true)]
                public long FinishTime { get; set; }

                [NameInMap("EndCast")]
                [Validation(Required=true)]
                public long EndCast { get; set; }

                [NameInMap("NodeName")]
                [Validation(Required=true)]
                public string NodeName { get; set; }

            }
        };

    }

}
