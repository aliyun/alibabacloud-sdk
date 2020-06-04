// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vod20170321.Models
{
    public class SubmitMediaDNADeleteJobResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("MediaId")]
        [Validation(Required=true)]
        public string MediaId { get; set; }

        [NameInMap("JobId")]
        [Validation(Required=true)]
        public string JobId { get; set; }

    }

}
