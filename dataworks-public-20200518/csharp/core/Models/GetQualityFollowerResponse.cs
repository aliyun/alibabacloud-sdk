// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dataworks_public20200518.Models
{
    public class GetQualityFollowerResponse : TeaModel {
        [NameInMap("ErrorCode")]
        [Validation(Required=true)]
        public string ErrorCode { get; set; }

        [NameInMap("Success")]
        [Validation(Required=true)]
        public bool? Success { get; set; }

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
        public List<GetQualityFollowerResponseData> Data { get; set; }
        public class GetQualityFollowerResponseData : TeaModel {
            [NameInMap("ProjectName")]
            [Validation(Required=true)]
            public string ProjectName { get; set; }

            [NameInMap("TableName")]
            [Validation(Required=true)]
            public string TableName { get; set; }

            [NameInMap("Id")]
            [Validation(Required=true)]
            public long Id { get; set; }

            [NameInMap("EntityId")]
            [Validation(Required=true)]
            public string EntityId { get; set; }

            [NameInMap("Follower")]
            [Validation(Required=true)]
            public string Follower { get; set; }

            [NameInMap("AlarmMode")]
            [Validation(Required=true)]
            public int? AlarmMode { get; set; }

        }

    }

}
