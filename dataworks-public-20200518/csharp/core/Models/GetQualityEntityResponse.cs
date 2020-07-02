// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dataworks_public20200518.Models
{
    public class GetQualityEntityResponse : TeaModel {
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
        public List<GetQualityEntityResponseData> Data { get; set; }
        public class GetQualityEntityResponseData : TeaModel {
            [NameInMap("Id")]
            [Validation(Required=true)]
            public long Id { get; set; }

            [NameInMap("ProjectName")]
            [Validation(Required=true)]
            public string ProjectName { get; set; }

            [NameInMap("TableName")]
            [Validation(Required=true)]
            public string TableName { get; set; }

            [NameInMap("EnvType")]
            [Validation(Required=true)]
            public string EnvType { get; set; }

            [NameInMap("MatchExpression")]
            [Validation(Required=true)]
            public string MatchExpression { get; set; }

            [NameInMap("EntityLevel")]
            [Validation(Required=true)]
            public int? EntityLevel { get; set; }

            [NameInMap("OnDuty")]
            [Validation(Required=true)]
            public string OnDuty { get; set; }

            [NameInMap("ModifyUser")]
            [Validation(Required=true)]
            public string ModifyUser { get; set; }

            [NameInMap("CreateTime")]
            [Validation(Required=true)]
            public long CreateTime { get; set; }

            [NameInMap("ModifyTime")]
            [Validation(Required=true)]
            public long ModifyTime { get; set; }

            [NameInMap("Sql")]
            [Validation(Required=true)]
            public int? Sql { get; set; }

            [NameInMap("Task")]
            [Validation(Required=true)]
            public int? Task { get; set; }

            [NameInMap("Followers")]
            [Validation(Required=true)]
            public string Followers { get; set; }

            [NameInMap("HasRelativeNode")]
            [Validation(Required=true)]
            public bool? HasRelativeNode { get; set; }

            [NameInMap("RelativeNode")]
            [Validation(Required=true)]
            public string RelativeNode { get; set; }

        }

    }

}
