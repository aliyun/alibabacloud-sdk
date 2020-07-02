// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dataworks_public20200518.Models
{
    public class GetBaselineConfigResponse : TeaModel {
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
        public GetBaselineConfigResponseData Data { get; set; }
        public class GetBaselineConfigResponseData : TeaModel {
            [NameInMap("BaselineId")]
            [Validation(Required=true)]
            public long BaselineId { get; set; }
            [NameInMap("Priority")]
            [Validation(Required=true)]
            public int? Priority { get; set; }
            [NameInMap("BaselineName")]
            [Validation(Required=true)]
            public string BaselineName { get; set; }
            [NameInMap("Owner")]
            [Validation(Required=true)]
            public string Owner { get; set; }
            [NameInMap("ProjectId")]
            [Validation(Required=true)]
            public long ProjectId { get; set; }
            [NameInMap("UseFlag")]
            [Validation(Required=true)]
            public bool? UseFlag { get; set; }
            [NameInMap("BaselineType")]
            [Validation(Required=true)]
            public string BaselineType { get; set; }
            [NameInMap("ExpHour")]
            [Validation(Required=true)]
            public int? ExpHour { get; set; }
            [NameInMap("ExpMinu")]
            [Validation(Required=true)]
            public int? ExpMinu { get; set; }
            [NameInMap("SlaHour")]
            [Validation(Required=true)]
            public int? SlaHour { get; set; }
            [NameInMap("SlaMinu")]
            [Validation(Required=true)]
            public int? SlaMinu { get; set; }
            [NameInMap("HourExpDetail")]
            [Validation(Required=true)]
            public string HourExpDetail { get; set; }
            [NameInMap("HourSlaDetail")]
            [Validation(Required=true)]
            public string HourSlaDetail { get; set; }
            [NameInMap("IsDefault")]
            [Validation(Required=true)]
            public bool? IsDefault { get; set; }
        };

    }

}
