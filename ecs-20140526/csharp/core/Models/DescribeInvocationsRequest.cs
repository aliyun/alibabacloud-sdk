// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeInvocationsRequest : TeaModel {
        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("InvokeId")]
        [Validation(Required=false)]
        public string InvokeId { get; set; }

        [NameInMap("CommandId")]
        [Validation(Required=false)]
        public string CommandId { get; set; }

        [NameInMap("CommandName")]
        [Validation(Required=false)]
        public string CommandName { get; set; }

        [NameInMap("CommandType")]
        [Validation(Required=false)]
        public string CommandType { get; set; }

        [NameInMap("Timed")]
        [Validation(Required=false)]
        public bool? Timed { get; set; }

        [NameInMap("InvokeStatus")]
        [Validation(Required=false)]
        public string InvokeStatus { get; set; }

        [NameInMap("InstanceId")]
        [Validation(Required=false)]
        public string InstanceId { get; set; }

        [NameInMap("ContentEncoding")]
        [Validation(Required=false)]
        public string ContentEncoding { get; set; }

        [NameInMap("IncludeOutput")]
        [Validation(Required=false)]
        public bool? IncludeOutput { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=false)]
        public long PageNumber { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=false)]
        public long PageSize { get; set; }

    }

}
