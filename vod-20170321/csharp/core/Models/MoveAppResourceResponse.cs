// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vod20170321.Models
{
    public class MoveAppResourceResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("NonExistResourceIds")]
        [Validation(Required=true)]
        public List<string> NonExistResourceIds { get; set; }

        [NameInMap("FailedResourceIds")]
        [Validation(Required=true)]
        public List<string> FailedResourceIds { get; set; }

    }

}
