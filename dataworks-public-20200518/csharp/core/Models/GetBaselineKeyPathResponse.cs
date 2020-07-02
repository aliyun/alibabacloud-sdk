// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dataworks_public20200518.Models
{
    public class GetBaselineKeyPathResponse : TeaModel {
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
        public List<GetBaselineKeyPathResponseData> Data { get; set; }
        public class GetBaselineKeyPathResponseData : TeaModel {
            [NameInMap("InstanceId")]
            [Validation(Required=true)]
            public long InstanceId { get; set; }

            [NameInMap("ProjectId")]
            [Validation(Required=true)]
            public long ProjectId { get; set; }

            [NameInMap("NodeId")]
            [Validation(Required=true)]
            public long NodeId { get; set; }

            [NameInMap("NodeName")]
            [Validation(Required=true)]
            public string NodeName { get; set; }

            [NameInMap("Bizdate")]
            [Validation(Required=true)]
            public long Bizdate { get; set; }

            [NameInMap("InGroupId")]
            [Validation(Required=true)]
            public int? InGroupId { get; set; }

            [NameInMap("Owner")]
            [Validation(Required=true)]
            public string Owner { get; set; }

            [NameInMap("PrgType")]
            [Validation(Required=true)]
            public int? PrgType { get; set; }

            [NameInMap("Runs")]
            [Validation(Required=true)]
            public List<GetBaselineKeyPathResponseDataRuns> Runs { get; set; }
            public class GetBaselineKeyPathResponseDataRuns : TeaModel {
                [NameInMap("AbsTime")]
                [Validation(Required=true)]
                public long AbsTime { get; set; }

                [NameInMap("BeginCast")]
                [Validation(Required=true)]
                public long BeginCast { get; set; }

                [NameInMap("BeginRunningTime")]
                [Validation(Required=true)]
                public long BeginRunningTime { get; set; }

                [NameInMap("BeginWaitResTime")]
                [Validation(Required=true)]
                public long BeginWaitResTime { get; set; }

                [NameInMap("BeginWaitTimeTime")]
                [Validation(Required=true)]
                public long BeginWaitTimeTime { get; set; }

                [NameInMap("Bizdate")]
                [Validation(Required=true)]
                public long Bizdate { get; set; }

                [NameInMap("CycTime")]
                [Validation(Required=true)]
                public long CycTime { get; set; }

                [NameInMap("EndCast")]
                [Validation(Required=true)]
                public long EndCast { get; set; }

                [NameInMap("FinishTime")]
                [Validation(Required=true)]
                public long FinishTime { get; set; }

                [NameInMap("InGroupId")]
                [Validation(Required=true)]
                public int? InGroupId { get; set; }

                [NameInMap("InstanceId")]
                [Validation(Required=true)]
                public long InstanceId { get; set; }

                [NameInMap("NodeId")]
                [Validation(Required=true)]
                public long NodeId { get; set; }

                [NameInMap("NodeName")]
                [Validation(Required=true)]
                public string NodeName { get; set; }

                [NameInMap("Owner")]
                [Validation(Required=true)]
                public string Owner { get; set; }

                [NameInMap("ProjectId")]
                [Validation(Required=true)]
                public long ProjectId { get; set; }

                [NameInMap("Status")]
                [Validation(Required=true)]
                public string Status { get; set; }

            }

            [NameInMap("Topics")]
            [Validation(Required=true)]
            public List<GetBaselineKeyPathResponseDataTopics> Topics { get; set; }
            public class GetBaselineKeyPathResponseDataTopics : TeaModel {
                [NameInMap("InstanceId")]
                [Validation(Required=true)]
                public long InstanceId { get; set; }

                [NameInMap("TopicId")]
                [Validation(Required=true)]
                public long TopicId { get; set; }

                [NameInMap("TopicName")]
                [Validation(Required=true)]
                public long TopicName { get; set; }

                [NameInMap("AddTime")]
                [Validation(Required=true)]
                public long AddTime { get; set; }

            }

        }

    }

}
