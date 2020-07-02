// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dataworks_public20200518.Models
{
    public class GetInstanceResponse : TeaModel {
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

        [NameInMap("Success")]
        [Validation(Required=true)]
        public bool? Success { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public GetInstanceResponseData Data { get; set; }
        public class GetInstanceResponseData : TeaModel {
            [NameInMap("NodeId")]
            [Validation(Required=true)]
            public long NodeId { get; set; }
            [NameInMap("InstanceId")]
            [Validation(Required=true)]
            public long InstanceId { get; set; }
            [NameInMap("DagId")]
            [Validation(Required=true)]
            public long DagId { get; set; }
            [NameInMap("DagType")]
            [Validation(Required=true)]
            public string DagType { get; set; }
            [NameInMap("Status")]
            [Validation(Required=true)]
            public string Status { get; set; }
            [NameInMap("Bizdate")]
            [Validation(Required=true)]
            public long Bizdate { get; set; }
            [NameInMap("ParamValues")]
            [Validation(Required=true)]
            public string ParamValues { get; set; }
            [NameInMap("CycTime")]
            [Validation(Required=true)]
            public long CycTime { get; set; }
            [NameInMap("FinishTime")]
            [Validation(Required=true)]
            public long FinishTime { get; set; }
            [NameInMap("BeginWaitTimeTime")]
            [Validation(Required=true)]
            public long BeginWaitTimeTime { get; set; }
            [NameInMap("BeginWaitResTime")]
            [Validation(Required=true)]
            public long BeginWaitResTime { get; set; }
            [NameInMap("BeginRunningTime")]
            [Validation(Required=true)]
            public long BeginRunningTime { get; set; }
            [NameInMap("CreateTime")]
            [Validation(Required=true)]
            public long CreateTime { get; set; }
            [NameInMap("ModifyTime")]
            [Validation(Required=true)]
            public long ModifyTime { get; set; }
            [NameInMap("NodeName")]
            [Validation(Required=true)]
            public string NodeName { get; set; }
        };

    }

}
