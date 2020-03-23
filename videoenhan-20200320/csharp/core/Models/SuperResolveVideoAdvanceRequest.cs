// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Videoenhan.Models
{
    public class SuperResolveVideoAdvanceRequest : TeaModel {
        [NameInMap("VideoUrlObject")]
        [Validation(Required=true)]
        public Stream VideoUrlObject { get; set; }

        [NameInMap("BitRate")]
        [Validation(Required=false)]
        public int? BitRate { get; set; }

    }

}
