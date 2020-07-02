// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dataworks_public20200518.Models
{
    public class GetBaselineStatusRequest : TeaModel {
        [NameInMap("BaselineId")]
        [Validation(Required=true)]
        public long BaselineId { get; set; }

        [NameInMap("Bizdate")]
        [Validation(Required=true)]
        public string Bizdate { get; set; }

        [NameInMap("InGroupId")]
        [Validation(Required=true)]
        public int? InGroupId { get; set; }

    }

}
