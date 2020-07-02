// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dataworks_public20200518.Models
{
    public class ListBaselineStatusesResponse : TeaModel {
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
        public ListBaselineStatusesResponseData Data { get; set; }
        public class ListBaselineStatusesResponseData : TeaModel {
            [NameInMap("PageNumber")]
            [Validation(Required=true)]
            public int? PageNumber { get; set; }
            [NameInMap("PageSize")]
            [Validation(Required=true)]
            public int? PageSize { get; set; }
            [NameInMap("TotalCount")]
            [Validation(Required=true)]
            public int? TotalCount { get; set; }
            [NameInMap("BaselineStatuses")]
            [Validation(Required=true)]
            public List<ListBaselineStatusesResponseDataBaselineStatuses> BaselineStatuses { get; set; }
            public class ListBaselineStatusesResponseDataBaselineStatuses : TeaModel {
                    public string BaselineName { get; set; }
                    public long BaselineId { get; set; }
                    public long Bizdate { get; set; }
                    public string Owner { get; set; }
                    public long ExpTime { get; set; }
                    public long FinishTime { get; set; }
                    public long EndCast { get; set; }
                    public long SlaTime { get; set; }
                    public int? Priority { get; set; }
                    public long ProjectId { get; set; }
                    public long Buffer { get; set; }
                    public string Status { get; set; }
                    public string FinishStatus { get; set; }
                    public int? InGroupId { get; set; }
            }
        };

    }

}
