// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dataworks_public20200518.Models
{
    public class GetNodeOnBaselineResponse : TeaModel {
        [NameInMap("Success")]
        [Validation(Required=true)]
        public string Success { get; set; }

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
        public List<GetNodeOnBaselineResponseData> Data { get; set; }
        public class GetNodeOnBaselineResponseData : TeaModel {
            [NameInMap("NodeId")]
            [Validation(Required=true)]
            public long NodeId { get; set; }

            [NameInMap("NodeName")]
            [Validation(Required=true)]
            public string NodeName { get; set; }

            [NameInMap("Owner")]
            [Validation(Required=true)]
            public string Owner { get; set; }

            [NameInMap("ProjectId")]
            [Validation(Required=true)]
            public long ProjectId { get; set; }

        }

    }

}
