// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dataworks_public20200518.Models
{
    public class ListBaselineConfigsResponse : TeaModel {
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
        public ListBaselineConfigsResponseData Data { get; set; }
        public class ListBaselineConfigsResponseData : TeaModel {
            [NameInMap("PageNumber")]
            [Validation(Required=true)]
            public int? PageNumber { get; set; }
            [NameInMap("PageSize")]
            [Validation(Required=true)]
            public int? PageSize { get; set; }
            [NameInMap("TotalCount")]
            [Validation(Required=true)]
            public int? TotalCount { get; set; }
            [NameInMap("Baselines")]
            [Validation(Required=true)]
            public List<ListBaselineConfigsResponseDataBaselines> Baselines { get; set; }
            public class ListBaselineConfigsResponseDataBaselines : TeaModel {
                    public long BaselineId { get; set; }
                    public int? Priority { get; set; }
                    public string BaselineName { get; set; }
                    public string Owner { get; set; }
                    public long ProjectId { get; set; }
                    public bool? UseFlag { get; set; }
                    public string BaselineType { get; set; }
                    public int? ExpHour { get; set; }
                    public int? ExpMinu { get; set; }
                    public int? SlaHour { get; set; }
                    public int? SlaMinu { get; set; }
                    public string HourExpDetail { get; set; }
                    public string HourSlaDetail { get; set; }
                    public bool? IsDefault { get; set; }
            }
        };

    }

}
