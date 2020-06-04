// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vod20170321.Models
{
    public class DeleteMezzaninesResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("NonExistVideoIds")]
        [Validation(Required=true)]
        public List<string> NonExistVideoIds { get; set; }

        [NameInMap("UnRemoveableVideoIds")]
        [Validation(Required=true)]
        public List<string> UnRemoveableVideoIds { get; set; }

    }

}
