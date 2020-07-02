// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dataworks_public20200518.Models
{
    public class ListNodesResponse : TeaModel {
        [NameInMap("Success")]
        [Validation(Required=true)]
        public bool? Success { get; set; }

        [NameInMap("HttpStatusCode")]
        [Validation(Required=true)]
        public int? HttpStatusCode { get; set; }

        [NameInMap("ErrorCode")]
        [Validation(Required=true)]
        public string ErrorCode { get; set; }

        [NameInMap("ErrorMessage")]
        [Validation(Required=true)]
        public string ErrorMessage { get; set; }

        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public ListNodesResponseData Data { get; set; }
        public class ListNodesResponseData : TeaModel {
            [NameInMap("PageNumber")]
            [Validation(Required=true)]
            public int? PageNumber { get; set; }
            [NameInMap("PageSize")]
            [Validation(Required=true)]
            public int? PageSize { get; set; }
            [NameInMap("TotalCount")]
            [Validation(Required=true)]
            public int? TotalCount { get; set; }
            [NameInMap("Nodes")]
            [Validation(Required=true)]
            public List<ListNodesResponseDataNodes> Nodes { get; set; }
            public class ListNodesResponseDataNodes : TeaModel {
                    public long NodeId { get; set; }
                    public string NodeName { get; set; }
                    public string CronExpress { get; set; }
                    public string SchedulerType { get; set; }
                    public string ProgramType { get; set; }
                    public string OwnerId { get; set; }
                    public long ProjectId { get; set; }
                    public bool? Repeatability { get; set; }
                    public string ParamValues { get; set; }
                    public string Description { get; set; }
                    public string ResGroupName { get; set; }
            }
        };

    }

}
