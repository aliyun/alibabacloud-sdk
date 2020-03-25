// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Videoenhan.Models
{
    public class AdjustVideoColorRequest : TeaModel {
        [NameInMap("VideoUrl")]
        [Validation(Required=true)]
        public string VideoUrl { get; set; }

        [NameInMap("VideoBitrate")]
        [Validation(Required=false)]
        public string VideoBitrate { get; set; }

        [NameInMap("VideoCodec")]
        [Validation(Required=false)]
        public string VideoCodec { get; set; }

        [NameInMap("VideoFormat")]
        [Validation(Required=false)]
        public string VideoFormat { get; set; }

        [NameInMap("Mode")]
        [Validation(Required=true)]
        public string Mode { get; set; }

    }

}
