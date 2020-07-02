// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dataworks_public20200518.Models
{
    public class GetDeploymentResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

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

        [NameInMap("Data")]
        [Validation(Required=true)]
        public GetDeploymentResponseData Data { get; set; }
        public class GetDeploymentResponseData : TeaModel {
            [NameInMap("Deployment")]
            [Validation(Required=true)]
            public GetDeploymentResponseDataDeployment Deployment { get; set; }
            public class GetDeploymentResponseDataDeployment : TeaModel {
                [NameInMap("Name")]
                [Validation(Required=true)]
                public string Name { get; set; }

                [NameInMap("CreatorId")]
                [Validation(Required=true)]
                public string CreatorId { get; set; }

                [NameInMap("HandlerId")]
                [Validation(Required=true)]
                public string HandlerId { get; set; }

                [NameInMap("CreateTime")]
                [Validation(Required=true)]
                public long CreateTime { get; set; }

                [NameInMap("ExecuteTime")]
                [Validation(Required=true)]
                public long ExecuteTime { get; set; }

                [NameInMap("Status")]
                [Validation(Required=true)]
                public int? Status { get; set; }

                [NameInMap("FromEnvironment")]
                [Validation(Required=true)]
                public int? FromEnvironment { get; set; }

                [NameInMap("ToEnvironment")]
                [Validation(Required=true)]
                public int? ToEnvironment { get; set; }

                [NameInMap("ErrorMessage")]
                [Validation(Required=true)]
                public string ErrorMessage { get; set; }

            }
        };

    }

}
