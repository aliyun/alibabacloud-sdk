// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Videorecog.Models
{
    public class GenerateVideoCoverAdvanceRequest : TeaModel {
        [NameInMap("VideoUrlObject")]
        [Validation(Required=true)]
        public Stream VideoUrlObject { get; set; }

        [NameInMap("IsGif")]
        [Validation(Required=true)]
        public bool? IsGif { get; set; }

    }

}
