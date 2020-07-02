// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dataworks_public20200518.Models
{
    public class GetNodeResponse : TeaModel {
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
        public GetNodeResponseData Data { get; set; }
        public class GetNodeResponseData : TeaModel {
            [NameInMap("NodeId")]
            [Validation(Required=true)]
            public long NodeId { get; set; }
            [NameInMap("OwnerId")]
            [Validation(Required=true)]
            public string OwnerId { get; set; }
            [NameInMap("Description")]
            [Validation(Required=true)]
            public string Description { get; set; }
            [NameInMap("ResGroupName")]
            [Validation(Required=true)]
            public string ResGroupName { get; set; }
            [NameInMap("NodeName")]
            [Validation(Required=true)]
            public string NodeName { get; set; }
            [NameInMap("CronExpress")]
            [Validation(Required=true)]
            public string CronExpress { get; set; }
            [NameInMap("Repeatability")]
            [Validation(Required=true)]
            public string Repeatability { get; set; }
            [NameInMap("ProgramType")]
            [Validation(Required=true)]
            public string ProgramType { get; set; }
            [NameInMap("ProjectId")]
            [Validation(Required=true)]
            public long ProjectId { get; set; }
            [NameInMap("SchedulerType")]
            [Validation(Required=true)]
            public string SchedulerType { get; set; }
            [NameInMap("ParamValues")]
            [Validation(Required=true)]
            public string ParamValues { get; set; }
        };

    }

}
