// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dataworks_public20200518.Models
{
    public class ListTopicsResponse : TeaModel {
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
        public ListTopicsResponseData Data { get; set; }
        public class ListTopicsResponseData : TeaModel {
            [NameInMap("PageNumber")]
            [Validation(Required=true)]
            public int? PageNumber { get; set; }
            [NameInMap("PageSize")]
            [Validation(Required=true)]
            public int? PageSize { get; set; }
            [NameInMap("TotalCount")]
            [Validation(Required=true)]
            public int? TotalCount { get; set; }
            [NameInMap("Topics")]
            [Validation(Required=true)]
            public List<ListTopicsResponseDataTopics> Topics { get; set; }
            public class ListTopicsResponseDataTopics : TeaModel {
                    public long TopicId { get; set; }
                    public string TopicName { get; set; }
                    public string TopicStatus { get; set; }
                    public string TopicType { get; set; }
                    public long AddTime { get; set; }
                    public long HappenTime { get; set; }
                    public long FixTime { get; set; }
                    public long InstanceId { get; set; }
                    public long NodeId { get; set; }
                    public string NodeName { get; set; }
                    public string NodeOwner { get; set; }
                    public long ProjectId { get; set; }
            }
        };

    }

}
