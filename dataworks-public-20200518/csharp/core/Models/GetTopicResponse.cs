// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dataworks_public20200518.Models
{
    public class GetTopicResponse : TeaModel {
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
        public GetTopicResponseData Data { get; set; }
        public class GetTopicResponseData : TeaModel {
            [NameInMap("TopicId")]
            [Validation(Required=true)]
            public long TopicId { get; set; }
            [NameInMap("TopicName")]
            [Validation(Required=true)]
            public string TopicName { get; set; }
            [NameInMap("TopicStatus")]
            [Validation(Required=true)]
            public string TopicStatus { get; set; }
            [NameInMap("TopicType")]
            [Validation(Required=true)]
            public string TopicType { get; set; }
            [NameInMap("AddTime")]
            [Validation(Required=true)]
            public long AddTime { get; set; }
            [NameInMap("AlertTime")]
            [Validation(Required=true)]
            public long AlertTime { get; set; }
            [NameInMap("Assigner")]
            [Validation(Required=true)]
            public string Assigner { get; set; }
            [NameInMap("BaselineId")]
            [Validation(Required=true)]
            public long BaselineId { get; set; }
            [NameInMap("BaselineName")]
            [Validation(Required=true)]
            public string BaselineName { get; set; }
            [NameInMap("BaselineInGroupId")]
            [Validation(Required=true)]
            public int? BaselineInGroupId { get; set; }
            [NameInMap("BaselineStatus")]
            [Validation(Required=true)]
            public string BaselineStatus { get; set; }
            [NameInMap("BaselineBuffer")]
            [Validation(Required=true)]
            public long BaselineBuffer { get; set; }
            [NameInMap("Buffer")]
            [Validation(Required=true)]
            public long Buffer { get; set; }
            [NameInMap("DealTime")]
            [Validation(Required=true)]
            public long DealTime { get; set; }
            [NameInMap("DealUser")]
            [Validation(Required=true)]
            public string DealUser { get; set; }
            [NameInMap("FixTime")]
            [Validation(Required=true)]
            public long FixTime { get; set; }
            [NameInMap("HappenTime")]
            [Validation(Required=true)]
            public long HappenTime { get; set; }
            [NameInMap("InstanceId")]
            [Validation(Required=true)]
            public long InstanceId { get; set; }
            [NameInMap("NextAlertTime")]
            [Validation(Required=true)]
            public long NextAlertTime { get; set; }
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
        };

    }

}
