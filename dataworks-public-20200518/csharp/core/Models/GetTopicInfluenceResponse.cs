// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dataworks_public20200518.Models
{
    public class GetTopicInfluenceResponse : TeaModel {
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
        public GetTopicInfluenceResponseData Data { get; set; }
        public class GetTopicInfluenceResponseData : TeaModel {
            [NameInMap("TopicId")]
            [Validation(Required=true)]
            public long TopicId { get; set; }
            [NameInMap("Influences")]
            [Validation(Required=true)]
            public List<GetTopicInfluenceResponseDataInfluences> Influences { get; set; }
            public class GetTopicInfluenceResponseDataInfluences : TeaModel {
                    public long BaselineId { get; set; }
                    public long Bizdate { get; set; }
                    public int? InGroupId { get; set; }
                    public string BaselineName { get; set; }
                    public string Owner { get; set; }
                    public string Status { get; set; }
                    public long ProjectId { get; set; }
                    public int? Priority { get; set; }
                    public long Buffer { get; set; }
            }
        };

    }

}
