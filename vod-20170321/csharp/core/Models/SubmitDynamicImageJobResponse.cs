// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vod20170321.Models
{
    public class SubmitDynamicImageJobResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("DynamicImageJob")]
        [Validation(Required=true)]
        public SubmitDynamicImageJobResponseDynamicImageJob DynamicImageJob { get; set; }
        public class SubmitDynamicImageJobResponseDynamicImageJob : TeaModel {
            [NameInMap("JobId")]
            [Validation(Required=true)]
            public string JobId { get; set; }
        };

    }

}
